<?php
error_reporting(0);
include("session.php");

include("include/database.php");

$per_page = 20; 

if($_GET)
{
$page=$_GET['page'];
}



//get table contents
$start = ($page-1)*$per_page;
$sql = "select * from quotation order by q_id desc limit $start,$per_page";
$rsd = mysql_query($sql);
?>
	<table class="emp_tab">
                <tr class="emp_header">
                <td width="80">Quo No</td>
                <td width="250">Client Name</td>
                <td width="160">Date</td>
                <td width="300">Address</td>
                <td width="200">Ref No.</td>
                <td width="70">Action</td>
                </tr>
                
        <?php
		
		while($row=mysql_fetch_array($rsd))
		{		
        	echo "<tr class='pagi'>";
                echo "<td width='80'>";
                echo $row[0];
                echo "</td>";
                echo "<td width='250'>";
                echo $row[4];
                echo "</td>";
                echo "<td width='160'>";
                echo $row[3];
                echo "</td>";
                echo "<td width='300'>";
                echo $row[5];
                echo "</td>";
				 echo "<td width='200'>";
                echo $row[2];
                echo "</td>";
				echo "<td width='70' class='print'>";
                echo "<a href='updatequo.php?id=$row[0]'>Update</a>&nbsp;<a href='qreport.php?id=$row[0]'>Print</a>";
                echo "</td>";
                echo "</tr>";
                
		}
		?>
        </table>
