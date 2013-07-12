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
 $c_qry_f="select * from job_worksheet order by job_id desc limit $start,$per_page";
	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Client Name</td>
        <td width="160">Make</td>
        <td>Phase</td>
		<td>RPM</td>	        
        <td width="180">Action</td>
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
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $c_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		echo $c_row[3];
		echo "</td>";
		echo "<td>";
		echo $c_row[4];		
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateworksheet.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='viewwork.php?c_id3=$c_row[0]'>View</a>&nbsp;<a href='assignstock.php?job_id=$c_row[0]'>assign stock</a>&nbsp;<a href='view_assgn.php'>view_assign</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
