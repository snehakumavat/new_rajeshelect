<?php
error_reporting(0);
include("session.php");

	include("include/database.php");
	$e_qry_f="select * from service_tax";
	$e_res_f=mysql_query($e_qry_f);
?>
<html>
<head>
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}

</script>
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Service Tax Details</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="50">S.No.</td>
        <td>Service Tax Details</td>
        <td width="100">Action</td>        
        </tr>
        
        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='50'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td>";
		echo $e_row[2];
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='updateservice.php?e_id2=$e_row[0]'>Update</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
      
        </table>
        
        </div>
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
