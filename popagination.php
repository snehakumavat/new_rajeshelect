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
	$c_qry_f="select * from po order by po_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Contact Person Details</td>
		<td>PhoneNo.</td>	
        <td>Vendor Code</td>        
        <td width="340">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[1];
		echo "</td>";
        
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
					
        echo "<td width='100' class='print'>";
		echo "<a href='?po_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' width='16' height='16' /></a>&nbsp;<a href='updatepo.php?po_id=$c_row[0]'><img src='imgs1/view.png' />/<img src='imgs1/updt.png' width='16' height='16' /></a>&nbsp;";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
