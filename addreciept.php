<?php
	error_reporting(0);
	include("include/database.php");
	$up=$_REQUEST['id'];
	$id2=$_REQUEST['id2'];
	$up_qry="select * from reminder where r_id=".$up;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:reciept_detail.php?id=$id2");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up=$_REQUEST['id'];
		$i_id=$_POST['i_id'];
		$r_name=$_POST['r_name'];
		$r_des=$_POST['r_des'];
		$t1=$_POST['r_date'];
		$date=date('Y-m-d', strtotime($t1));
		$qry_re="insert into reciept(i_id,d_id,r_name,r_des,r_date) values('".$i_id."','".$up."','".$r_name."','".$r_des."','".$date."')";
		$res_re=mysql_query($qry_re);
		
		$u='*';
		
		$qry_up="update reminder SET r_r='".$u."' where r_id=".$up;
		$res_up=mysql_query($qry_up);
		
		if($res_re)
		{
			header("location:reciept_detail.php?id=$id2");
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
		<div class="quotation"><center>Reciept Details</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_re">
        <tr>
        <td class="l_form">Invoice Ref. No:</td>
        <td><input type="text" class="q_in" name="i_id" readonly="" value="<?php echo $row_up[1]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Client Name:</td>
        <td><input type="text" class="q_in" name="r_name" value="<?php echo $row_up[2]; ?>"></td>
        </tr>
        <tr>
        <td class="l_form">Description:</td>
        <td><textarea name="r_des"><?php echo $row_up[3]; ?></textarea></td>
        </tr>
        <tr>
        <td class="l_form">Reciept Date:</td>
        <td><input type="text" class="q_in" name="r_date" value="<?php echo date('d-m-Y'); ?>"></td>
        </tr>
        
        
        
        </div>
        </table>
        <div class="addemp_r">
         <input name="e_up" class="formbutton" value=" Add " type="submit" />
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
