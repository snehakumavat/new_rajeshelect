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
 $e_qry_f="select * from certificate order by crt_id desc limit $start,$per_page";
	
	$e_res_f=mysql_query($e_qry_f);
		
?>
<table class="emp_tab" style="table-layout:fixed;">
        <tr class="emp_header">
        <td width="200">M/s</td>
        <td width="120">Contact Person.</td>
        <td width="160" style="word-wrap:break-word">Address</td>
        <td width="160">Work Done</td>
        <td width="250">Action</td>
        </tr>

        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $e_row[9];
		echo "</td>";
		echo "<td style='overflow:hidden;'>";
		echo $e_row[2];
		echo "</td>";
		 echo "<td width='160'>";
		echo $e_row[48];
		echo "</td>";
        echo "<td width='70' class='print'>";
		echo "<a href='?cr_id1=$e_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updatemotor.php?cr_id2=$e_row[0]'>View/Update</a>&nbsp; <a href='motor_pdf.php?cr_id=$e_row[0]'>Print</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>