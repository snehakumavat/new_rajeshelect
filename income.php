<?php
	
	//error_reporting(0);
	include("include/database.php");

	if(isset($_REQUEST['e_add']))
	{
		
		$p_t1=$_POST['t1'];
		$date=date('Y-m-d', strtotime($p_t1));
		$p_t2=$_POST['t2'];
		$p_t3=$_POST['t3'];
		$p_t4=$_POST['t4'];
		$p_t5=$_POST['t5'];
		$rmk=$_POST['rmark'];
		echo $pa_qry="INSERT INTO `income`( `p_date`, `p_name`, `p_mode`, `p_ch`, `p_amt`, `p_rmark`)values('".$date."','".$p_t2."','".$p_t3."','".$p_t4."','".$p_t5."','".$rmk."')";
		
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
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.ename.value == "" ) 
	{ 
	    alert ( "Field Is Not Blank" ); 
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
	?>
<br />
		<div class="quotation"><center>Income Details</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Date:</td>
        <td><input id="des" type="text" class="q_in" name="t1" value="<?php echo $d; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Income Details:</td>
        <td><input id="ename" type="text" class="q_in" name="t2"></td>
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
        <td class="l_form">Amount:</td>
        <td><input id="i_amt" type="text" class="q_in" name="t5"></td>
        </tr>
        <tr>
        <td class="l_form">Remark:</td>
        <td><textarea id="i_rmrk" class="q_add" name="rmark"></textarea></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_button">
         <input name="e_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
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
