<?php

include("include/database.php");

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from invoice order by i_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>

				<table class="emp_tab">
                <tr class="emp_header">
                <td>SR.No</td>
                <td>InvoiceNo</td>
                <td >Gatepass_No</td>
                <td>Date</td>
                <td>DC.No</td>
                <td>SUB-TOTAL</td>
                <td>SER.TAX</td>
                <td>VAT</td>
                <td>Total</td>
                <td width="70">Action</td>
                </tr>
                
        <?php
		$count=0;
		while($row=mysql_fetch_array($rsd))
		{		
        	echo "<tr class='emp_header'>";
				echo "<td >";
                echo $count+=1;
                echo "</td>";				
                echo "<td >";
                echo $row[0];
                echo "</td>";
                echo "<td >";
                echo $row[2];
                echo "</td>";
                echo "<td>";
                echo $row[1];
                echo "</td>";
                echo "<td >";
                echo $row[9];
                echo "</td>";
				echo "<td >";
				$qury="select SUM(total) from sub_invoice where i_id='$row[0]'";$res=mysql_query($qury);
				$sub_total=mysql_result($res,0);
                echo $sub_total;		/*Sub total*/
                echo "</td>";
				echo "<td >";
				$ser_tax=($sub_total*.33)*.12;
                echo round($ser_tax,2);		/*Service Tax*/
                echo "</td>";
				echo "<td >";
				$vat=($sub_total*.67)*.5;
                echo round($vat,2);		/*VAT*/
                echo "</td>";
				echo "<td >";
				$total=$vat+$ser_tax+$sub_total;
                echo round($total,2);		/*total*/
                echo "</td>";
				echo "<td class='print'>";
                echo "<a href='updateinvoice.php?id=$row[0]'>Update</a>&nbsp;<a href='report.php?id=$row[0]'>Print</a>";
                echo "</td>";
                echo "</tr>";
                
		}
		?>
        
        
        </table>
