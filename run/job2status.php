<?php
	
	require('connect.php');
	include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['fk_job_id']) && isset ($_POST['fk_job_status_id']))
	{
			
		$categoryid=$_POST['fk_job_id'];
		$id=$_POST['fk_job_status_id'];
	
		
			
			$sql = "INSERT INTO jobberland_job2status(fk_job_id,fk_job_status_id) VALUES ('$_POST[fk_job_id]', '$_POST[fk_job_status_id]')";
		
				
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
<form action="job2status.php" method="POST">
Job Posting ID: <input type="text" name="fk_job_id" value="<?php //echo $login_session=$row['id'];

require('connect.php');

//include('lockjp.php');

$login_session=$row['email_address'];

$ses_sql=mysql_query("select * from jobberland_job where poster_email='$login_session' ");

$row=mysql_fetch_array($ses_sql);

$id=$row['id'];

echo $id=$row['id'];

?>"  readonly /> 
<br><br>

			Job Status:<br>
			<input type="radio" name="fk_job_status_id" value="1" />Permanent<br>	
			<input type="radio" name="fk_job_status_id" value="2" />Part-Time<br>
			<input type="radio" name="fk_job_status_id" value="3" />Contract<br>
			<input type="radio" name="fk_job_status_id" value="4" />Temporary/Contract/Project<br>
			<input type="radio" name="fk_job_status_id" value="5" />Placement Student<br>	
			<input type="radio" name="fk_job_status_id" value="6" />Seasonal<br>	
		<br>
		

<br><br>


<input type="submit" value="submit">
</form>

<br>
		<form action="job2type.php" method="POST">
		
		<input type="submit" name="submit" value="Continue">
		</form>

</div>
</div>
</body>
</html>