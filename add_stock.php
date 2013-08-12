<?php
include("include/database.php");
include("session.php");
	if(isset($_REQUEST['c_add']))
	{
	
	$c_t1=$_POST['id'];
	$c_t2=$_POST['nm1'];
	$c_t3=$_POST['cate'];
	$c_t8=$_POST['qunt'];
   // $c_t12=$_POST['brate'];	
	//$c_t4=$_POST['srate'];
	$c_t6=$_POST['sname'];	
 $c_t7=date('Y-m-d - h:i:s');	

	$c_qry="INSERT INTO `stock`(`avail_id`, `st_name`, `st_category`,`quantity`,  `suplier_name`, `st_date`) VALUES ('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t8."','".$c_t6."','".$c_t7."')";

	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:view_stock.php");
	}
	else
	{
		header("location:add_stock.php");
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" language="javascript">

</script>

</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Add New Stock Details</center></div>
        <div > </div>
        <div>
        <form name="form1" action="" method="post">
        
        <table class="addpay_tab">
                <tr><td class="l_form">ID:</td><td><input id="id" class="q_in" type="text" name="id" /></td></tr>
                <tr><td class="l_form">Name:</td><td><input id="nm1" class="q_in" type="text" name="nm1" /></td></tr>
                <tr><td class="l_form">Category:</td><td><input type="text" id="cate" class="q_in" name="cate" /></td></tr>
                <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" /></td></tr>		
                 
                 <tr><td class="l_form">Suplier Name:</td><td><input id="sname" class="q_in" type="text" name="sname" /></td></tr>				
                </table>
                
                
        <div class="addemp_button">
         <input name="c_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
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
