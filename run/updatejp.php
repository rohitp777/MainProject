<?php
require('connect.php');

include('lockjp.php');

    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['email_address']))
  
		{
		
		$companyname=$_POST['company_name'];
		$contactname=$_POST['contact_name'];
		$site=$_POST['site_link'];
		$companydesc=$_POST['company_desc'];
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
		//$fkcareerdegree=$_POST['fk_career_degree_id'];
		$jobqty=$_POST['job_qty'];
		$date=$_POST['date_register'];
		
		
        $sql = "UPDATE jobberland_employer SET  company_name= '$_POST[company_name]', contact_name= '$_POST[contact_name]',
				 site_link= '$_POST[site_link]', company_desc= '$_POST[company_desc]',fname= '$_POST[fname]',sname= '$_POST[sname]',
				address= '$_POST[address]',address2= '$_POST[address2]',
				city= '$_POST[city]',state_province= '$_POST[state_province]',country= '$_POST[country]',post_code= '$_POST[post_code]',
				phone_number= '$_POST[phone_number]', job_qty= '$_POST[job_qty]',date_register= '$_POST[date_register]'
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
<form action="updatejp.php" method="POST" id="updatejp">
 
 <div class="style_form">
 <b><span class="red">*</span>For Updating all Fields are mandatory</b><br><br>
 
 <div class="style_form">
Company Name:<input type="text" name="company_name" value="<?php echo $login_session=$row['company_name']; ?>"><br><br>
</div>

 <div class="style_form">
Contact Name:<input type="text" name="contact_name" value="<?php echo $login_session=$row['contact_name']; ?>"><br><br>
</div>

 <div class="style_form">
Website Link:<input type="url" name ="site_link" value="<?php echo $login_session=$row['site_link'];?>"><br><br>
</div>

 <div class="style_form">
Company's Detail:<br>
<textarea name="company_desc" ROWS="5" COLS="50"><?php echo $login_session=$row['company_desc'];?></textarea><br><br>
</div>


Email:<input type="email" name="email_address" id="email_address" value="<?php echo$login_session=$row['email_address'];?>" class="form_element" readonly />

</div>
<br><br>

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

Job Positions Availability:<input type="number" name="job_qty" value="<?php echo $login_session=$row['job_qty']; ?>"><br><br>

Update Date Register for Job Posted:<input type="date" name="date_register"><br><br>

 <div class="style_form">
<input name="submit" type="submit" value="Update" id="submit_btn" />
</div>
</form>
</div>
</div>
</body>
</html>