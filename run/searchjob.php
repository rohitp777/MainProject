<?php
	
	require('connect.php');
	include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['keywords']) && isset ($_POST['results']))
	{
			
		$keyword=$_POST['keywords'];
		$results=$_POST['results'];
		$position=$_POST['created_on'];
		$desc=$_POST['description'];
		//$link=$_POST['link'];
	
		
			
			$sql = "INSERT INTO jobberland_search(keywords,results,created_on,description) VALUES
			('$_POST[keywords]', '$_POST[results]', '$_POST[created_on]', '$_POST[description]')";
		
				
	 if(mysql_query($sql))
	   {
        echo "Entered Success";
		
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }
    }

	    mysql_close($connection); 
		
      
?>

<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<h3><strong> Job Category Details</strong></h3>
</head>
<body>
<div id="content">
<div class="register-form">
<form action="searchjob.php" method="POST">
<label for="results">Job Search ID:  </label><input type="text" name="results" value="<?php //echo $login_session=$row['id'];

require('connect.php');

//include('lockjp.php');

$login_session=$row['email_address'];

$ses_sql=mysql_query("select * from jobberland_job where poster_email='$login_session' ");

$row=mysql_fetch_array($ses_sql);

$id=$row['id'];

echo $id=$row['id'];

?>"  readonly /> 
<br><br>
<label for="keywords">Mention Your keywords for Employee Searching this Job: </label>
			<input  name="keywords" type="text"/>
		<br>
		<br>
			<label for="created_on">Job Search Title:</label>
			<input name="created_on" type="text" />
	<br>
		<br>
			<label for="description">Job Role:</label>
			<input name="description" type="text" />
	
		

<br><br>


<input type="submit" value="submit">
</form>

<br>
		<!--form action="job2type.php" method="POST">
		
		<input type="submit" name="submit" value="Continue">
		</form-->
	<form action="welcomejp.php" method="POST">
		
		<input type="submit" name="submit" value="Home Page">
		</form>
		
		
</div>
</div>
</body>
</html>