<?php		
		$servername = "localhost:3309";
		$username = "root";
		$password = "";
		$dbname = "job";
		
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
		if (mysqli_connect_error()) {
		  die("Connection failed: " . mysqli_connect_error());
		}	
		
		
		$sql = "SELECT * FROM job_item";
		$result = mysqli_query($conn,$sql);		
		
	
		echo "<html>
				<head>
					<title>Home</title>
					<link rel = 'stylesheet' href = 'style.css'>
				</head>
				<body>
					<table class = 'topic'>
						<tr>
							<th class = 'topicsub1'><img src = 'images/TJS logo.png' width = '280px' height = '60px'></th>
							<th class = 'topicsub2'>Top Jobs Sri Lanka</th>
						</tr>
					</table>
					<table class = 'header1'>
						<tr>
							<th><a href = 'jobitem.php' class = 'a1'>HOME</a></th>
							<th><a href = 'post_advertisements.php' class = 'a1'>POST ADVERTISEMENTS</a></th>
							<th><a href = 'about_us.html' class = 'a1'>ABOUT US</a></th>
							<th><a href = 'contact_us.php' class = 'a1'>CONTACT US</a></th>
							<th class = 'span1'><a href = 'home.php' class = 'a1'>LOGOUT</a></th>
						</tr>
					</table>
					<div class = 'hero2'>

					<form action = 'search.php' method = 'POST' class = 'search-center top'>
						<input type = 'text' name = 'search' class = 'inp1' placeholder = 'Company Name' />
						<input type = 'submit' class = 'subbtn' value = 'Search' />
					</form>
					
			<div class = 'table-wrapper'>
				<table border = '0' width = '1200px' style = 'background-color:MintCream; margin-left:60px; border-radius: 8px; margin-bottom: 40px;'>";
		
			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){		
				echo "<tr>";
				echo "<th align = 'right' width = '240px' style = 'padding:10px 10px;'><img src = 'images/$row[image]' width = '200px' height = '130px'></th>";
				echo "<th colspan = '2' align  = 'left' style = 'padding-left:20px; padding-right:20px; padding-top:20px;'>Company Name :  ". $row['companyname'] . "</br>Location :  ". $row['location'] ."</br>Contact No :  ".  $row['contactno'] ."</br>Salary :  Rs." . $row['salary']. "</br>Qualification / Work Experience :  " . $row['qualification']. "</br>Prefered Sex :  " . $row['gender']. "</br>Job Discription :  " . $row['discription']. "</br>Job Type : " . $row['type']. "</br></br><hr></th>";
				echo "<th align = 'left' width = '200px' style = 'padding-left:10px;'>
						<form action = 'application.php' method = 'POST'>
							<input type = 'submit' name = 'apply' value = 'Apply' class = 'app'/>							
						</form>
					</th>";
				echo "</tr>";
				}			
			}
		echo "</table>
			</div>
			</div>
				<div>
					<footer>Designed and Developed By: Nisula Premaratne Copyright &copy; 2022. <small>All Rights Reserved.</small></footer>
				</div>	
			</body>
		</html>";
?>