<!DOCTYPE html>
<!--html lang="en">
<head>
<meta charset="utf-8">
<title>Job Search for Job Seekers</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
	<div class="register-form">
<form action='search.php' method='GET'>
<center>
<h1>Job Search by Sector</h1>
<select name="search"> 
<option selected>---Select Job Category---</option>
<option value="accounting">Accounting and Auditing Services</option> 
<option value="advertising">Advertising and PR Services </option>  
<option value="aerospace ">Aerospace and Defence </option>  
<option value="agriculture forestry fishing">Agriculture/Forestry/Fishing </option>  
<option value="architectural">Architectural and Design Services</option>
<option value="automotive">Automotive and Parts Mfg</option>  
<option value="automotive sales repair service">Automotive Sales and Repair Services </option>  
<option value="banking">Banking and Consumer Lending </option>  
<option value="biotechnology pharmaceuticals ">Biotechnology/Pharmaceuticals </option>  
<option value="broadcasting music film"> Broadcasting, Music, and Film</option>  
<option value="business">Business Services - Other </option>  
<option value="chemicals petrochemical">Chemicals/Petro-Chemicals</option>  
<option value="clothing textile">Clothing and Textile Manufacturing</option>  
<option value="Computer Hardware">Computer Hardware</option>  
<option value="Computer Software">Computer Software</option>  
<option value="Computer IT Services ">Computer/IT Services </option>  
<option value="construction industrial facilities infrastructure">Construction - Industrial Facilities and Infrastructure </option>  
<option value="construction residential commercial office"> Construction - Residential & Commercial/Office</option>  
<option value="education"> Education</option>  
<option value="electronics"> Electronics, Components, and Semiconductor Mfg</option>  
<option value="energy utilities"> Energy and Utilities</option>  
<option value="engineering services">Engineering Services </option>  
<option value="entertainment venues theatres">Entertainment Venues and Theatres </option>  
<option value="finance">Financial Services </option>  
<option value="food beverage production ">Food and Beverage Production </option>  
<option value="government public">Government and Public Sector </option>  
<option value="healthcare">Healthcare Services </option>  
<option value="hotel"> Hotels and Lodging</option>  		
<option value="insurance ">Insurance  </option>  	
<option value="internet">Internet Services </option>  	
</select>
<br>	



<!--input type='text' size='90' name='search' autocomplete="off"></br></br-->
<!--input type='submit' name='submit'  ></br></br></br>
</center>
</form>
<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
<!--/fieldset-->
<!--/div>
</div>
</body>
</html-->

<?php
//require('connect.php');
include('lockjs.php');

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Rohit Patil Job Site</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logotop.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<marquee><b>Welcome,<?php echo $login_session=$row['fname'];
echo ". ";
echo $login_session=$row['sname'];
/*
echo "<br>";
echo "User-ID:";
echo $login_session=$row['id'];
*/
	  ?></b></marquee>
			<ul class="navigation">
				<li class="active">
					<a href="welcomejs.php">Home</a>
				</li>
				<li>
					<a href="#">My Details</a>
					<div>
						<a href="http://localhost/MainProject/run/jsdetail.php">MY ACCOUNT DETAILS</a>
						<a href="http://localhost/MainProject/run/forgotjs.php">UPDATE PASSWORD</a>
					</div>
				</li>
				<li>
					<a href="#">Resume & Applications</a>
					<div>
						<a href="http://localhost/MainProject/run/resumejs.php">REGISTER CV/RESUME</a>
						
					</div>
				</li>
				<li>
					<a href="#">Job Search</a>
					<div>
						<a href="http://localhost/MainProject/run/jobsearchjs.php">JOB SEARCH BY KEYWORDS</a>
						<a href="http://localhost/MainProject/run/jobsearchsector.php">JOB SEARCH BY CATEGORY</a>
					</div>
				</li>
				<li>
					<a href="careerjs.php">Career Advice</a>
					
				</li>
				<li>
					<a href="servicejs.php">Services</a>
				</li>
				<li>
					<a href="logoutjs.php">Log Out</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<h1>Job Search</h3>
			<form action='search.php' method='GET'>
			<div class="frame2">
				<div class="box">
					<img src="images/seekerhome.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				<h2>Job Search by Sector</h2>
			<select name="search"> 
<option selected>---Select Job Category---</option>
<option value="accounting">Accounting and Auditing Services</option> 
<option value="advertising">Advertising and PR Services </option>  
<option value="aerospace ">Aerospace and Defence </option>  
<option value="agriculture forestry fishing">Agriculture/Forestry/Fishing </option>  
<option value="architectural">Architectural and Design Services</option>
<option value="automotive">Automotive and Parts Mfg</option>  
<option value="automotive sales repair service">Automotive Sales and Repair Services </option>  
<option value="banking">Banking and Consumer Lending </option>  
<option value="biotechnology pharmaceuticals ">Biotechnology/Pharmaceuticals </option>  
<option value="broadcasting music film"> Broadcasting, Music, and Film</option>  
<option value="business">Business Services - Other </option>  
<option value="chemicals petrochemical">Chemicals/Petro-Chemicals</option>  
<option value="clothing textile">Clothing and Textile Manufacturing</option>  
<option value="Computer Hardware">Computer Hardware</option>  
<option value="Computer Software">Computer Software</option>  
<option value="Computer IT Services ">Computer/IT Services </option>  
<option value="construction industrial facilities infrastructure">Construction - Industrial Facilities and Infrastructure </option>  
<option value="construction residential commercial office"> Construction - Residential & Commercial/Office</option>  
<option value="education"> Education</option>  
<option value="electronics"> Electronics, Components, and Semiconductor Mfg</option>  
<option value="energy utilities"> Energy and Utilities</option>  
<option value="engineering services">Engineering Services </option>  
<option value="entertainment venues theatres">Entertainment Venues and Theatres </option>  
<option value="finance">Financial Services </option>  
<option value="food beverage production ">Food and Beverage Production </option>  
<option value="government public">Government and Public Sector </option>  
<option value="healthcare">Healthcare Services </option>  
<option value="hotel"> Hotels and Lodging</option>  		
<option value="insurance ">Insurance  </option>  	
<option value="internet">Internet Services </option>  	
</select>
<br><br>
<input type="submit" name="submit" value="Search">
</form>

</p>
<form action="welcomejs.php" method="POST">
		
		<input type="submit" name="submit" value="Home Page">
		</form>
		</div>
	</div>
	
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="https://www.facebook.com/" class="facebook"></a><a href="https://twitter.com/" class="twitter"></a><a href="https://plus.google.com/" class="googleplus"></a>
				</div>
				<p>
					Rohit. Patil Job Site
				</p>
			</div>
		</div>
	</div>
</body>
</html>