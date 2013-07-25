<?php
include("include/database.php");
error_reporting(0);
include("session.php");	
	if(isset($_REQUEST['c_id1']))
	{
		$del=$_GET['c_id1'];
		$c_del="delete from clients where c_id='$del'";
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
	}
?>


<?php
$per_page = 20; 

if($_GET)
{
 $page=$_GET['page'];
 $id=$_GET['id'];
}
	
	$start = ($page-1)*$per_page;
	 $c_qry_f="select * from gatepass where client_id='$id' order by pass_id desc limit $start,$per_page"; 	
	$c_res_f=mysql_query($c_qry_f);
		
?>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="250">Gate pass No.</td>
        <td width="160">Gate pass date.</td>
        <td>Status</td>
		<td>Approver Name</td>	        
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
			$id=$_GET['id'];
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
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[8]&c_id3=$id' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updategatepass.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='view_gate.php?c_id3=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        
        </table>
