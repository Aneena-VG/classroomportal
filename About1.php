<!DOCTYPE HTML>
<!--
	Hielo by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php
if(isset($_SESSION['user']))
   {
	   header('location: user/index.php');
   }
else if(isset($_SESSION['faculty_login']))
   {
	   header('location: faculty/index.php');
   }
   
else if(isset($_SESSION['admin']))
   {
	   header('location: admin');
   }

?>
<html>
	<head>
		<link rel="icon" type="image/png" href="images/favicon.ico">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>SCH</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="css/main.css" />
	</head>

	<body>

    <header id="header" class="alt">
      <div class="logo"><a href="home2.php">Welcome to <span> SNMIMT CLASSROOM HUB </span></a></div>
      <a href="#menu">Menu</a>
    </header>

    <!-- Nav -->
    <nav id="menu">

      <ul class="links">

        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="home2.php"><i class="fa fa-home fa-fw"></i>Home</a>
        </li>

        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="About1.php"><i class="fa fa-home fa-fw"></i>About</a>
        </li>

        <li style="color:#FFFFFF">
            <a style="color:#FFFFFF" href="Registration1.php"><i class="fa fa-home fa-fw"></i>Registration</a>
        </li>

        <li class="dropdown">
              <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-sign-in fa-fw"></i>Login
              <span class="caret"></span></a>
              <ul class="dropdown-menu">

                 <li><a href="Login1.php">Student</a></li>
                 <li><a href="Faculty_login1.php">Faculty</a></li>
								 <li><a href="admin_login.php">Admin</a></li>
             </ul>
         </li>


       </ul>
    </nav>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>About US</p>
					  <h2>SNMIMT CLASSROOM HUB</h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">

              <p>The primary goal of SNMIMT Classroom Hub is to foster communication between the instructors and students. The three main modules of the classroom hub are admin, faculty, and student.The college's administrator is designated as its principle. Administrators add faculty members and create accounts for them. By using the password and email that the administrator has provided, faculty can access their accounts.  Study materials, assignments, attendance tracking, course approval, viewing feedback, and assignment submissions are all things that faculty can upload. Based on student comments, administrators can assess the effectiveness of each faculty.   </p>
              <p> 
              For students, setting up an account requires self-registration. After registering, users can access their accounts by entering their email address and password. Students may check attendance, access course materials, submit homework, and provide feedback.
              Primarly this classroom hub aims to create a centralized digital space where teachers and students, can interact, access resources, and manage various aspects of the learning experience.
              </p>
						</div>
					</div>
				</div>
			</section>

	
		<!-- Scripts -->
			<script src="js/jquery.min.js"></script>
			<script src="js/jquery.scrollex.min.js"></script>
			<script src="js/skel.min.js"></script>
			<script src="js/util.js"></script>
			<script src="js/main.js"></script>

	</body>
</html>
