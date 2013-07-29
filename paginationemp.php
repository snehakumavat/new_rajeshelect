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
        <td width="140">Emp. Code</td>
        <td width="100">Name</td>
        <td width="100">Contact </td>
        <td width="120" style="word-wrap:break-word">Designation</td>
        <td width="80">Action</td>
        </tr>

        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='140'>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='100'>";
		echo $e_row[2];
		echo "</td>";
		echo "<td width='100'>";
		echo $e_row[4];
		echo "</td>";
		echo "<td style='overflow:hidden;'>";
		echo $e_row[6];
		echo "</td>";
        echo "<td width='80' class='print'>";
		echo "<a href='?e_id1=$e_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateemp.php?e_id2=$e_row[0]'>Update</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>