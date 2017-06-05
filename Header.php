<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Simple jQuery Dropdowns</title>
	    <h1><span style="color: #008000;">ONLINE  SHOPPING</span></h1>

	
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen, projection"/>
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" />
    <![endif]-->
    		
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>	
	<script type="text/javascript" language="javascript" src="js/hoverIntent.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.dropdown.js"></script>
</head>

<body>
  <div id="header"><img src="img/Header1.JPG" alt="header" width="770" height="200" /></div>
<div class="container">

	<div id="page-wrap">
	
	<ul  class="dropdown">
      <li><a class="active" href="index.php">Home</a></li>

        	<li><a href="#">Category</a>
	
    
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
	  
	  
echo "<li>".'<a href="Products.php?CategoryId='.$Id.'"' .$CategoryName. '>'. $CategoryName."</a>". "</li>";

	  
	//  echo "<li>".'<a href="Products.php?CategoryId='.$Id.'>'. $CategoryName."</a>". "</li>";

	  
}
// Retrieve Number of records returned
$records = mysql_num_rows($result);
?>
      </ul>
        				
        					<li><a href="Products.php">Products</a></li>
      <li><a href="Offers.php">Offers</a></li>
 <li><a href="Register.php">Register</a></li>
      <li><a href="Contact.php">Contact</a></li>
        					      				</ul>
      <?php
// Close the connection
mysql_close($con);
?>
  
		
	</div>


</DIV>

</body>

</html>
