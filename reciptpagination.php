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
        <td width="70">Invoice No</td>
        <td width="100">Start Date.</td>
        <td width="100"> Gatepass No</td>
        <td width="200">Contact Person Name</td>       
        <td width="150">Contact</td>
        <!--<td width="100">Reciept</td>-->
        <td width="130">Action</td>
        </tr>
        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[0];
		echo "</td>";
		echo "<td>";
		echo $c_row[1];
		echo "</td>";
		echo "<td>";
		echo $c_row[2];
		echo "</td>";
		echo "<td>";
		echo $c_row[5];
		echo "</td>";
		
		echo "<td>";
		echo $c_row[7];
		echo "</td>";
        /*echo "<td class='print'>";
		echo "<a href='reciept_detail.php?id=$c_row[0]'>Details</a>&nbsp;";
		echo "<a href='addreciept.php?id=$row[0]&&id2=$a'>Reciept</a>";
		echo "</td>";*/
		echo "<td class='print'>";
		echo "<a href='addreciept.php?id=$c_row[0]'>Create</a>&nbsp;";
		echo "<a href='recieptpdf.php?id=$c_row[0]'>Print</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
      
        </table>
