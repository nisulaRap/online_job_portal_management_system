<?php
	$servername = "localhost:3309";
	$username = "root";
	$password = "";
	$dbname = "job";
		
	$conn = mysqli_connect($servername, $username, $password, $dbname);
		
	if (mysqli_connect_error()) {
	  die("Connection failed: " . mysqli_connect_error());
	}	
	
	if(isset($_POST['uname'])){
		
		$uname1 = $_POST['uname'];
		$pass1 = $_POST['pass'];
		
		$sql = "SELECT Username,Password FROM new_registration WHERE Username = '$uname1' AND Password = '$pass1'";
	
		$result = mysqli_query($conn,$sql);
	
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){	
				echo "<script>
						alert('Sucess');
					</script>";
					header('Location:jobitem.php');
			}			
		}else{
			echo "<script>
					alert('Login Failed....!');
					window.location.replace('home.php');
				</script>";			
			
		}
	}
	mysqli_close($conn);
?>

<html>
<head>
	<title>Top Jobs Sri Lanka</title>
	<link rel = "stylesheet" href = "style.css">
	<link rel = "stylesheet" href = "slide.css">
</head>
<body>
	<table class = "topic">
		<tr>
			<th class = "topicsub1"><img src = "images/TJS logo.png" width = "280px" height = "60px"></th>
			<th class = "topicsub2">Top Jobs Sri Lanka</th>
		</tr>
	</table>
	<div class = "hero3">
		<div class = "mainboard">
			<div class = "slider">
				<div class = "slides">
					<input type = "radio" name = "radio-btn" id = "radio1">
					<input type = "radio" name = "radio-btn" id = "radio2">
					<input type = "radio" name = "radio-btn" id = "radio3">
					<input type = "radio" name = "radio-btn" id = "radio4">
			
					<div class = "slide first">
						<img src = "images/a.jpg" alt = "">
					</div>
					<div class = "slide">
						<img src = "images/b.jpg" alt = "">
					</div>
					<div class = "slide">
						<img src = "images/c.jpg" alt = "">
					</div>
					<div class = "slide"> 
						<img src = "images/d.jpg" alt = "">
					</div>
			
					<div class = "navigation-auto">
						<div class = "auto-btn1"></div>
						<div class = "auto-btn2"></div>
						<div class = "auto-btn3"></div>
						<div class = "auto-btn4"></div>
					</div>
			
					<div class = "navigation-manual">
						<label for = "radio1" class = "manual-btn"></label>
						<label for = "radio2" class = "manual-btn"></label>
						<label for = "radio3" class = "manual-btn"></label>
						<label for = "radio4" class = "manual-btn"></label>
					</div>
				</div>
				<script>
					var counter = 1;
					setInterval(function(){
						document.getElementById('radio' + counter).checked = true;
						counter ++;
						if(counter > 4){
							counter = 1;
						}
					}, 5000);
	
				</script>
			</div>
	
			<div class = "subboard2">
				<p>
					&nbsp;&nbsp; Top Jobs Sri Lanka is the Sri Lanka's leading free job vacancy advertising web site attrating ever growing number of Unique job seekers who generate around 1000 online applications every month.					
					More than 400 direct employers large and small, recruitment consultants and advertising agencies place hundreds of job vacancies on top jobs at any one time.Top Jobs Sri Lanka is dedicated to delivering large numbers of responsive job seekers that reflect the full spectrum of the Sri Lanka's work force, covering every region and sector across the country.
				</p>
			</div>
		</div>
		
		<div class = "login">
			<h1>Login</h1>
			<form action = "home.php" method = "POST">
				<table border = "0">
					<tr>
						<td class = "space">Username</td> 
						<td class = "space"><input type = "text" onfocus="this.value=''" name = "uname" placeholder = "Username" class = "input-group" required/></td>
					</tr>
					<tr>
						<td class = "space">Password</td>
						<td class = "space"><input type = "password" onfocus="this.value=''" name = "pass" placeholder = "Password" class = "input-group" required/></td>
					</tr>
					<tr>
						<td colspan = "2"><input type = "submit" value = "Submit" name = "btn" class = "btn" /></td>
					</tr>
					<tr>
						<td colspan = "2" class = "space1"><a href = "registration_page.php">Click here to Create Account</a></td>
					</tr>
				</table>
			</form>
		</div>
		<div class = "videopart">
			<video width="412" height="270" controls autoplay>
				<source src="videos/Cinematic Company Profile Business Video introduction.mp4" type="video/mp4">
			</video> 
		</div>
		<div>
			<footer class = "f1">Designed and Developed By: Nisula Premaratne Copyright &copy; 2022. <small>All Rights Reserved.</small></footer>
		</div>
	</div>
</body>
</html>