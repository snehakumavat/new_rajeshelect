<?php
include("include/database.php");
error_reporting(0);
include("session.php");

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];

}
	
	$start = ($page-1)*$per_page;
	$c_qry_f="select * from invoice order by i_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
		
?>

        <table class="emp_tab">
        <tr class="emp_header">
        <td width="80">Invoice No.</td>
        <td width="100">Date</td>
        <td width="150">Contact Person Name</td>
        <td width="150">Company Name</td>
        <td width="100">Gatepass No.</td>
        <td width="100">Amount</td>
        <td width="100">Contact No</td>
        
        <td width="130">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[0];
		echo "</td>";
		echo "<td >";
		echo $c_row[1];
		echo "</td>";
        echo "<td >";
		echo $c_row[5];
		echo "</td>";
		echo "<td >";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		$pid_qry="select SUM(total) from sub_invoice where i_id='$c_row[0]'";
		$pid_res=mysql_query($pid_qry);
		$row_pid=mysql_result($pid_res,0);
		echo $row_pid;
		echo "</td>";
		echo "<td>";
		echo $c_row[7];
		echo "</td>";
		
	    echo "<td width='100' class='print'>";
		echo "<a href='addpayment.php?p_id=$c_row[0]&c_id=$c_row[3]'>Paid</a>&nbsp;<a href='viewpayment.php?v_id=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
