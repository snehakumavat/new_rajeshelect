<?php
include("include/database.php");
error_reporting(0);	

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];

}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from gatepass order by pass_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
	
	
?>

        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Client Name</td>
        <td width='80'>Gatepass No</td>
        <td width="60">Contact No.</td>
        <td>Address</td>
        <td width="100">Action</td>
        </tr>

        <?php
		while($c_row1=mysql_fetch_array($c_res_f))
		{
		 $getpas="select * from clients where c_id='$c_row1[1]'";
		$exect=mysql_query($getpas);		
		$c_row=mysql_fetch_array($exect);		
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $c_row[2];
		echo "</td>";		
		echo "<td >";
		echo $c_row1['g_no'];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[9];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td width='100' class='print'>";
		echo "<a href='invoicebasic.php?c_id1=$c_row[0]'>Create</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
