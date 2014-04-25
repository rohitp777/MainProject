<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Job Search for Job Seekers</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div id="content">
	<div class="register-form">
	
<?php

require('connect.php');
include('lockjs.php');
    
//$button = $_GET ['submit'];
//$search = $_GET ['search'];

$button = isset($_GET['submit']) ? $_GET['submit'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$x = NULL; 
$construct = NULL;
  
if(strlen($search)<=1)
echo "Search term too short";
else{
echo "You searched for <b>$search</b> <hr size='1'></br>";
//mysql_connect("mysql_host_name","mysql_username","mysql_password");
//mysql_select_db("database_name");
    
$search_exploded = explode (" ", $search);
    
foreach($search_exploded as $search_each)
{
$x++;
if($x==1)	
$construct .="keywords LIKE '%$search_each%'";
else
$construct .="AND keywords LIKE '%$search_each%'";
    
}
  
$constructs ="SELECT * FROM jobberland_search WHERE $construct";
$run = mysql_query($constructs);
    
$foundnum = mysql_num_rows($run);
    
if ($foundnum==0)
echo "Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
Try more general words. for example: If you want to search 'how to create a website'
then use general keyword like 'create' 'website'</br>2. Try different words with similar
 meaning</br>3. Please check your spelling";
else
{ 
  
echo "$foundnum results found !<p>";
  
$per_page = 5;
if(isset($_GET['start']))

$start = $_GET['start'];
$max_pages = ceil($foundnum / $per_page);
if(!isset ($start))
$start=0; 
$getquery = mysql_query("SELECT * FROM jobberland_search WHERE $construct LIMIT $start, $per_page");
 
while($runrows = mysql_fetch_assoc($getquery))
{
$result = $runrows ['results'];
$title = $runrows ['created_on'];
$desc = $runrows ['description'];
//$link = $runrows ['link'];
   
echo "<a href='http://localhost/MainProject/run/jobapply.php?jobid=$result'><b>$result</b></a>";
echo "."; echo "<a href='http://localhost/MainProject/run/jobapply.php?jobid=$result'><b>$title</b></a><br>
$desc";
echo"<form action='http://localhost/MainProject/run/jobapply.php?jobid=$result' method='post'>";
echo "<button type = 'submit' name='submit' value='Apply for this Job'>"."Apply for this Job"."</button>";
echo"</form>";	
	echo"<br>";

//echo "<a href='http://localhost/MainProject/run/jobapply.php'><b>$link</b></a><br>";
    
}
  
//Pagination Starts
echo "<center>";
  
$prev = $start - $per_page;
$next = $start + $per_page;
                       
$adjacents = 3;
$last = $max_pages - 1;
  
if($max_pages > 1)
{   
//previous button
if (!($start<=0)) 
echo " <a href='search.php?search=$search&submit=Search+source+code&start=$prev'>Prev</a> ";    
          
//pages 
if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
{
$i = 0;   
for ($counter = 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='search.php?search=$search&submit=Search+source+code&start=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search.php?search=$search&submit=Search+source+code&start=$i'>$counter</a> ";
}  
$i = $i + $per_page;                 
}
}
elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
{
//close to beginning; only hide later pages
if(($start/$per_page) < 1 + ($adjacents * 2))        
{
$i = 0;
for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
{
if ($i == $start){
echo " <a href='search.php?search=$search&submit=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search.php?search=$search&submit=$i'>$counter</a> ";
} 
$i = $i + $per_page;                                       
}
                          
}
//in middle; hide some front and some back
elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
{
echo " <a href='search.php?search=$search&submit=0'>1</a> ";
echo " <a href='search.php?search=$search&submit=$per_page'>2</a> .... ";
 
$i = $start;                 
for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
{
if ($i == $start){
echo " <a href='search.php?search=$search&submit=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search.php?search=$search&submit=$i'>$counter</a> ";
}   
$i = $i + $per_page;                
}
                                  
}
//close to end; only hide early pages
else
{
echo " <a href='search.php?search=$search&submit=0'>1</a> ";
echo " <a href='search.php?search=$search&submit=$per_page'>2</a> .... ";
 
$i = $start;                
for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
{
if ($i == $start){
echo " <a href='search.php?search=$search&submit=$i'><b>$counter</b></a> ";
}
else {
echo " <a href='search.php?search=$search&submit=$i'>$counter</a> ";   
} 
$i = $i + $per_page;              
}
}
}
          
//next button
if (!($start >=$foundnum-$per_page))
echo " <a href='search.php?search=$search&submit=Search+source+code&start=$next'>Next</a> ";    
}   
echo "</center>";
} 
} 
?>

<b><p align="right"><a href="logoutjs.php">Sign Out</a></p></b>
<!--/fieldset-->
</div>
</div>
</body>
</html>