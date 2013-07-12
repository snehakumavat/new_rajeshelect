<?php
include("include/database.php");

$in=$_REQUEST['id'];

$c_query="select * from invoice where i_id='$in'";
$c_res=mysql_query($c_query);
$c_row=mysql_fetch_array($c_res);

if(isset($_GET['del']))
{
 $del=$_GET['del'];
echo $query="delete from sub_invoice where s_id='$del'";
mysql_query($query);

}


$c_query1="select * from sub_invoice where i_id='$in'";
$c_res1=mysql_query($c_query1);

?>

<?php


if(isset($_REQUEST['submit']))
{	
		$c=$in;
		$q_date=date('Y-m-d',strtotime($_POST['q_date']));
		$q_name=$_POST['q_name'];
		$q_address=$_POST['q_address'];
		$po=$_POST['po_no'];				
		$rgp=$_POST['rgp'];
		$dc=$_POST['dc'];
		$v1=$_POST['vendr'];
		$t1=$_POST['tin_no'];
		$d1=date('Y-m-d',strtotime($_POST['date1']));
		$d2=date('Y-m-d',strtotime($_POST['date2']));

		$add="update`invoice` set `q_date`=".$q_date."',`c_id`='".$c."',`c_comp`='".$c_row[3]."',`q_name`='".$q_name."',`q_address`='".$q_address."',`po_no`='".$po."',`rgp_no`='".$rgp."',`dc_no`='".$dc."',`code_no`='".$v1."',`tin_no`='".$t1."',`date1`='".$d1."',`date2`='".$d2."'";
		$query=mysql_query($add);
	
		$a=$_POST['d'];
		if(($a!=NULL ))
	{
		 $b = count($a);	 	
	$delete="delete from sub_invoice where i_id='$in'";
	mysql_query($delete);
	
		$b = count($a);
		for($i=1; $i<=$b; $i++)
		{
			$id=$in;
			$c=$c_row[3];
			$d=$c_row[1];	
			$q_d=$_POST['d'][$i];
			$q_q=$_POST['q'][$i];
			$q_r=$_POST['r'][$i];
			$total=$q_q * $q_r ;
				
		$quo="insert into sub_invoice(i_id,des,quantity,rate,total) values('".$id."','".$q_d."','".$q_q."','".$q_r."','".$total."')";
		$quo_res=mysql_query($quo);
		
		
		
		if($quo_res)
		{
			header("location:invoicedetails.php");
		}
		else
		{
			echo"error";
		}
	}//close for loop
  } // close if loop
		
}
if(isset($_REQUEST['cancel']))
{
	header("location:invoicedetails.php");
}

echo $c_query1="select * from sub_invoice where i_id='$in'";
$c_res1=mysql_query($c_query1);
$count=mysql_num_rows($c_res1);
?>
<html>
<head>
<title>Rajesh Electric Wires</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script>
 var counter = <?php echo $count+1; ?>;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_q' type='text' name='q["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_r' type='text' name='r["+counter+"]' id='person_phone"+counter+"' /></td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td></tr></table>";
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
                
                <div class="quotationI"><center>REW TAX INVOICE</center></div>
                <br />
                <table class="q_info3" height="300px">
                <tr><td class="l_form">Date:</td><td><input name="q_date" class="q_in" type="text" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
                <tr><td class="l_form">Client Name:</td>
                <td>
                <input type="text" class="q_in" name="q_name" value="<?php echo $c_row[4]; ?>">
				</td>
                </tr>
                <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="q_address"><?php echo $c_row[5]; ?></textarea></td></tr>
                <tr><td class="l_form">PO No:</td>
                <td>
                <input type="text" class="q_in" name="po_no" value="<?php echo $c_row[7]; ?>" >
				</td>
                </tr>
                <tr><td class="l_form">Your RGP No:</td>
                <td>
                <input type="text" class="q_in" name="rgp" value="<?php echo $c_row[8]; ?>">
				</td></tr>
                </table>
                <table class="q_info5">
                <tr><td class="l_form">Invoice No</td>
                <td><input name="invoice" class="q_in" type="text" value="<?php echo $c_row[0]; ?>" readonly/></td></tr>
                <tr><td class="l_form">Our DC No:</td>
                <td>
                <input type="text" class="q_in" name="dc" value="<?php echo $c_row[9]; ?>" >
				</td></tr>
                 <tr><td class="l_form">Vendor Code No:</td>
                <td>
                <input type="text" class="q_in" name="vendr" value="<?php echo $c_row[10]; ?>" >
				</td></tr>
                 <tr><td class="l_form">Consignee Vat / Tin No:</td>
                <td>
                <input type="text" class="q_in" name="tin_no" value="<?php echo $c_row[11]; ?>" >
				</td></tr>
                 <tr><td class="l_form">Date:</td>
                <td>
                <input type="text" class="q_in" name="date1" value="<?php echo date('d-m-Y', strtotime($c_row[12])); ?>" >
				</td></tr>
                <tr><td class="l_form">Date:</td>
                <td>
                <input type="text" class="q_in" name="date2"value="<?php echo date('d-m-Y', strtotime($c_row[13])); ?>" >
				</td></tr>
                </table>
                <br />
                <table class="des">
                <tr>
                <td class="heading">DESCRIPTION</td>
                <td class="heading" >QTY</td>
                <td class="heading">RATE/EACH</td>
                <td></td>
                </tr>
                
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                               <?php
               $count1=1;
				if($count!=NULL)
				{
					
				while($rows=mysql_fetch_array($c_res1))
				{
					if($count>0)
					{
						
				?>
              
                <tr>
                <td>
                 <input class="des_in" type="text" name="d[<?php echo $count1; ?>]" id="0" value="<?php echo $rows[2]?>"><br>
                </td>                
                <td>
                 <input class="des_q" type="text" name="q[<?php echo $count1; ?>]" id="0" value="<?php echo $rows[3]?>"><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[<?php echo $count1; ?>]" id="0" value="<?php echo $rows[4]?>"><br>
                </td>
               <td><a href="updateinvoice.php?id=<?php echo $in;?>&del=<?php echo $rows[0];?>">[-]</a></td>              
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
                 <input class="des_in" type="text" name="d[]" id="0" value="">
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="0" value="" >
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" value="" id="0"><br>
                </td>
                
                </tr>                 
                  
                <?php }
				?>               
                </table>
                
                 <div id="phone">
                
                </div>
                <div class="q_button5">
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
