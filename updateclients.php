<?php
error_reporting(0);
include("session.php");

	include("include/database.php");
	$c_up=$_REQUEST['c_id2'];
	$c_qry_f="select * from clients where c_id=".$c_up;
	$c_res_f=mysql_query($c_qry_f);
	$c_row=mysql_fetch_array($c_res_f);
?>
<?php
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<?php
	
	if(isset($_REQUEST['c_up']))
	{	
		$c=$_REQUEST['c_id2'];
		$t1=$_POST['c_first'];
		$t2=$_POST['c_last'];
		$t3=$_POST['c_add'];
		$t10=$_POST['c_add2'];
		$t4=$_POST['c_city'];
		$t5=$_POST['c_pin'];
		$t6=$_POST['c_email'];
		$t7=$_POST['c_ph'];
		$t8=$_POST['c_mo'];
		$t9=$_POST['c_date'];	
		
		$qry_up="update clients SET c_date='".$t9."', client_name='".$t1."', comp_name='".$t2."', c_add1='".$t3."',c_add2='".$t10."', c_city='".$t4."', c_pin='".$t5."', c_ph='".$t7."', c_mo='".$t8."', c_email='".$t6."' where c_id=".$c;
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:clients.php");
		}
		else
		{
			echo "error";
		}
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
		<div class="quotation"><center>Update Client Details</center></div>
        <div>
        <form action="" method="post">
        <table class="q_clients">
                <tr><td class="l_form">Client Name:</td><td><input class="q_in" type="text" name="c_first" value="<?php echo $c_row[2]; ?>" /></td></tr>
                <tr><td class="l_form">Company Name:</td><td><input class="q_in" type="text" name="c_last" value="<?php echo $c_row[3]; ?>"/></td></tr>
                <tr><td class="l_form">Address1:</td><td><textarea class="q_add" name="c_add"><?php echo $c_row[4]; ?></textarea></td></tr>
                <tr><td class="l_form">Address2:</td><td><textarea class="q_add" name="c_add2" >v<?php echo $c_row[5]; ?> </textarea></td></tr>
                <tr><td class="l_form">City:</td><td><input class="q_in" type="text" name="c_city" value="<?php echo $c_row[6]; ?>"/></td></tr>
               
                </table>
                <table class="q_clients2">
                 <tr><td class="l_form">Pin Code:</td><td><input class="q_in" type="text" name="c_pin" value="<?php echo $c_row[7]; ?>" /></td></tr>
                <tr><td class="l_form">Email Id:</td><td><input class="q_in" type="text" name="c_email" value="<?php echo $c_row[10]; ?>"/></td></tr>
                <tr><td class="l_form">Phone No:</td><td><input class="q_in" type="text" name="c_ph" value="<?php echo $c_row[8]; ?>"/></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" name="c_mo" value="<?php echo $c_row[9]; ?>" /></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" type="date" name="c_date" value="<?php  echo $c_row[1]; ?>"/></td></tr>
                </table>
        <div class="addclients_b">
         <input name="c_up" class="formbutton" value=" Update " type="submit" />
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
