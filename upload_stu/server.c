#include<stdio.h>
#include<stdlib.h>
#include<sys/socket.h>
#include<sys/types.h>
#include<netinet/in.h>
#include<arpa/inet.h>
#include<unistd.h>
#include<string.h>

int main()
{
	FILE *fp;
	struct sockaddr_in servaddr,cliaddr;
	int sd,port,s,len,cid,n;
	char name[50],fname[50],rev[50],fileread[100],ack[3];
	sd=socket(AF_INET,SOCK_STREAM,0);
	if(sd<0){
		printf("socket error\n");
		exit(0);}
	else
		printf("socket success\n");
	printf("enter the port address\n");
	scanf("%d",&port);	
		
	servaddr.sin_family=AF_INET;
	servaddr.sin_port=htons(port);
	servaddr.sin_addr.s_addr=htonl(INADDR_ANY);
	if(bind(sd,(struct sockaddr*)&servaddr,sizeof(servaddr))<0)
	{
		printf("bind error\n");
		exit(0);	
		
	}
	else
		printf("bind success\n");
	if(listen(sd,5)<0)
		printf("listen error\n");
	else
		printf("listen success\n");
	len=sizeof(cliaddr);
	
	cid=accept(sd,(struct sockaddr*)&cliaddr,&len);
	if(cid<0)
		printf("accept error\n");
	else
	{
		printf("accept success\n");
	}
	n=recv(cid,rev,100,0);
	rev[n]='\0';
	fp=fopen(rev,"r");
	if(fp==NULL){
		send(cid,"error",5,0);
		close(cid);
		}
	else
	{
		while(fgets(fileread,sizeof(fileread),fp))
		{
			if(send(cid,fileread,sizeof(fileread),0)<0)
				printf("cant send file");
			recv(cid,ack,sizeof(ack),0);
		}
		//if(fgets(fileread,sizeof(fileread),fp))
		//{
			send(cid,"completed",9999,0);
		fclose(fp);	
		//}
	}return 0;
}
		
