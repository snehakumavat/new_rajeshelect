<?php
error_reporting(0);
	include("include/database.php");
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:term.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	

		$t_no=$_POST['t_no'];
		$t_term=$_POST['term'];
		
		$qry_up="insert into terms(t_id1,t_term) values('".$t_no."','".$t_term."')";
	
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
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>

<body>
<div id="container">
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Add Terms & Conditions</center></div>
        <div>
        <?php
			$qry="select * from terms order by t_id desc";
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
        <td valign="middle" class="l_form">Terms & Conditions:</td>
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
