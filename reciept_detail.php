<?php
	include("include/database.php");
	error_reporting(0);
	$a=$_REQUEST['id'];
	$c_qry_f="select * from reminder where i_id='$a'";
	$c_res_f=mysql_query($c_qry_f);

	if(isset($_REQUEST['can']))
	{
		header("location:amcreport.php");
	}
?>

<html>
<head>

<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
	<div class="quo">
    	<br />
		<div class="quotation"><center>Clients AMC Details</center></div>
        <div>
        
		<form action="" method="post">
        <table>
        <tr class="emp_header5">
        <td width="812">Description</td>
        <td width="120">Date</td>
        <td width="25">*</td>
        <td width="90">Reciept</td>
        <td width="70">View</td>
        <td width="70">Print</td>
        </tr>
        
      	
		<?php
		
		while($row=mysql_fetch_array($c_res_f))
		{
			echo "<tr class='emp_header3' align='center'>";
			echo "<td>";
			echo $row[3];
			echo "</td>";
			echo "<td>";
			$date=$row[4];
			echo date('d-m-Y', strtotime("$date"));
			echo "</td>";
			echo "<td>";
			echo $row[5];
			echo "</td>";
			echo "<td class='print'>";
			echo "<a href='addreciept.php?id=$row[0]&&id2=$a'>Reciept</a>";
			echo "</td>";
			echo "<td class='print'>";
			echo "<a href='amc_update.php?id=$row[0]&&id2=$a'>View</a>";
			echo "</td>";
			echo "<td class='print'>";
			echo "<a href='recieptpdf.php?id=$row[0]&&id2=$a'>Print</a>";
			echo "</td>";
			echo "</tr>";
			
		}
		?> 
        </table>
        <br>
        </form>
        </div>
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
