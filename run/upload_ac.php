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

<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
</body>
</div>
</html>




