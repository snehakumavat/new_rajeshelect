<?php
error_reporting(0);
include("session.php");
include("include/database.php");

$in=$_REQUEST['id'];
$c_query="select * from quotation where q_id='$in'";
$c_res=mysql_fetch_array(mysql_query($c_query));

if(isset($_GET['del']))
{
echo $del=$_GET['del'];
$query="delete from sub_quotation where s_id='$del'";
mysql_query($query);

}
?>

<?php
if(isset($_REQUEST['submit']))
{			
		$q_date=$_POST['q_date'];
		$q_name=$_POST['q_name'];
		$q_address=$_POST['q_address'];		
		$q_mail1=$_POST['q_mail_id'];
		$q_mo=$_POST['q_mo'];
		$q_ref=$_POST['q_ref'];
		$q_sub=$_POST['q_sub'];
		$q_fax=$_POST['q_fax'];
		$q_vender=$_POST['q_vendor'];
		$tr=$_POST['t_charge'];
	$tax=$_POST['tax'];
		
	 $quo="UPDATE `quotation` SET `q_ref_no`='".$q_ref."', `q_date`='".$q_date."' ,`q_name`='".$q_name."', `q_address`='".$q_address."',`q_mo`='".$q_mo."',`q_mail`='".$q_mail1."',`q_vendor_no`='".$q_vender."',`q_sub`='".$q_sub."',`q_fax`='".$q_fax."',`q_trans`='".$tr."',`q_tax`='".$tax."',`a_failure`='".$_POST['af']."' WHERE q_id=$in";				
	
		$quo_res=mysql_query($quo);
		
		if($_POST['dis']!=NULL)
		{
		$desc=$_POST['dis'];
		$rate=$_POST['rate'];
		$quantity=$_POST['capacity'];
		$total= $rate * $quantity;
		$les="update sub_quotation set  q_id='".$in."',less='1',des='".$desc."',quantity='".$quantity."',rate='".$rate."',amount='".$total."' where q_id=$in and less='1'";	 	
		$run=mysql_query($les);
		}
	
	 $a=$_POST['d'];
		
	if(($a!=NULL ))
	{
		 $b = count($a);	 	
	$delete="delete from sub_quotation where q_id='$in' and less='0'";
	mysql_query($delete);
	
	for($i=1; $i<=$b; $i++)
	{
		$id=$in;	
		$q_d=$_POST['d'][$i];
		$q_c=$_POST['c'][$i];
		$q_q=$_POST['q'][$i];
		
		$total= $q_c * $q_q;
		
	$quo="insert into sub_quotation(q_id,des,quantity,rate,amount) values('".$id."','".$q_d."','".$q_q."','".$q_c."','".$total."')";
	
	$quo_res1=mysql_query($quo);
	if($quo_res1)
	{
		header("location:quotation.php");
	}
	else
	{
		echo"error";
	}
  }//close for loop for d	
}// close if loop for d
}
if(isset($_REQUEST['cancel']))
{
	header("location:quotation.php");
}

$query="select * from sub_quotation where q_id='$c_res[0]' and less='0'";
				$result=mysql_query($query);
			    $count=mysql_num_rows($result);
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
<script>
 var counter = <?php echo $count+1; ?>;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_cap' type='text' name='c["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }
 </script>
  
</head>

<body>
<div id="container">
	
    
    <div id="sub-header">
    			
                <div class="quo">
                
                
                <form name="form5" action="" method="post" enctype="multipart/form-data">
                <br />
                
                 <table style="width:1100px; background-color:#DFE;" >
                    <tr><td  style="font-size:18px;" align="center">REW QUOTATION</td></tr>
                    </table>
                
                <table class="q_info3" height="400px;">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="date" value="<?php  echo $c_res[3]; ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_res[4]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_res[5]; ?></textarea></td></tr>
                 <tr><td class="l_form">Ref No:</td><td><input name="q_ref" class="q_in" type="text" value="<?php echo $c_res[2]; ?>"/></td></tr>
               <tr><td class="l_form">Vendor No:</td>
               <td>
               <input type="text" name="q_vendor" class="q_add_i" value="<?php echo $c_res[9]; ?>">
				</td>
                 <tr><td class="l_form">Client TeleFax No:</td>
               <td>
                <input type="text" class="q_in" name="q_fax" value="<?php echo $c_res[11]; ?>">
				</td>
                
                
                </table>
                
                
                
                
                
                <table class="q_info4" >
                <tr><td class="l_form">Quotation No</td>
                <td><input name="q_no" class="q_in" type="text" value="<?php echo $c_res[0]; ?>" readonly /></td></tr>
                <tr>
            	<td class="l_form">Select Service Tax:</td>
                <td> <select class="q_add_i" name="tax" style="width:250px;">
                <option value="">Select</option>
                <option value="1"<?php if($c_res[13]=='1') echo 'selected';?>>value of labour is 70%</option>
                <option value="2"<?php if($c_res[13]=='2') echo 'selected';?>>value of labour is 33%</option>
                
                </select></td>
                </tr>
               <!-- <tr><td class="l_form">Select Gatepass No:</td>
                <td> <select class="q_add_i" name="q_attn">
                <option value="0">Select</option>
				//<?php
//				
//				$query="select *from gatepass";
//				$c_emp_res=mysql_query($query);
//				while($c_row_emp=mysql_fetch_array($c_emp_res))
//				{
//					 if($c_row_emp[8]==$c_res[6])
//					echo "<option selected>";
//					 else
//					echo "<option>"; 
//					echo $c_row_emp[8];
//					echo "</option>";
//				}
//				?>
                </select></td>
                </tr>-->
                <tr><td class="l_form">Mo No:</td><td><input name="q_mo" class="q_in" type="text" value="<?php echo $c_res[7]; ?>"/></td></tr>
                <tr>
                <td class="l_form">Email_Id:</td>
                <td>
                <input name="q_mail_id" class="q_in" type="text" value="<?php echo $c_res[8]; ?>" />
                </td>
                </tr>
                <tr><td class="l_form">Quotation Subject: </td>
                <td><input name="q_sub" class="q_in2" type="text" value="<?php echo $c_res[10]; ?>" /></td></tr>
                <tr><td class="l_form">Enter Transportation Charges</td>
                <td><input name="t_charge" class="q_in" type="text" value="<?php echo $c_res[12]; ?>"  /></td></tr>
                 <tr>
                <td class="l_form" > Analysis of Failure :</td>
                      <td>   <textarea  class="q_add"  name="af"><?php echo $c_res[15];?></textarea></td>
                      </tr>  
                </table>
                <br />
                <table class="des">
                <tr>
               <td class="heading">Description</td>              
                <td class="heading">Rate/Each</td>                 
                <td class="heading" >Quantity/Nos</td>               
                </tr>
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>                             <?php
               $count1=1;
				if($count!=NULL)
				{
					
				while($res=mysql_fetch_array($result))
				{
					if($count>0)
					{
						
				?>
                  <tr>
                <td>
                 <input class="des_in" type="text" name="d[<?php echo $count1; ?>]" id="d[<?php echo $count1; ?>]" value="<?php echo $res[3];?>"><br>
                </td> 
                <td>
                 <input class="des_cap" type="text" name="c[<?php echo $count1; ?>]" id="c[<?php echo $count1; ?>]" value="<?php echo $res[5];?>" onBlur="total();"><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[<?php echo $count1; ?>]" value="<?php echo $res[4];?>" id="q[<?php echo $count1; ?>]"><br>
                </td>
                <td><a href="updatequo.php?id=<?php echo $in;?>&del=<?php echo $res[0];?>">[-]</a></td>
                       
                                </tr>  
                                 <?php
					$count1=$count1+1;
					}
					
					$count=$count-1;
					}
				}
				else
				{
				?> 
                <tr>
                <td>                
                 <input class="des_in" type="text" name="d[]" id="0" value=""><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="0" value="" ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" value="" id="0"><br>
                </td>
                </tr>                 
                  
                <?php }
				
				$query="select * from sub_quotation where q_id='$c_res[0]' and less='1'";
				$less=mysql_query($query);
				$l1=mysql_fetch_array($less);
				?>                    
                </table>
                 <div id="phone">
                
                </div>
                
                <br>
                <br>
               <table style="width:1100px; background-color:#DFE;" >
                    <tr><td  style="font-size:18px;" align="center">Enter Amount to be less from original</td></tr>
                    </table>        
                
                
                <table class="des" align="center">
                <tr>
               <td class="heading">Description</td>              
                <td class="heading">Rate/Each</td>                 
                <td class="heading" >Quantity/Nos</td>               
                </tr>
                <tr>
                <td>                
                 <input class="des_in" type="text" name="dis" id="dis" value="<?php echo $l1[3];?>"><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="rate" id="rate" value="<?php echo $l1[5];?>" ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="capacity"id="capacity"  value="<?php echo $l1[4];?>" ><br>
                </td>
                </tr>
                     
                </table>
                  <br><br>
                <div class="q_button5" align="center">
              
                <input name="submit" class="formbutton" value=" Submit " type="submit" onClick="javascript:return validateMyForm();" />
                <input name="cancel" class="formbutton" value="Cancel" type="submit" />
                </div>
                
                </form>
  				</div>
                
                </div>
                
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
