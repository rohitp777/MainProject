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
		<h1>Upload Your Resume</h3>
			<div class="frame2">
				<div class="box">
					<img src="images/luck.jpg" alt="Img" height="298" width="924">
				</div>
			</div>
			<p>
				<?php
//include('lockjs.php');
//set where you want to store files
//in this example we keep file in folder upload 
//$HTTP_POST_FILES['ufile']['name']; = upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif


$path= "C:/wamp/upload/".$_FILES['ufile']['name'];
$ufile=$path;
if($ufile !='none')
{
if(copy($_FILES['ufile']['tmp_name'], $path))
{
echo "<h2>"."Resume Uploaded Successfully !!!"."</h2>"."<BR/>"; 
//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

echo "<p>"."File Name:".$_FILES['ufile']['name']."<BR/>"."</p>"; 
echo "<p>"."File Size:".$_FILES['ufile']['size']."<BR/>"."</p>"; 
echo "<p>"."File Type:".$_FILES['ufile']['type']."<BR/>"."</p>"; 

//echo "<img src=\"$path\" width=\"150\" height=\"150\">";
echo "<a href=>$ufile"."</a>";
echo "<BR/>";
echo "<h2>"."Copy The Above Link in the Address bar to Download the file"."</h2>";
//echo "$ufile";
}

else
{
echo "Error";
}
}



/*
// Your file name you are uploading 
$file_name = $_FILES['ufile']['name'];

// random 4 digit to add to our file name 
// some people use date and time in stead of random digit 
$random_digit=rand(0000,9999);

//combine random digit to you file name to create new file name
//use dot (.) to combile these two variables

$new_file_name=$random_digit.$file_name;

//set where you want to store files
//in this example we keep file in folder upload 
//$new_file_name = new upload file name
//for example upload file name cartoon.gif . $path will be upload/cartoon.gif
$path= "C:/wamp/upload/".$new_file_name;
$ufile=$path;
if($ufile !='none')
{
if(copy($_FILES['ufile']['tmp_name'], $path))
{
echo "Successful<BR/>"; 

//$new_file_name = new file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file
echo "File Name :".$new_file_name."<BR/>"; 
echo "File Size :".$_FILES['ufile']['size']."<BR/>"; 
echo "File Type :".$_FILES['ufile']['type']."<BR/>"; 
}
else
{
echo "Error";
}
}
*/


?>
			



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
