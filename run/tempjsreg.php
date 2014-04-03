<?php
	
	require('connect.php');
	$tbl_name="jobberland_tempjs";

	// Random confirmation code 
    $confirm_code=md5(uniqid(rand()));
    
	// If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['passwd']))
  {
		
		//$confirm_code=md5(uniqid(rand()));
		$email = $_POST['email_address'];
		$username=$_POST['username'];
		$password=md5($_POST['passwd']);
		//md5($password);
		//Use md5($_POST['passwd']);
		$title=$_POST['title'];
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
		$act=$_POST['actkey'];
		
		$comments=$_POST['admin_comments'];
		$status=$_POST['employee_status'];
		$isactive=$_POST['is_active'];
		

        $sql = "INSERT INTO $tbl_name(confirm_code,email_address,username,passwd,title,fname,sname,address,address2,city,state_province,
				country,post_code,phone_number,fk_career_degree_id,date_register,actkey,admin_comments,employer_status,is_active)
				VALUES
				('$confirm_code','$_POST[email_address]','$_POST[username]',md5('$_POST[passwd]'),'$_POST[title]','$_POST[fname]','$_POST[sname]',
				'$_POST[address]','$_POST[address2]','$_POST[city]','$_POST[state_province]','$_POST[country]','$_POST[post_code]',
				'$_POST[phone_number]','$_POST[fk_career_degree_id]','$_POST[date_register]','$_POST[actkey]','$_POST[admin_comments]',
				'$_POST[employer_status]','$_POST[is_active]')";
		$result=mysql_query($sql);
		//if( mysql_query($sql))

		//$count=mysql_num_rows($result);
 if($result)
    {
        $rows=mysql_fetch_array($result);
        //$password  =  $rows['passwd'];//FETCHING PASS
      
        $to = $rows['email_address'];
        
		
		}

/*		
else
	   {
	   $msg="Username or Email-ID already exists.";
	   }
	   if(isset($msg) & !empty($msg)){
		echo $msg;
	}
*/		
//		if($result){
	// ---------------- SEND MAIL FORM ----------------
	require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com'; // "ssl://smtp.gmail.com" didn't worked
$mail->Port = 465;
$mail->SMTPSecure = 'ssl';
$mail->Username = "rockyrox7777@gmail.com";
$mail->Password = "uiopuiop";

$mail->IsHTML(true); // if you are going to send HTML formatted emails
$mail->SingleTo = true;

$mail->From = "rockyrox7777@gmail.com";
$mail->FromName = "Rohit Patil";
	
$mail->addAddress("rockyrox7777@gmail.com","User 2");
	// send e-mail to ...
	//$to=$email;

$mail->Subject = "Your confirmation link here";
$mail->Body = "Your Comfirmation link \r\n";
$mail->Body = "Click on this link to activate your account \r\n";
$mail->Body = "http://localhost/MainProject/run/confirm.php?passkey=$confirm_code";

// send email
//$mail->mail($mail->addAddress,$mail->Subject,$mail->Body,$mail->From);
//}//


// if not found 
/*else 
{
echo "Not found your email in our database";
}

// if your email succesfully sent

/*if($mail->Send())
{
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
}
*/

if ($_POST ['email_address']="") {
    echo "<span style='color: #ff0000;'>"."	Not found your email in our database"."</span>";
        }
        
    //If the message is sent successfully, display success message otherwise display an error message.
    if($result==1)
    //if($count==1)
	{
	if(!$mail->Send())
    echo "Message was not sent <br />PHPMailer Error: " . $mail->ErrorInfo;

	else
    echo "Your Password and Email-Id has been sent has been sent to your registered Email-ID";
        
    }
        else
        {
        if($_POST['email_address']!="")
        echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
    }

}	
// mysql_close($connection); 
?>

		
	 
<DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rohit Patil Job Site</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"> <!--- include the our jquery file  --> 

$(document).ready(function()//When the dom is ready 
{
$("#username").change(function() 
{ //if theres a change in the username textbox

var username = $("#username").val();//Get the value in the username textbox
if(username.length > 3)//if the lenght greater than 3 characters
{
$("#availability_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_username.php",  //file name
    data: "username="+ username,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#availability_status").html('<img src="available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status").html('<font color="#cc0000">Username too short</font>');
//if in case the username is less than or equal 3 characters only 
}



return false;
});

});

//for email address
$(document).ready(function()//When the dom is ready 
{
$("#email_address").change(function() 
{ //if theres a change in the username textbox

var email_address = $("#email_address").val();//Get the value in the username textbox
if(email_address.length > 3)//if the lenght greater than 3 characters
{
$("#email_status").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_username.php",  //file name
    data: "email_address="+ email_address,  //data
    success: function(server_response){  
   
   $("#email_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#email_status").html('<img src="available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#email_status").html('<img src="not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#email_status").html('<font color="#cc0000">Email not valid</font>');
//if in case the username is less than or equal 3 characters only 
}



return false;
});

});

</script>

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
<form action="actlink.php" method="POST" id="tempjs">
 
 <div class="style_form">
Email:<input type="email" name="email_address" id="email_address" class="form_element"/><br>
<span id="email_status"></span>
</div>

<div class="style_form">
Username:<input type="text" name="username" id="username" class="form_element"/><br>
<span id="availability_status"></span> </div>

Password:<input type="password" name ="passwd"><br>

Title:<Select name="title">
<option selected>Select
<option>Mr.
<option>Mrs.
<option>Miss
<option>Ms.
<option>Dr.</select><br>

<div class="style_form">
First Name:<input type="text" name="fname" class="form_element"/ ><br>
</div>

<div class="style_form">
Last Name:<input type="text" name="sname" class="form_element"/><br>
</div>

Address:<input type="text" name="address"><br>

Address2:<input type="text" name="address2"><br>
<!--
Country:<select name="country"> 
<option value="" selected="selected">Select Country</option> 
<option value="United States">United States</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India">India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>
</select>

<br>

State/Province:<select name="state_province" size="1">
<option selected value="">Select State</option>
<option value="None">None</option>
<option value="">-- UNITED STATES --</option>
<option value="Alabama">Alabama</option>
<option value="Alaska">Alaska</option>
<option value="Arizona">Arizona</option>
<option value="Arkansas">Arkansas</option>
<option value="California">California</option>
<option value="Colorado">Colorado</option>
<option value="Connecticut">Connecticut</option>
<option value="Delaware">Delaware</option>
<option value="Florida">Florida</option>
<option value="Georgia">Georgia</option>
<option value="Hawaii">Hawaii</option>
<option value="Idaho">Idaho</option>
<option value="Illinois">Illinois</option>
<option value="Indiana">Indiana</option>
<option value="Iowa">Iowa</option>
<option value="Kansas">Kansas</option>
<option value="Kentucky">Kentucky</option>
<option value="Louisiana">Louisiana</option>
<option value="Maine">Maine</option>
<option value="Maryland">Maryland</option>
<option value="Massachusetts">Massachusetts</option>
<option value="Michigan">Michigan</option>
<option value="Minnesota">Minnesota</option>
<option value="Mississippi">Mississippi</option>
<option value="Missouri">Missouri</option>
<option value="Montana">Montana</option>
<option value="Nebraska">Nebraska</option>
<option value="Nevada">Nevada</option>
<option value="New Hampshire">New Hampshire</option>
<option value="New Jersey">New Jersey</option>
<option value="New Mexico">New Mexico</option>
<option value="New York">New York</option>
<option value="North Carolina">North Carolina</option>
<option value="North Dakota">North Dakota</option>
<option value="Ohio">Ohio</option>
<option value="Oklahoma">Oklahoma</option>
<option value="Oregon">Oregon</option>
<option value="Pennsylvania">Pennsylvania</option>
<option value="Rhode Island">Rhode Island</option>
<option value="South Carolina">South Carolina</option>
<option value="South Dakota">South Dakota</option>
<option value="Tennessee">Tennessee</option>
<option value="Texas">Texas</option>
<option value="Utah">Utah</option>
<option value="Vermont">Vermont</option>
<option value="Virginia">Virginia</option>
<option value="Washington">Washington</option>
<option value="West Virginia">West Virginia</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wyoming">Wyomings</option>
<option value="">-- CANADA --</option>
<option value="Alberta">Alberta</option>
<option value="British Columbia">British Columbia</option>
<option value="Manitoba">Manitoba</option>
<option value="New Brunswick">New Brunswick</option>
<option value="Newfoundland and Labrador">Newfoundland and Labrador</option>
<option value="Northwest Territories">Northwest Territories</option>
<option value="Nova Scotia">Nova Scotia</option>
<option value="Nunavut">Nunavut</option>
<option value="Ontario">Ontario</option>
<option value="Prince Edward Island">Prince Edward Island</option>
<option value="Quebec">Quebec</option>
<option value="Saskatchewan">Saskatchewan</option>
<option value="Yukon Territory">Yukon Territory</option>
<option value="">-- AUSTRALIA --</option>
<option value="Australian Capital Territory">Australian Capital Territory</option>
<option value="New South Wales">New South Wales</option>
<option value="Northern Territory">Northern Territory</option>
<option value="Queensland">Queensland</option>
<option value="South Australia">South Australia</option>
<option value="Tasmania">Tasmania</option>
<option value="Victoria">Victoria</option>
<option value="Western Australia">Western Australia</option>
<option value="">-- INDIA --</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Orissa">Orissa</option>
<option value="Pondicherry">Pondicherry</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Tripura">Tripura</option>
<option value="Uttaranchal">Uttaranchal</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="West Bengal">West Bengal</option>
<option value="Other">Other</option>
</select-->

<script type="text/javascript" src="countries.js"></script>
		
Country:<select onchange="print_state('state_province',this.selectedIndex);" id="country" name ="country"></select>

<br>
State:<select name ="state_province" id ="state_province"></select>
	<script language="javascript">print_country("country");</script>	
<br>

City:<input type="text" name ="city"><br>

Post Code:<input type="text" name ="post_code"><br>

Contact no:<input type="tel" name ="phone_number"><br>
	
Applying Positions:<br>
<input type="radio" name="fk_career_degree_id" value="1" checked>None of these<br>	
<input type="radio" name="fk_career_degree_id" value="2">Student (Higher education/Graduate)<br>
<input type="radio" name="fk_career_degree_id" value="3">Entry Level<br>
<input type="radio" name="fk_career_degree_id" value="4">Experienced (Non-Manager)<br>
<input type="radio" name="fk_career_degree_id" value="5">Manager (Manager/Supervisor of Staff)<br>
<input type="radio" name="fk_career_degree_id" value="6">Executive (Director, Department Head)<br>
<input type="radio" name="fk_career_degree_id" value="7">Senior Executive (Chairman, MD, CEO)<br>

Date Register for Positions:<input type="date" name="date_register"><br>

Email-ID (In case of password recovery):<input type="text" name ="actkey"><br>

 <div class="style_form">
<input name="submit" type="submit" value="Complete Registration" id="submit_btn" />
</div>
</form>
<form action="Login.html" method="POST">
<input type="submit" value="Continue to Sign-in">
</form>
</div>
</body>
</html>

