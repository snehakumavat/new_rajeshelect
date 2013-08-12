<?php
error_reporting(0);
include("session.php");
include("include/database.php");
	$up_e = 0;
	$up_e=$_REQUEST['e_id3'];
	$up_qry="select * from emp where e_id=".$up_e;
	$up_res=mysql_query($up_qry);
	$row_up=mysql_fetch_array($up_res);
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:employee.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	
		$up_e=$_REQUEST['e_id3'];
		$e_t0=$row_up[1];
		$e_t1=$row_up[2];
		$e_t2=$row_up[3];
		$e_t3=$row_up[4];
		$e_t4=$row_up[5];
		$e_t5=$row_up[6];
		$e_t6=$row_up[7];
		$e_t7=$row_up[8];
		$e_t8=$row_up[9];
		//$e_t9=$row_up[10];
		$e_t10=$_POST['e_nod'];
		$e_t11=$_POST['e_nop'];
		$e_t12=$_POST['txt_earning'];
		$e_t13=$_POST['txt_deduction'];
		$e_t14=$_POST['txt_netpay'];
		$days=$_POST['days'];
		$month=date('m');
		$year=date('Y');
		
	echo	$e_qry="insert into emp_sal (es_code,es_name,es_add,es_contact,es_doj,es_desig,es_accno,es_bankname,es_panno,es_no_of_days,es_days_present,es_days_paid,year,month,earning,deduction,net_pay)
		 values('".$e_t0."','".$e_t1."','".$e_t2."','".$e_t3."','".$e_t4."','".$e_t5."','".$e_t7."','".$e_t6."','".$e_t8."','".$days."','".$e_t10."','".$e_t11."','".$year."','".$month."','".$e_t12."','".$e_t13."','".$e_t14."')";
		$e_res=mysql_query($e_qry);
		if($e_res)
		{
			header("location:employee.php");
		}
		else
		{
			echo "error";
		}
		
		 $sal_code=mysql_insert_id();
	
		$a=$_POST['d1'];
		$b = count($a);
		for($i=0; $i<$b; $i++)
		{
			//$id=$_REQUEST['i_id'];			
			$q_d=$_POST['d1'][$i];
			$alp=$_POST['d2'][$i];
			$rmk=$_POST['amt1'][$i];
			$q_u=$_POST['amt2'][$i];
			$query="insert into sub_salary(sal_code,e_desc,e_amt,d_desc,d_amt) VALUES ('".$sal_code."','".$q_d."','".$rmk."','".$alp."','".$q_u."')";
			$e_res1=mysql_query($query);
			
		}
		if($e_res1)
		{
			header("location:empreceiptpdf.php?id=$sal_code");
			
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
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles2.css" type="text/css" />

<style type="text/css">
.maintbl
{
	width:750px;
	height:180px;
	margin-top:10px;
	border-collapse:collapse;
	margin-left:230px;
	background-color:#DFE;
}
.form
{
	font-size:12px;
	color:#000;
	margin-left:100px;
	margin-top:1px;
}
.earning{
	width:880px;
	margin-left:120px;	
	background-color:#7aa127;
}

</style>
<link rel="stylesheet" href="styles.css" type="text/css" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script>

var tot_amt1 =0;
var tot_amt2 =0;
function getValues() {
var obj = document.getElementsByTagName("input");
      for(var i=0; i<obj.length; i++){
         if(obj[i].name == "amt1[]")
		 {
			 var amt1 = obj[i].value;
			 if(amt1>0)
		     {
			 tot_amt1+=(amt1*1);  
			 }
		}
         if(obj[i].name == "amt2[]")
		 {
			 var amt2 = obj[i].value;
			 if(amt2>0)
		     {
			 tot_amt2+=(amt2*1);  
			 }
		 }
            	
	 }
        document.getElementById("txt_earning").value = tot_amt1*1;
		document.getElementById("txt_deduction").value = tot_amt2*1;
		document.getElementById("txt_netpay").value = (tot_amt1*1)-(tot_amt2*1);
 tot_amt1=0;
 tot_amt2=0;      
}

</script>
<script>
function addRow(tableID) {
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;
            var row = table.insertRow(rowCount);
            var colCount = table.rows[0].cells.length;
            for(var i=0; i<colCount; i++) {
                var newcell = row.insertCell(i);
                newcell.innerHTML = table.rows[0].cells[i].innerHTML;
                //alert(newcell.childNodes);
                switch(newcell.childNodes[0].type) {
                    case "text":
                            newcell.childNodes[0].value = "";
                            break;
                    case "checkbox":
                            newcell.childNodes[0].checked = false;
                            break;
                    
                }
            }
        }
		
function deleteRow(tableID)
{
            try
                 {
                var table = document.getElementById(tableID);
                var rowCount = table.rows.length;
                    for(var i=0; i<rowCount; i++)
                        {
                        var row = table.rows[i];
                        var chkbox = row.cells[0].childNodes[0];
                        if (null != chkbox && true == chkbox.checked)
                            {
                            if (rowCount <= 1)
                                {
                                alert("Cannot delete all the rows.");
                                break;
                                }
                            table.deleteRow(i);
                            rowCount--;
                            i--;
                            }
                        }
                    } catch(e)
                        {
                        alert(e);
                        }
   getValues();
}
  
  
  
 </script>
</head>

<body>
<div id="container">
<div id="sub-header">	
    <?php
	include("header.php");
	?><br />
		<div class="quotation"><center>Employee Salary Slip</center></div>
        <div>
        <form action="" method="post">
        <table class="maintbl" border="1">
          <tr><td colspan="4" align="center"><b>PAYSLIP FOR THE MONTH OF <?php echo date('F Y'); ?></b></td></tr>
      
         <tr>
        <td class="form"><b>Employee ID:</b></td>
		<td><?php echo $row_up[1]; ?></td>
        <td class="form"><b>Emp Name:</b></td>
        <td><?php echo $row_up[2]; ?></td>
        </tr>
       
        <tr>
        <td  class="form"><b>Address:</b></td>
        <td><?php echo $row_up[3]; ?></td>
         <td class="form"><b>Contact Details:</b></td>
        <td><?php echo $row_up[4]; ?></td>
        </tr>
       
        <tr>
        <td class="form"><b>Designation:</b></td>
        <td><?php echo $row_up[6]; ?></td>
        <td class="form"><b>Date of Joining:</b></td>
        <td><?php echo date('d-m-Y',strtotime($row_up[5])); ?></td>
        
        </tr>
        
        <tr>
        <td class="form"><b>Bank Name:</b></td>
        <td><?php echo $row_up[8]; ?></td>
         <td class="form"><b>Bank Account No:</b></td>
        <td><?php echo $row_up[7]; ?></td>
        </tr>
        
        <tr>
        <td class="form"><b>PAN No:</b></td>
        <td><?php echo $row_up[9]; ?></td>
         <td class="form"><b>No of Days:</b></td>
        <td><input id="days" type="text" class="q_in" name="days"></td>
        </tr>
        
        <tr>
        <td class="form"><b>No of Days Present:</b></td>
        <td><input id="present" type="text" class="q_in" name="e_nod"></td>
        
        <td class="form"><b>No of Days Paid:</b></td>
        <td><input id="paid" type="text" class="q_in" name="e_nop"></td>
        
        </tr>
   
        </table>
        
         <table style="margin-left:150px; margin-top:30px;">             
            <tr><td >
            <input type="button" class="print" value="Add Row" onClick="addRow('dataTable')" >&nbsp;
<input type="button" value="Delete Row" class="print" onClick="deleteRow('dataTable')" >
				</td>
            </tr> 
            </table>
        <table class="earning" align="center" >
        <tr>
        	<td colspan="2" align="center" width="124px"><b>EARNINGS</b></td>
        	<td colspan="2" align="center"><b>DEDUCTIONS</b></td>
        </tr>
        </table>       
        
        <table class="des" >        	             
            <tr>
                <td width="20"></td>
                
                <td class="heading" width="200">Description </td>      
                <td class="heading" width="200">Amount</td>
                <td class="heading" width="200">Description</td>
                <td class="heading" width="200">Amount</td>
                
                </tr>
        </table>
        
        <table class="des" id="dataTable">
                <tr>
                <td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                <td width="244px">
                 <input class="des_in" type="text" name="d1[]" id="0" value="" > <br>
                </td>
                 <td width="243px">
                 <input class="des_in" type="text" name="amt1[]" id="0" value="" onKeyUp="getValues()"> <br>
                </td>
                 <td width="243px">
                 <input class="des_in" type="text" name="d2[]" id="0" value=""> <br>
                </td>
                <td width="243px">
                 <input class="des_cap" type="text" name="amt2[]" id="a[1]" value="" onKeyUp="getValues()" ><br>
                </td>         
                </tr>                 
                
         </table>
         <table class="des">
                <tr>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td width="244">
                 <input class="des_in" type="text" name="total" id="tot" value='GROSS EARNING' align="right" readonly><br>
                </td>
                <td width="242">
                 <input class="des_q" type="text" name="txt_earning" id="txt_earning" readonly><br>
                </td>
                <td width="244">
                 <input class="des_in" type="text" name="total" id="tot" value='GROSS DEDUCTION' align="right" readonly><br>
                </td>
                <td width="242">
                 <input class="des_q" type="text" name="txt_deduction"  id="txt_deduction" readonly><br>
                </td>
               
                
                </tr>
                <tr>
                <td>&nbsp;&nbsp;&nbsp;</td>
                <td width="244">
                 <input class="des_in" type="text" name="total" id="tot" value='NET PAY' align="right" readonly><br>
                </td>
                <td width="242">
                 <input class="des_q" type="text" name="txt_netpay" id="txt_netpay" readonly><br>
                </td>
                
                </tr>
                </table>
        <br><br>
        <?php
		$yer=date('Y');
		$mon=date('n');
		$del=$_REQUEST['del'];
		 $find="select * from emp_sal where es_code='$row_up[1]' and year='$yer' and month='$mon'";
	   $an=mysql_query($find);
	   
		if($del==1)
		{
			while($res=mysql_fetch_array($an))
			{
			 $delete1="delete from sub_salary  where sal_code='$res[0]'";	
			mysql_query($delete1);
			}
			$delete="delete from emp_sal  where es_code='$row_up[1]' and year='$yer' and month='$mon'";
			mysql_query($delete);
			 $id=$_REQUEST['e_id3'];
			header('Location:addempreceipt.php?e_id3='.$id);
			}
		      
	   $cnt=mysql_num_rows($an);
	  if($cnt>0)
	  {
		   echo "<h2><center> You already inserted salary record for this month</h2>";
		   echo "<h4> <center>Still you want to add record then <a href='addempreceipt.php?e_id3=$_REQUEST[e_id3]&del=1'>click here </a> but after click previous record will be deleted</h4>";
	  }
	  else
	  {
		?>
        <div class="addclients_b">
         <input name="e_up" class="formbutton" value="Submit " type="submit" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
        </div>
       <?php
	  }
	   ?> 
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
