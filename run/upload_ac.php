<html>
<head>
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div class="register-form">
<?php
include('lockjs.php');
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
echo "<h3>"."Resume Uploaded Successfully"."</h3>"."<BR/>"; 

//$HTTP_POST_FILES['ufile']['name'] = file name
//$HTTP_POST_FILES['ufile']['size'] = file size
//$HTTP_POST_FILES['ufile']['type'] = type of file

echo "<b>"."File Name:"."</b>".$_FILES['ufile']['name']."<BR/>"; 
echo "<b>"."File Size:"."</b>".$_FILES['ufile']['size']."<BR/>"; 
echo "<b>"."File Type:"."</b>".$_FILES['ufile']['type']."<BR/>"; 
//echo "<img src=\"$path\" width=\"150\" height=\"150\">";
echo "<a href=>$ufile"."</a>";
echo "<br>";
echo "<strong>"."Copy The Above Link in the Address bar to Download the file"."</strong>";
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

<!--br><br>
<form action="cvidpost.php" method="post">
<b>Your Resume ID:</b> <input type="text" name="cv_id" 
value="<?php 
/*require('connect.php');
$login_session=$row['id'];

$ses_sql=mysql_query("select id from jobberland_cv_detail where fk_employee_id='$login_session'");

//$row=mysql_fetch_array($ses_sql);


		while($row=mysql_fetch_array($ses_sql))
	{

$cvid=$row['id'];

echo $id=$row['id'];
}
*/
?>"  readonly /> 
<br><br>

<b>Job Industry Sector:</b><select name="category_id"> 
<option selected>---Select Job Category---</option>
<option value="1">Accounting and Auditing Services</option> 
<option value="2">Advertising and PR Services </option>  
<option value="3">Aerospace and Defence </option>  
<option value="4">Agriculture/Forestry/Fishing </option>  
<option value="5">Architectural and Design Services</option>
<option value="6">Automotive and Parts Mfg</option>  
<option value="7">Automotive Sales and Repair Services </option>  
<option value="8">Banking and Consumer Lending </option>  
<option value="9">Biotechnology/Pharmaceuticals </option>  
<option value="10"> Broadcasting, Music, and Film</option>  
<option value="11">Business Services - Other </option>  
<option value="12"> Chemicals/Petro-Chemicals</option>  
<option value="13"> Clothing and Textile Manufacturing</option>  
<option value="14"> Computer Hardware</option>  
<option value="15"> Computer Software</option>  
<option value="16">Computer/IT Services </option>  
<option value="17">Construction - Industrial Facilities and Infrastructure </option>  
<option value="18"> Construction - Residential & Commercial/Office</option>  
<option value="19"> Education</option>  
<option value="20"> Electronics, Components, and Semiconductor Mfg</option>  
<option value="21"> Energy and Utilities</option>  
<option value="22">Engineering Services </option>  
<option value="23">Entertainment Venues and Theatres </option>  
<option value="24">Financial Services </option>  
<option value="25">Food and Beverage Production </option>  
<option value="26">Government and Public Sector </option>  
<option value="27">Healthcare Services </option>  
<option value="28"> Hotels and Lodging</option>  		
<option value="29">Insurance  </option>  	
<option value="30">Internet Services </option>  	
</select>
<br>	
		<br>
		
<input type="submit" value="submit">
</form-->		




<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
</body>
</div>
</html>




