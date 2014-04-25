<?php
	
	require('connect.php');
	//include('lockjp.php');
	//$login_session=$row['id'];
	//session_start();
    // If the values are posted, insert them into the database.
   
 //if($_SERVER["REQUEST_METHOD"] == "POST")
//if(isset ($_POST['fk_employer_id']) && isset($_POST['company_name']))
//if(isset ($_POST['submit']))	
	if(isset ($_POST['cv_id']) && isset ($_POST['category_id']))
	{
			
		$categoryid=$_POST['cv_id'];
		$id=$_POST['category_id'];
	
		
			
			$sql = "INSERT INTO jobberland_cv_look_occupation(cv_id,category_id) VALUES ('$_POST[cv_id]', '$_POST[category_id]')";
		
				
	 if(mysql_query($sql))
	   {
        echo "Application Submitted";
		
       }
	
	   else
	   {
	  die("Error:".mysql_error());
	   }
    }

	    mysql_close($connection); 
		
      
?>