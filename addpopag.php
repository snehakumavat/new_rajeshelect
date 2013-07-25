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
	$c_qry_f="select * from clients order by c_id desc limit $start,$per_page";
	$c_res_f=mysql_query($c_qry_f);
	
?>


        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Client Name</td>
        <td width="200">Company Name.</td>
        <td width="160">Contact No.</td>
      <td  width="10">Email_id </td>
        <td width="160">Address</td>
        <td width="100">Action</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{                                                                                                                        
			
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[2]; 
		echo "</td>";
		echo "<td width='160'>";
		echo $c_row[3];
		echo "</td>";
		echo "<td width='160'>";
		echo $c_row[9];
		echo "</td>";
     echo "<td width='160'>";
		echo $c_row[10];
		echo "</td>"; 
		echo "<td>";
		echo $c_row[4];
		echo "</td>";
		
        echo "<td width='100'class='print'>";
		echo "<a href='po.php?c_id2=$c_row[0]'>Create</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
