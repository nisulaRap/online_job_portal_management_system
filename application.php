<?php 
    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "job";
         
    $conn = mysqli_connect($servername, $username, $password, $dbname);
         
    if (mysqli_connect_error()) {
      die("Connection failed: " . mysqli_connect_error());
    }

	if(isset($_POST['btn2'])){
		
		$name = $_POST['namewithinitials'];
		$fname = $_POST['fname'];
		$address = $_POST['address'];
		$dob = $_POST['dob'];
		$gender = $_POST['gender'];
		$contact = $_POST['contactno'];
		$status = $_POST['status'];
		$email = $_POST['email'];
		$file = $_POST['myfile'];	
			
		$sql = "INSERT INTO application VALUES ('$name','$fname','$address','$dob','$gender','$contact','$status','$email','$file')";
     
		$result = mysqli_query($conn,$sql);
     
		if ($result) {
			echo "successfully Submitted..";
			echo "<script>window.location = 'application.php'</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

    mysqli_close($conn);
?>

<html>
<head>
	<title>Application Form</title>
	<link rel = "stylesheet" href = "style.css">
</head>
<body>
	<table class = "topic">
		<tr>
			<th class = "topicsub1"><img src = "images/TJS logo.png" width = "280px" height = "60px"></th>
			<th class = "topicsub2">Top Jobs Sri Lanka</th>
		</tr>
	</table>
	<table class = 'header1'>
		<tr>
			<th><a href = "jobitem.php" class = "a1">HOME</a></th>
			<th><a href = "post_advertisements.php" class = "a1">POST ADVERTISEMENTS</a></th>
			<th><a href = "about_us.html" class = "a1">ABOUT US</a></th>
			<th><a href = "contact_us.php" class = "a1">CONTACT US</a></th>
			<th class = "span1"><a href = "home.php" class = "a1">LOGOUT</a></th>
		</tr>
	</table>
	<div>
		<h1 class = "header2">Submit Application</h1>
		<form action = "application.php" method = "POST" class = "hero">
			<table border = "0" class = "form2">
				<tr>
					<th colspan = "2" class = "person">PERSONAL INFO</th>
				</tr>
				<tr>
					<td class = "space">Name with Initials </td> 
					<td class = "space"><input type = "text" onfocus="this.value=''" name = "namewithinitials" placeholder = "Name with Initials" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">Full Name </td> 
					<td class = "space"><input type = "text" onfocus="this.value=''" name = "fname" placeholder = "Full Name" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">Address </td> 
					<td class = "space"><input type = "text" onfocus="this.value=''" name = "address" placeholder = "Address" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">Date of Birth </td> 
					<td class = "space"><input type = "date" onfocus="this.value=''" name = "dob" placeholder = "Date of Birth" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">Sex </td> 
					<td class = "space"><input type="radio" name="gender" value="male" required/> Male
										<input type="radio" name="gender" value="female" required/> Female
					</td>
				</tr>
				<tr>
					<td class = "space">Contact No </td> 
					<td class = "space"><input type = "text" onfocus="this.value=''" name = "contactno" placeholder = "Contact No" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">Civil Status </td> 
					<td class = "space"><select name="status">
											<option value="single">Single</option>
											<option value="married">Married</option>
											<option value="widow">Widow</option>											
										</select>
					</td>
				</tr>
				<tr>
					<td class = "space">Email </td> 
					<td class = "space"><input type = "text" onfocus="this.value=''" name = "email" placeholder = "Email" class = "input-group" required/></td>
				</tr>
				<tr>
					<td class = "space">CV Attachement File </td> 
					<td class = "space"><input type="file" name="myfile"></td>
				</tr>
				<tr>
					<td colspan = "2"><input type = "submit" value = "Submit" name = "btn2" class = "btn2" /></td>
				</tr>
			</table>
		</form>
	</div>
	<div>
		<footer>Designed and Developed By: Nisula Premaratne Copyright &copy; 2022. <small>All Rights Reserved.</small></footer>
	</div>	
</body>
</html>