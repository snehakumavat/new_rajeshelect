<?php
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
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Client Name</td>
        <td width="160">Company Name.</td>
        <td>Address</td>
		<td>PhoneNo.</td>	        
        <td width="180">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $c_row[2];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		echo "<td>";
		echo $c_row[8];		
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateclients.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='clientsview.php?c_id3=$c_row[0]'>View</a>&nbsp;<a href='gatepass.php?c_id3=$c_row[0]'>GatePass</a>&nbsp;<a href='view_gatepass.php?c_id3=$c_row[0]'>g_v</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
