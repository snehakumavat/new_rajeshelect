<?php
error_reporting(0);	
	include("include/database.php");
	$e_qry_f="select * from emp";
	$e_res_f=mysql_query($e_qry_f);
		
?>
<?php
	if(isset($_REQUEST['e_id1']))
	{
		$e_d=$_REQUEST['e_id1'];
		$e_del="delete from emp where e_id=".$e_d;
		$e_dres=mysql_query($e_del);
		if($e_dres)
		{
			header("location:employee.php");
		}
		else
		{
			echo "error";
		}
	}
?>
<html>
<head><title>Rajesh Electric Works</title>
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
		<div class="quotation"><center>Employee Details</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Emp. Name</td>
        <td width="160">Contact No.</td>
        <td>Address</td>
        <td width="70">Action</td>
        </tr>

        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $e_row[3];
		echo "</td>";
		echo "<td>";
		echo $e_row[2];
		echo "</td>";
        echo "<td width='70' class='print'>";
		echo "<a href='?e_id1=$e_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateemp.php?e_id2=$e_row[0]'>Update</a>";
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
