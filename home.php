<?php
error_reporting(0);
include("include/connection.php");
$a=date('d-m-Y');
$b=date('d-m-Y', strtotime("-4 days"));

$qry="select * from reminder where r1='$b' or r2='$b' or r3='$b' or r4='$b' or r5='$b' or r6='$b' or r7='$b' or r8='$b' or r9='$b' or r10='$b' or r11='$b' or r12='$b'";

$res=mysql_query($qry);

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
        <td width="350">Client Name</td>
        <td>Description</td>
        <td width="150">Actual Date</td>
        </tr>
        </table>
        
        <table class="emp_tab">
        <?php
			while($row=mysql_fetch_array($res))
			{
				echo"<tr>";
				echo "<td>";
				echo $row[1];
				echo "</td>";
				echo "<td>";
				echo $row[2];
				echo "</td>";
				echo "<td>";
				echo $row[0];
				echo "</td>";
				echo"</tr>";
			}
		?>
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
