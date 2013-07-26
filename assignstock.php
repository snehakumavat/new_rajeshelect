<?php
include("include/database.php");

if(isset($_REQUEST['job_id']))
{
 $job_id=$_REQUEST['job_id'];
	}

if(isset($_REQUEST['e_add']))
	{
		$e_nm=$_POST['e_id'];
		$e_st=$_POST['stock_id'];
		$e_val=$_POST['stock_val'];		
		$e_date=date('Y-m-d', strtotime($_POST['date']));
		
		
$e_qry="insert into assign_job(job_id,stock_id,emp_id,assg_val,date) values('".$job_id."','".$e_st."','".$e_nm."','".$e_val."','".$e_date."')";
		$e_res=mysql_query($e_qry);
		if($e_res)
		{
			header("location:view_worksheet.php");
		}
		else
		{
			echo "error";
		}
	}
	if(isset($_REQUEST['e_can']))
	{
		header("location:view_worksheet.php");
	}
	
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<div id="container">
 <div id="sub-header">	
     <?php
   include('header.php');
  ?>
    
   
		<div class="quo">
    	<br />
		<div class="quotation"><center>Assign Stock</center></div>
        <form name="form1" action="" method="post">
        <table class="addemp_tab" align="center">
        <tr >
        <td class="l_form">Select employee:- </td>
        <td>
        <select name="e_id">
        	<?php
			$qry="select * from emp";
			$res=mysql_query($qry);
			
			echo "<option>select</option>";
			while($emp=mysql_fetch_array($res))
			{
			echo "<option value='$emp[0]'>";
			echo $emp[1];
			echo "</option>";	
			}
			 ?>
		</select>
</td>
</tr>
		<tr >
        <td class="l_form">Select stock:- </td>
        <td>
        <select name="stock_id">
        	<?php
			$qry="select * from stock";
			$res=mysql_query($qry);
			
			echo "<option>select</option>";
			while($emp=mysql_fetch_array($res))
			{
			echo "<option value='$emp[0]'>";
			echo $emp[2];
			echo "</option>";	
			}
			 ?>
		</select>
</td>
</tr>
        <tr>
        <td class="l_form">Assign stock</td>
        <td><input type="text" name="stock_val" /></td>
        </tr>
        <tr>
        <td class="l_form">Assign Date</td>
        <td><input type="date" name="date" value="<?php echo date('d-m-Y'); ?>" /></td>
        </tr>
        </table>        
        <div class="addemp_button">
         <input name="e_add" class="formbutton" value=" Add " type="submit" onClick="javascript:return validateMyForm();" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />        
</form>
</div>
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
