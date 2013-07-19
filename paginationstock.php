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
 $e_qry_f="select * from assign_job order by assg_id desc limit $start,$per_page";
	
	$e_res_f=mysql_query($e_qry_f);
		
?>
<table class="emp_tab" style="table-layout:fixed;">
        <tr class="emp_header">
        <td width="200">Emp.Name</td>
         <td width="160">Stock Name</td>  
        <td width="120">Stock assign</td>             
        <td width="160">Date</td>        
        </tr>

        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		$nm="select e_name from emp where e_id='$e_row[3]'";
		$res=mysql_query($nm);
		$s=mysql_result($res,0);
		echo $s;
		echo "</td>";
        echo "<td width='160'>";
		$nm1="select st_name from stock where st_id='$e_row[2]'";
		$res1=mysql_query($nm1);
		$s1=mysql_result($res1,0);
		echo $s1;
		echo "</td>";
		echo "<td>";
		echo $e_row[4];
		echo "</td>";
       echo "<td>";
		echo date('d-m-Y',strtotime($e_row[5]));
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>