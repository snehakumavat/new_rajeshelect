<?php
error_reporting(0);
include("session.php");

	include("include/database.php");
	
	$up_e = 0;
	$up_e=$_REQUEST['e_id2'];
	$up_qry="select * from terms where t_id=".$up_e;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:term.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up=$_REQUEST['e_id2'];
		$t_no=$_POST['t_no'];
		$t_term=$_POST['term'];
		
		$qry_up="update terms SET t_id1='".$t_no."', t_term='".$t_term."' where t_id=".$up;
	
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:term.php");
		}
		else
		{
			echo "error";
		}
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
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Update Terms & Conditions</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_term">
        <tr>
        <td class="l_form">Term No:</td>
        <td><input type="text" class="q_in" name="t_no" value="<?php echo $row_up[1]; ?>"></td>
        </tr>
        <tr>
        <td valign="top" class="l_form">Terms & Conditions:</td>
        <td><textarea class="q_term" name="term"><?php echo $row_up[2]; ?></textarea></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_t">
         <input name="e_up" class="formbutton" value=" Update " type="submit" />
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
