<?php
include("include/database.php");
	
?>


<?php
$per_page = 20; 

if($_GET)
{
 $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from stock order by st_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Name</td>
        <td width="160">date</td>
        <td>Supplier</td>
		<td>Selling Prize</td>
        <td>Quantity</td>	        
        <td width="180">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='160'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='240'>";
		echo $c_row[8];
		echo "</td>";
		echo "<td>";
		echo $c_row[7];
		echo "</td>";
		echo "<td>";
		echo $c_row[6];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updatestock.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='stockview.php?c_id3=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>