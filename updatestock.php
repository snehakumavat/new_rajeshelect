<?php
include("include/database.php");
error_reporting(0);
include("session.php");

	if(isset($_REQUEST['c_id2']))
	{
	$id=$_REQUEST['c_id2'];
	$c_qry="select * from stock where st_id=".$id;
	$c_res=mysql_query($c_qry);
	$result=mysql_fetch_array($c_res);
	//print_r($result);
	}
	if(isset($_POST['c_up']))
	{
	$c_t1=$_POST['id'];
	$c_t2=$_POST['nm1'];
	$c_t3=$_POST['cate'];
	$c_t8=$_POST['qunt'];
   
	$c_t6=$_POST['sname'];	
 $c_t7=date('Y-m-d - h:i:s');	

	$c_qry="update `stock` set `avail_id`='".$c_t1."', `st_name`='".$c_t2."',`st_category`='".$c_t3."',`quantity`='".$c_t8."', `suplier_name`='".$c_t6."', `st_date`='".$c_t7."' where st_id=".$id;

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
		<div class="quotation"><center>Update Stock Details</center></div>
        <div > </div>
        <div>
        <form name="form1" action="" method="post">
        
        <table class="addpay_tab">
                <tr><td class="l_form">ID:</td><td><input id="id" class="q_in" type="text" name="id" value="<?php echo $result[1];?>" /></td></tr>
                <tr><td class="l_form">Name:</td><td><input id="nm1" class="q_in" type="text" name="nm1" value="<?php echo $result[2] ;?>" /></td></tr>
                <tr><td class="l_form">Category:</td><td><input type="text" id="cate" class="q_in" name="cate" value="<?php echo $result[3];?>" /></td></tr>
                 <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" value="<?php echo $result[4];?>" /></td></tr>		
                
                 <tr><td class="l_form">Suplier Name:</td><td><input id="sname" class="q_in" type="text" name="sname" value="<?php echo $result[5];?>" /></td></tr>				
                </table>
                
                
        <div class="addemp_button">
         <input name="c_up" class="formbutton" value=" Update " type="submit" />
         <input name="can" class="formbutton" value="Back" type="submit" />
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