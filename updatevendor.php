<?php
error_reporting(0);
include("session.php");

	include("include/database.php");
	if(isset($_REQUEST['v_id']))
	{
		$id=$_REQUEST['v_id'];
	$query="select * from vendor where v_id='$id'";
	$exe=mysql_query($query);
	$vr=mysql_fetch_array($exe);
	}
	
	if(isset($_REQUEST['v_add']))
	{
		$e_t1=$_POST['v_name'];		
		$e_t2=$_POST['vcontact'];
		$e_t3=$_POST['vcode'];
		$e_t4=$_POST['vaddr'];
		$e_t5=$_POST['vmail'];
		
 $e_qry="update vendor set v_name='".$e_t1."',v_contact='".$e_t2."',v_code='".$e_t3."',v_addr='".$e_t4."',v_mail='".$e_t5."' where v_id='$id'";

		$e_res=mysql_query($e_qry);		
		if($e_res)
		{
			header("location:view_vendor.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['v_can']))
	{
		header("location:view_vendor.php");
	}
	
	
?>
<html>
<head>
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.vname.value == "" ) 
	{ 
	    alert ( "Please enter Vendor Name" ); 
	    isValid = false;
    }
	     else if ( document.form1.v_contact.value == "" ) { 
            alert ( "Please enter Contact Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.vcode.value == "" ) { 
            alert ( "Please enter Vendor Code" ); 
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
	?><br />
		<div class="quotation"><center>Add New Vendor</center></div>
        
        <form name="form1" action="" method="post">
        <table class="addpay_tab">
        <tr>
        <td class="l_form">Vendor Name:</td>
        <td><input id="vname" type="text" class="q_in" name="v_name" value="<?php echo $vr[1]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Address:</td>
        <td><textarea id="vaddr" class="q_add" name="vaddr"><?php echo $vr[4]; ?></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact No:</td>
        <td><input id="contact" type="text" class="q_in" name="vcontact" value="<?php echo $vr[2]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Vendor Code:</td>
        <td><input id="vcode" type="text" class="q_in" name="vcode" value="<?php echo $vr[3]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Vendor E-mail:</td>
        <td><input id="vmail" type="text" class="q_in" name="vmail" value="<?php echo $vr[5]; ?>"></td>
        </tr>  
      
        </table>
        <div class="addemp_button">
         <input name="v_add" class="formbutton" value=" Update " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="v_can" class="formbutton" value="Cancel" type="submit" />
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
