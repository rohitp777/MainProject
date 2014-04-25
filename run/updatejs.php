<?php
require('connect.php');

include('lockjs.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['email_address']))
  
		{
		$email = $_POST['email_address'];
		$username=$_POST['username'];
		//$password=md5($_POST['passwd']);
		//$title=$_POST['title'];
		$fname=$_POST['fname'];
		$sname=$_POST['sname'];
		$address=$_POST['address'];
		$address2=$_POST['address2'];
		$city=$_POST['city'];
		$stateprovince=$_POST['state_province'];
		$country=$_POST['country'];
		$postcode=$_POST['post_code'];
		$phnumber=$_POST['phone_number'];
		$fkcareerdegree=$_POST['fk_career_degree_id'];
		$date=$_POST['date_register'];
		
		
        $sql = "UPDATE jobberland_employee SET fname= '$_POST[fname]',sname= '$_POST[sname]',
				address= '$_POST[address]',address2= '$_POST[address2]',
				city= '$_POST[city]',state_province= '$_POST[state_province]',country= '$_POST[country]',post_code= '$_POST[post_code]',
				phone_number= '$_POST[phone_number]',fk_career_degree_id= '$_POST[fk_career_degree_id]',date_register= '$_POST[date_register]'
		WHERE username='$username'";
			
	 if( mysql_query($sql))
	   {
        $msg = "Your Account has been Updated";
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

</head>
<body>
<!-- Form for logging in the users -->
<div id="content">

<div class="register-form">
<?php
if(isset($msg) & !empty($msg)){
		echo $msg;
	}
 ?> 

<h1>Register</h1>
<form action="updatejs.php" method="POST" id="updatejs">
 
 <div class="style_form">
 <b><span class="red">*</span>For Updating all Fields are mandatory</b><br><br>

Email:<input type="email" name="email_address" id="email_address" value="<?php echo$login_session=$row['email_address'];?>" class="form_element" readonly />

</div>
<br>

<div class="style_form">
Username:<input type="text" name="username" id="username" value="<?php echo $login_session=$row['username']; ?>" class="form_element" readonly /><br>
 </div>
<br>

<div class="style_form">
First Name:<input type="text" name="fname" value="<?php echo $login_session=$row['fname']; ?>" /><br><br>
</div>

<div class="style_form">
Last Name:<input type="text" name="sname" value="<?php echo $login_session=$row['sname']; ?>" /><br><br>
</div>

Address:<input type="text" name="address" value="<?php echo $login_session=$row['address']; ?>" /><br><br>

Address2:<input type="text" name="address2" value="<?php echo $login_session=$row['address2']; ?>" /><br><br>

<script type="text/javascript" src="countries.js"></script>

Update Country:<select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>

<br><br>
Update State:<select name ="state_province" id ="state_province" value="<?php echo $login_session=$row['state_province']; ?>"></select>
	<script language="javascript">print_country("country");</script>	
<br><br>

City:<input type="text" name ="city" value="<?php echo $login_session=$row['state_province']; ?>" /><br><br>

Post Code:<input type="text" name ="post_code" value="<?php echo $login_session=$row['post_code']; ?>" /><br><br>

Contact no:<input type="tel" name ="phone_number" value="<?php echo $login_session=$row['phone_number']; ?>"><br><br>
	
Update Applying Positions:<br>
<input type="radio" name="fk_career_degree_id" value="1" checked>None of these<br>	
<input type="radio" name="fk_career_degree_id" value="2">Student (Higher education/Graduate)<br>
<input type="radio" name="fk_career_degree_id" value="3">Entry Level<br>
<input type="radio" name="fk_career_degree_id" value="4">Experienced (Non-Manager)<br>
<input type="radio" name="fk_career_degree_id" value="5">Manager (Manager/Supervisor of Staff)<br>
<input type="radio" name="fk_career_degree_id" value="6">Executive (Director, Department Head)<br>
<input type="radio" name="fk_career_degree_id" value="7">Senior Executive (Chairman, MD, CEO)<br><br>

Update Date Register for Positions:<input type="date" name="date_register"><br><br>

 <div class="style_form">
<input name="submit" type="submit" value="Update" id="submit_btn" />
</div>
</form>
</div>
</div>
</body>
</html>