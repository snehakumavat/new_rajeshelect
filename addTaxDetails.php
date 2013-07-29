<?php
error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:taxdetails.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	

		$t_no=$_POST['t_no'];
		$t_term=$_POST['term'];
		
		$qry_up="insert into service_tax(s_id1,details) values('".$t_no."','".$t_term."')";
	
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:taxdetails.php");
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
		<div class="quotation"><center>Add Service Tax Details</center></div>
        <div>
        <?php
			$qry="select * from service_tax order by s_id desc";
			$res=mysql_query($qry);
			$row=mysql_fetch_array($res);
			$t=$row[0]+1;
			
		?>
        <form action="" method="post">
<center>        <table class="addemp_term" height="140px;" style="margin-top:50px;">
        <tr>
        <td class="l_form">Term No:</td>
        <td><input type="text" class="q_in" name="t_no" value=""></td>
        </tr>
        <tr>
        <td valign="middle" class="l_form">Tax Details:</td>
        <td><textarea class="q_term" name="term"></textarea></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_t">
         <input name="e_up" class="formbutton" value=" Submit " type="submit" />
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
