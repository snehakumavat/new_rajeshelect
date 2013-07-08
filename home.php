<?php
include("include/database.php");
$a=date('d-m-Y');
$b=date('d-m-Y', strtotime("-4 days"));



?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<div id="container">
	
     <?php
   include('header.php');
  ?>
    
    <div id="sub-header">
		<div class="quo">
    	<br />
		<div class="quotation"><center>Todays Reminders</center></div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="350">SR. No</td>
        <td>Description</td>
        <td width="150">Actual Date</td>
        </tr>
        </table>
        
        <table class="emp_tab">
     
        </table>
        
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
