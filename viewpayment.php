<?php
	
	//error_reporting(0);
	include("include/database.php");
	$c_up=$_REQUEST['v_id'];
	$c_qry_f="select * from partial_payment where i_id='$c_up'";
	$c_res_f=mysql_query($c_qry_f);
	
	$qry_i="select * from invoice where i_id='$c_up'";
	$res_i=mysql_query($qry_i);
	$row_i=mysql_fetch_array($res_i);
	
	
	
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:payment.php");
	}
?>
<html>
<head>
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center><?php echo mysql_result($res_i,0,4);?> Payment Details</center></div>
        <div>
        
        <table class="emp_tab">
        
        <tr class="pagi">
        <td width="250">Payment Mode</td>
        <td>Bank Name</td>
        <td width="250">Cheque No.</td>
        <td width="200">Pay Date</td>
        <td>Amount</td>
        <td>Remark</td>
        </tr>

        <?php
		while($c_row=mysql_fetch_array($c_res_f))
		{
        echo "<tr class='pagi'>";
        echo "<td>";
		echo $c_row[4];
		echo "</td>";
		 echo "<td>";
		echo $c_row[9];
		echo "</td>";
		echo "<td>";
		echo $c_row[5];
		echo "</td>";
		echo "<td>";
		echo $c_row[6];
		echo "</td>";
		echo "<td>";
		echo $c_row[8];
		echo "</td>";
		echo "<td>";
		echo $c_row[10];
		echo "</td>";
        echo "</tr>";
		}
		?>
        </table>
        <br><br><br>
        <?php
			$up=$_REQUEST['v_id'];
			$c_qry="select * from partial_payment where i_id=".$up;
			$c_res=mysql_query($c_qry);
			$c_row=mysql_fetch_array($c_res);
	
			$to_qry="select SUM(p_amt) from partial_payment where i_id=".$up;
			$to_res=mysql_query($to_qry);
			$to_row=mysql_fetch_array($to_res);
			
			$a=$c_row[7];
			$b=$to_row[0];
			$c=$a-$b;
		?>
        
        <div class="quotation"><center>Balance Details</center></div>
        <table class="emp_tab">
        <tr class="pagi">
        <td>Invoice No:</td><td><?php echo $c_row[1]; ?></td>
        <td>Invoice Total:</td><td><?php echo $c_row[7]; ?></td>
        </tr>
        <tr class="pagi">
        <td>Client Name:</td><td><?php echo $c_row[3]; ?></td>
        
        <td>Paid By Client:</td><td><?php echo $to_row[0]; ?></td>
        </tr>
        <tr class="pagi">
        <td>Address</td><td><?php echo $row_i[6]; ?></td>
        <td>Balance:</td><td><?php echo $c; ?></td>
        </tr>
        </table>
        
        </div>
        <div class="quotation"><center></center></div>
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
