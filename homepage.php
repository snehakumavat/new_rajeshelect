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
	 $c_qry_f="select * from gatepass order by pass_id desc limit $start,$per_page"; 	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Gate pass No.</td>
        <td width="160">Gate pass date.</td>
        <td>Status</td>
		<td>Approver Name</td>	        
        
        </tr>
		<?php
        if(mysql_num_rows($c_res_f)==0)
		{
		?>
        <tr class='emp_header'>
         <td colspan='6' align="center"><h3> No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
			
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[8];
		echo "</td>";
        echo "<td width='160'>";
		echo date('d-m-Y',strtotime($c_row[9]));
		echo "</td>";
		echo "<td>";
		echo $c_row[13];
		echo "</td>";
		echo "<td>";
		echo $c_row[26];		
        
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
