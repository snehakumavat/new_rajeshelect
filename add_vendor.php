<?php

	include("include/database.php");
	
	if(isset($_REQUEST['v_add']))
	{
		$e_t1=$_POST['v_name'];		
		$e_t2=$_POST['vcontact'];
		$e_t3=$_POST['vcode'];
		$e_t4=$_POST['vaddr'];
		$e_t5=$_POST['vmail'];
		
		$e_qry="insert into vendor(v_name,v_contact,v_code,v_addr,v_mail) values('".$e_t1."','".$e_t2."','".$e_t3."','".$e_t4."','".$e_t5."')";
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
<link rel="stylesheet" href="styles.css" type="text/css" />

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
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Add New Vendor</center></div>
       
        <form name="form1" action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Vendor Name:</td>
        <td><input id="vname" type="text" class="q_in" name="v_name"></td>
        </tr>
        <tr>
        <td class="l_form">Address:</td>
        <td><textarea id="add" class="q_add" name="vaddr"></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact No:</td>
        <td><input id="vcontact" type="text" class="q_in" name="vcontact"></td>
        </tr>
        <tr>
        <td class="l_form">Vendor Code:</td>
        <td><input id="vcode" type="text" class="q_in" name="vcode"></td>
        </tr>
        <tr>
        <td class="l_form">Vendor E-mail:</td>
        <td><input id="vmail" type="text" class="q_in" name="vmail"></td>
        </tr>        
        </table>
        <div class="addemp_button">
         <input name="v_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
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
