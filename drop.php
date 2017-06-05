<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Simple jQuery Dropdowns</title>
	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
    		
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>
</head>

<body>

	<div id="page-wrap">
	
	<ul  class="dropdown">
        	<li><a href="#">For Facilities</a>
	
    
        		<ul  class="sub_menu">
        			 
	  <?php
// Establish Connection with Database
 include "cone.php";// Select Database
// Select Database
mysql_select_db("shopping", $con);
// Specify the query to execute
$sql = "select * from Category_Master";
// Execute query
$result = mysql_query($sql,$con);
// Loop through each records 
while($row = mysql_fetch_array($result))
{
$Id=$row['CategoryId'];
$CategoryName=$row['CategoryName'];
$Description=$row['Description'];
$Image=$row['Image'];
?>
                 
        
        			
 
      <?php
	  
	  
echo "<li>".'<a href="#"' .$CategoryName. '>'. $CategoryName."</a>". "</li>";

	  
	  
	  
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      <li>
        				<a href="#">Batting Cages</a></li></ul>
        				
        					<li><a href="#">mmmmmmmmmmmm</a></li>
        					      				</ul>
      <?php
// Close the connection
mysql_close($con);
?>
  
		
	</div>




</body>

</html>
