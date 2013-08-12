<?php
include("session.php");
include("include/database.php");
error_reporting(0);
	
?>


<?php
$per_page = 20; 

if($_GET)
{
  $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
 $v_qry_f="select * from vendor order by v_id desc limit $start,$per_page";
	
	$v_res_f=mysql_query($v_qry_f);
		
?>
<table class="emp_tab" style="table-layout:fixed;">
        <tr class="emp_header">
        <td width="200">Vendor Name</td>
        <td width="120">Contact No.</td>
        <td width="160" style="word-wrap:break-word">Vendor_code</td>
        <td width="60">Action</td>
        </tr>

        <?php
		while($v_row=mysql_fetch_array($v_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $v_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $v_row[2];
		echo "</td>";
		echo "<td style='overflow:hidden;'>";
		echo $v_row[3];
		echo "</td>";
        echo "<td width='70' class='print'>";
		echo "<a href='?v_id1=$v_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px' width='20px' /></a>&nbsp;<a href='updatevendor.php?v_id=$v_row[0]'><img src='imgs1/updt.png' height='20px' width='20px' /></a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>