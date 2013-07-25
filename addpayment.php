<?php
error_reporting(0);
include("session.php");
	include("include/database.php");
	$p=$_REQUEST['p_id'];
	$p_qry="select * from invoice where i_id='$p'";
	$p_res=mysql_query($p_qry);
	$p_row=mysql_fetch_array($p_res);
	

	$pid_qry="select SUM(total) from sub_invoice where i_id='$p'";
	$pid_res=mysql_query($pid_qry);
	$row_pid=mysql_fetch_array($pid_res);
	
	$r_i=$_REQUEST['p_id'];
	$r_c=$_REQUEST['c_id'];
	
	$qry_re="select * from partial_payment where i_id='$r_i' and c_id='$r_c'";
	$res_re=mysql_query($qry_re);
	$row_re=mysql_fetch_array($res_re);
	 
	
	$qry_res="select SUM(p_amt) from partial_payment where i_id='$r_i' and c_id='$r_c'";
	$res_res=mysql_query($qry_res);
	$row_res=mysql_fetch_array($res_res);
	
	$bal=$row_re[7]-$row_res[0];
	
		
	
	if(isset($_REQUEST['e_add']))
	{
		$c=$_REQUEST['c_id'];
		$p_t1=$_POST['t1'];
		$p_t2=$_POST['t2'];
		$p_t3=$_POST['t3'];
		$p_t4=$_POST['t4'];
		$p_t5=$_POST['t5'];
		$p_t6=$_POST['t6'];
		$p_t7=$_POST['t7'];
		$p_t8=$_POST['bnk'];
		$p_t9=$_POST['remark'];
		
		 $pa_qry="insert into partial_payment(i_id,c_id,c_name,p_mode,c_no,p_date,i_amt,p_amt,bank_nm,remark) values('".$p_t1."','".$c."','".$p_t2."','".$p_t3."','".$p_t4."','".$p_t5."','".$p_t7."','".$p_t6."','".$p_t8."','".$p_t9."')"; 
//		exit();
		$pa_res=mysql_query($pa_qry);
		if($pa_res)
		{
			header("location:payment.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['e_can']))
	{
		header("location:payment.php");
	}
	
	$d=date('d-m-Y');
?>
<html>
<head>
<title>Rajesh Electric Wires</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.p_amt.value == "0" ) 
	{ 
	    alert ( "Amount Is zero" ); 
	    isValid = false;
    }
    return isValid;
}
</script>

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br /><div class="quo">
		<div class="quotation"><center>Payments Details</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="addpay_tab">
        <tr>
        <td class="l_form">Invoice No:</td>
        <td><input id="des" type="text" class="q_in" name="t1" value="<?php echo $p_row[0]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Clients Name:</td>
        <td><input id="ename" type="text" class="q_in" name="t2" value="<?php echo $p_row[5]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Payment Mode:</td>
        <td>
        <select class="a" name="t3">
        <option>By Check</option>
        <option>By Cash</option>
        </select>
        </td>
        </tr>
        <tr>
        <td class="l_form">Check No:</td>
        <td><input id="contact" type="text" class="q_in" name="t4"></td>
        </tr>
        <tr>
        <td class="l_form">Date:</td>
        <td><input id="des" type="date" class="q_in" name="t5" value="<?php echo $d; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Invoice Amt:</td>
        <td><input id="i_amt" type="text" class="q_in" name="t7" value="<?php echo $row_pid[0]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Remaining Amt:</td>
        <td><input id="i_amt" type="text" class="q_in" value="<?php echo $bal; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Pay Amount:</td>
        <td><input id="p_amt" type="text" class="q_in" name="t6" value="0"></td>
        </tr>
        <tr>
        <td class="l_form">Bank Name:</td>
      <td><input id="bnk" type="text" class="q_in" name="bnk" value=""></td>
        </tr>
         <tr>
        <td class="l_form">Remark:</td>
      <td><input id="remark" type="text" class="q_in" name="remark" value=""></td>
        </tr>
        
        </div>
        </table>
        <?php 
		if($row_res[0]>=$row_pid[0])
		{
		?>
        <div class="addemp_button">
        <font color="#FF3300" face="Verdana, Geneva, sans-serif" size="+3">Final Payment Is done</font><br><br>
       <input name="e_can" class="formbutton" value="Cancel" type="submit" />
        </div>
        <?php
		}
		else
		{
		?>
        <div class="addemp_button">
         <input name="e_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
       <input name="e_can" class="formbutton" value="Cancel" type="submit" />
        </div>
   <?php
		}
   ?>     
        </form>
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
