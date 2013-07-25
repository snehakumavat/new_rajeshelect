<?php
include("include/database.php");
error_reporting(0);
include("session.php");	
?>


<?php
$per_page = 20; 

if($_GET)
{
  $page=$_GET['page'];
}
	
	$start = ($page-1)*$per_page;
 $e_qry_f="select * from emp order by e_id desc limit $start,$per_page";
	
	$e_res_f=mysql_query($e_qry_f);
		
?>
<table class="emp_tab" style="table-layout:fixed;">
        <tr class="emp_header">
        <td width="200">Emp. Name</td>
        <td width="120">Contact No.</td>
        <td width="160" style="word-wrap:break-word">Address</td>
        <td width="60">Action</td>
        </tr>

        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $e_row[3];
		echo "</td>";
		echo "<td style='overflow:hidden;'>";
		echo $e_row[2];
		echo "</td>";
        echo "<td width='70' class='print'>";
		echo "<a href='?e_id1=$e_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateemp.php?e_id2=$e_row[0]'>Update</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>