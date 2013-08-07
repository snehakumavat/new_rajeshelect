<?php
include("session.php"); 
include("include/database.php");

$per_page = 25; 
if($_GET)
{
$page=$_GET['page'];
}
$start = ($page-1)*$per_page;
echo $que="select * from sms order by id desc limit $start,$per_page";
$res=mysql_query($que);

?>

		<table class="emp_tab">        
		<tr class='menu_header'>
        <td>SR No</td>
        <td>Name</td>
        <td>Reciever</td>
        <td>Responce</td>
        <td>date</td>
        </tr>
		
		<?php
		        		  
		if($row=mysql_fetch_array($res))
		{
			echo "<tr class='pagi'>";
			echo "<td width='80'>";
			echo $row[0];
			echo "</td>";
			echo "<td>";
			echo $row[1] ;
			echo "</td>";
			echo "<td width='250'>";
			echo $row[3];
			echo "</td>";
			echo "<td width='160'>";
			echo $row[4];
			echo "</td>";
					
	  }
  
		?>        
        </table>