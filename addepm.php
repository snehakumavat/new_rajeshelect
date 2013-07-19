<?php

	include("include/database.php");
	
	if(isset($_REQUEST['e_add']))
	{
		$e_t1=$_POST['e_name'];
		$e_t2=$_POST['e_address'];
		$e_t3=$_POST['e_contact'];
		$e_t4=$_POST['e_desig'];
		
		$e_qry="insert into emp(e_name,e_add,e_contact,e_desig) values('".$e_t1."','".$e_t2."','".$e_t3."','".$e_t4."')";
		$e_res=mysql_query($e_qry);
		if($e_res)
		{
			header("location:employee.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['e_can']))
	{
		header("location:employee.php");
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
    if ( document.form1.ename.value == "" ) 
	{ 
	    alert ( "Please enter Employee Name" ); 
	    isValid = false;
    }
	    else if ( document.form1.add.value == "") { 
            alert ( "please enter Address" ); 
            isValid = false;
		}
		 else if ( document.form1.contact.value == "" ) { 
            alert ( "Please enter Contact Number" ); 
            isValid = false;
    } 
	
		 else if ( document.form1.des.value == "" ) { 
            alert ( "Please enter Designation" ); 
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
		<div class="quotation"><center>Add New Employee</center></div>
        <div>
        <form name="form1" action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Emp Name:</td>
        <td><input id="ename" type="text" class="q_in" name="e_name"></td>
        </tr>
        <tr>
        <td class="l_form">Address:</td>
        <td><textarea id="add" class="q_add" name="e_address"></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Contact Details:</td>
        <td><input id="contact" type="text" class="q_in" name="e_contact"></td>
        </tr>
        <tr>
        <td class="l_form">Designation:</td>
        <td><input id="des" type="text" class="q_in" name="e_desig"></td>
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
