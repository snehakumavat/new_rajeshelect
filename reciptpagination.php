<?php
	include("include/database.php");
	error_reporting(0);

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
        <td width="70">In. No</td>
        <td width="100">Start Date.</td>
        <td width="250">Client Name</td>
        <td>Client Address</td>
        <td width="150">Contact</td>
        <td width="100">Reciept</td>
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td>";
		echo $c_row[0];
		echo "</td>";
		echo "<td>";
		echo $c_row[1];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[6];
		echo "</td>";
        echo "<td class='print'>";
		echo "<a href='reciept_detail.php?id=$c_row[0]'>Details</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
      
        </table>
