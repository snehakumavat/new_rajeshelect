<?php
	include("include/database.php");
	$e_qry_f="select * from terms";
	$e_res_f=mysql_query($e_qry_f);
?>
<html>
<head>
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

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
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Terms and Conditions</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="50">T.No.</td>
        <td>Terms & Conditions</td>
        <td width="100">Action</td>        
        </tr>
        
        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='50'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td>";
		echo $e_row[2];
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='updateterm.php?e_id2=$e_row[0]'>Update</a>";
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
