<?php 

error_reporting(0);
session_start();
session_destroy();
 
 if ($_SESSION['message']) {
 	$message=$_SESSION['message'];

 	echo "<script type = 'text/javascript'> alert('$message');
 	</script>";
 }


 $host = "localhost";
	$user = "root";
	$password = "";
	$db = "project";

	$data = mysqli_connect($host,$user,$password,$db);

	$sql="SELECT * FROM teacher";

	$result=mysqli_query($data,$sql);

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Managemnt</title>
	<link rel="stylesheet" href="style.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

	<nav>
		<label class="logo">Our School</label>

		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>

	<div class="section1">

		<label class="img_text">We Teach Student With Care</label>

		<img class="main_img" src="school_management.jpg">
		
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="welcome_img" src="school2.jpg">
			</div>
			<div class="col-md-8">

				<h1>Welcome To Our_School</h1>
				<p>Welcome to Our_School, where innovation meets education! Our e-school management system is designed to revolutionize the way educational institutions operate, making the entire learning process smoother and more efficient.W-School boasts an intuitive and user-friendly interface, ensuring that administrators, teachers, students can easily navigate through the system.W-School simplifies the grading process. Teachers can input grades, generate report cards, and provide valuable feedback to students and parents. The system supports a variety of assessment methods, making it adaptable to different teaching styles. The design is streamlined for efficiency, making it accessible to users of all technical backgrounds.W-School is more than just a management system; it's a catalyst for educational excellence. Join us on the journey of transforming education.</p>
				
			</div>
		</div>
		
	</div>

	<!---------Teacher Section--------->

	<center>
		<h1>Our Teachers</h1>
	</center>

	<div class="container">
		<div class="row">

			<?php

			while ($info=$result->fetch_assoc()) 

			{
			 	
			 

			 ?>
			<div class="col-md-4">
				<img class="teacher" src="<?php echo "{$info['image']}" ?>">
				
				<h3><?php echo "{$info['name']}" ?></h3>
				<h5><?php echo "{$info['description']}" ?></h5>

			</div>
			
			<?php 

			} 

			?>
			
		</div>
	</div>

	<!---------- Course section---------->

	<center>
		<h1>Our Courses</h1>
	</center>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img class="teacher" src="web.jpg">
				<h3>Web Programming</h3>
				
			</div>
			<div class="col-md-4">
				<img class="teacher" src="graphic.jpg">
				<h3>Graphics Design</h3>
				
			</div>
			<div class="col-md-4">
				<img class="teacher" src="marketing.png">
				<h3>Marketing</h3>
				
				
			</div>
		</div>
	</div>





	<center>
		<h1 class="adm">Admission Form</h1>
	</center>

	<div align="center" class="admission">
		
		<form action="data_check.php" method="POST">
			<div class="adm_int">
				<label class="label_text">Name</label>
				<input class="input_deg" type="" name="name">
			</div>
			<div class="adm_int">
				<label class="label_text">Email</label>
				<input class="input_deg" type="" name="email">
			</div class="adm_int">
			<div class="adm_int">
				<label class="label_text">Phone</label>
				<input class="input_deg" type="" name="phone">
			</div>
			<div class="adm_int">
				<label class="label_text">Message</label>
				<textarea class="input_txt" name="message"></textarea>
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" type="submit" id="submit" value="apply" name="apply">
			</div>
		</form>
	</div>


	<footer>
		<h3 class="footer_txt">This Is Our Student Management System</h3>
	</footer>








	
</body>
</html>