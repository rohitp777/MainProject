<?php
	
	require('connect.php');
	include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['category_id']) && isset ($_POST['job_id']))
	{
			
		$categoryid=$_POST['category_id'];
		$id=$_POST['job_id'];
	
		
			
			$sql = "INSERT INTO jobberland_job2category(category_id,job_id) VALUES ('$_POST[category_id]', '$_POST[job_id]')";
		
				
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
<form action="job2category.php" method="POST">
Job Posting ID: <input type="text" name="job_id" value="<?php //echo $login_session=$row['id'];

require('connect.php');

//include('lockjp.php');

$login_session=$row['email_address'];

$ses_sql=mysql_query("select * from jobberland_job where poster_email='$login_session' ");

$row=mysql_fetch_array($ses_sql);

$id=$row['id'];

echo $id=$row['id'];

?>"  readonly /> 
<br><br>

			<!--input type="radio" name="category_id" value="1" />Accounting and Auditing Services<br>	
			<input type="radio" name="category_id" value="2" />Advertising and PR Services<br>
			<input type="radio" name="category_id" value="3" />Aerospace and Defence<br>
			<input type="radio" name="category_id" value="4" />Agriculture/Forestry/Fishing<br>
			<input type="radio" name="category_id" value="5" />Architectural and Design Services<br>	
			<input type="radio" name="category_id" value="6" />Automotive and Parts Mfg<br>	
			<input type="radio" name="category_id" value="7" />Automotive Sales and Repair Services<br>	
			<input type="radio" name="category_id" value="8" />Banking and Consumer Lending<br-->	
		<br>
		
Job Industry Sector:<select name="category_id"> 
<option value="1">Accounting and Auditing Services</option>
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
<br><br>


<input type="submit" value="submit">
</form>

<br>
		<form action="job2status.php" method="POST">
		
		<input type="submit" name="submit" value="Continue">
		</form>

</div>
</div>
</body>
</html>