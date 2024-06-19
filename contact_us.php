<?php 
    $servername = "localhost:3309";
    $username = "root";
    $password = "";
    $dbname = "job";
         
    $conn = mysqli_connect($servername, $username, $password, $dbname);
         
    if (mysqli_connect_error()) {
      die("Connection failed: " . mysqli_connect_error());
    }
	
	if(isset($_POST['btn1'])){
		
		$fname = $_POST['fullname'];
		$email = $_POST['email'];
		$messages = $_POST['messages'];
		
        $sql = "INSERT INTO contact VALUES ('$fname','$email','$messages')";
     
		$result = mysqli_query($conn,$sql);
     
		if ($result) {
			echo "Your message has been sent.";
			echo "<script>window.location = 'contact_us.php'</script>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}

    mysqli_close($conn);
?>

<html>
<head>
	<title>Contact Us</title>
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
	<h1 class = "header2">Contact Us</h1>
	<div class = "hero4">
		<div class = "contact">
			<table border = "0" class = "logob">
				<tr>
					<td><img src = "images/gmail_logo_96px.png" width = "40px" height = "40px"></td>
					<td class = "logo">- &emsp; topjobssrilanka@gmail.com</td>
				</tr>
				<tr>
					<td><img src = "images/whatsapp_96px.png" width = "40px" height = "40px"></td>
					<td class = "logo">- &emsp; +94 713347882</td>
				</tr>
				<tr>
					<td><img src = "images/facebook.png" width = "40px" height = "40px"></td>
					<td class = "logo">- &emsp; Top Jobs Sri Lanka</td>
				</tr>
				<tr>
					<td><img src = "images/instagram_96px.png" width = "40px" height = "40px"></td>
					<td class = "logo">- &emsp; top_jobs_srilanka</td>
				</tr>
			</table>
		</div>	
		<div class = "msg">
			<form action = "contact_us.php" method = "POST">
			<table border = "0" class = "msgb">
				<tr>
					<td><input type = "text" onfocus="this.value=''" name = "fullname" placeholder = "Full Name" class = "input-group1" required/></td>
				</tr>
				<tr>
					<td><input type = "text" onfocus="this.value=''" name = "email" placeholder = "Email" class = "input-group1" required/></td>
				</tr>
				<tr>
					<td><textarea name="messages" rows="12" cols="52" onfocus="this.value=''" placeholder = "Messages" class = "input-group2"></textarea></td>					
				</tr>
				<tr>
					<td><input type = "submit" value = "Send" name = "btn1" class = "btn1"></td>
				</tr>
			</table>
		</div>
	</div>
	<div>
		<footer>Designed and Developed By: Nisula Premaratne Copyright &copy; 2022. <small>All Rights Reserved.</small></footer>
	</div>
</body>
</html>