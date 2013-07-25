<?php
error_reporting(0);
include("session.php");
include('converter.php');
	include("include/database.php");
	if(isset($_REQUEST['c_id2']))
	{
	$c_up=$_REQUEST['c_id2'];
	}
	
?>
<?php
	if(isset($_REQUEST['g_add']))
	{	
	
	
	$a=$_POST['d'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		//$id=$_REQUEST['i_id'];			
		$q_d=$_POST['d'][$i];
		$q_u=$_POST['u'][$i];
		$q_q=$_POST['q'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['a'][$i];
	//	$total=10;
			
	 $quo="INSERT INTO `material_desc`( `gatpas_id`,`client_id`, `desc_mat`, `quant`, `unit`, `rate`, `amount`) VALUES ('".$g_t1."','".$c_up."','".$q_d."','".$q_q."','".$q_u."','".$q_r."','".$q_a."')";
	 $quo_res=mysql_query($quo);	
	
	}
	
 $result="insert into gatepass(`client_id`, `tin_no`, `cst_no`, `ex_ring`, `ex_no`, `ex_div`, `ex_com`,`g_no`,`g_date`,`due_date`,`req`,`dept`,`status`, `t_ref_no`,`p_name`,`addr`,`mode`, `time`, `t_name`, `v_no`, `issue`,`total_qnt`, `total_amt`, `remark`, `req_by`, `appr_nm`, `date_tim`) values('".$c_up."','".$g_t25."','".$g_t26."','".$g_t27."','".$g_t28."','".$g_t29."','".$g_t30."','".$g_t1."','".$g_t2."','".$g_t3."','".$g_t4."','".$g_t5."','".$g_t6."','".$g_t7."','".$g_t8."','".$g_t9."','".$g_t10."','".$g_t11."','".$g_t12."','".$g_t13."','".$g_t14."','".$g_t16."','".$g_t20."','".$g_t21."','".$g_t22."','".$g_t23."','".$g_t24."')";
	$ans=mysql_query($result);
	//exit();
	if($ans)
	{
	header("location:viewpo.php");
	}
	else
	{
		header("location:po.php?c_id2=".$c_up);
	}	
	}
	
	
	if(isset($_REQUEST['can']))
	{
		header("location:addpo.php");
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
<script type="text/javascript" src="toword.js">
</script>
<script>
var total = 0;
function getValues() {
var qty = 0;
var rate = 0;
var obj = document.getElementsByTagName("input");
      for(var i=0; i<obj.length; i++){
         if(obj[i].name == "qnt[]")
		 {
			 var qty = obj[i].value;
			
		}
         if(obj[i].name == "r[]")
		 {
			 var rate = obj[i].value;
		 }
         if(obj[i].name == "value[]")
		 {
          		if(qty > 0 && rate > 0)
				{
					obj[i].value = qty*rate;
					total+=(obj[i].value*1);
				}
				else
				{
					obj[i].value = 0;
				    total+=(obj[i].value*1);
				}
          }
       
		 }
		 var tax =document.getElementById("stax").value;
		 var vat =document.getElementById("vat").value;
		 var add=total*1;
		 add+=(tax*1);
		  add+=(vat*1);		 
        document.getElementById("total").value = add;
		var words = toWords(add);
		document.getElementById("word").innerHTML=words;
        total=0;
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
	$query="select * from clients where c_id='$c_up'";
	$nm=mysql_query($query);
	$cmpnm=mysql_fetch_array($nm);
	
	?><br />
        <div class="quotation"><center>Purches Order Details</center></div>
        <div><br>
        <form action="" method="post" name="po" >
        <table style="margin-left:100px;">       
            <tr>
           <td class="l_form">Client Name:-</td>
         <td><input id="cmp1" class="q_in" type="text" name="cmp1" value="<?php echo $cmpnm[3]; ?>" tabindex=""/></td>
            </tr>
            <tr>
              <td class="l_form">Address:-</td>
         <td>
         <textarea id="addr" class="q_add"  name="addr" tabindex=""> <?php echo $cmpnm[4]; ?></textarea></td>
            </tr>
            <tr>
              <td class="l_form">Ph No:-</td>
         <td>
         <input type='text' id="phno" class="q_in"  name="phno"  value="<?php echo $cmpnm[8]; ?>" tabindex=""/></td>
            </tr>                       
            </table>
        <br><br>
            
            <table  style="margin-left:100px;">       
            <tr>
              <td class="l_form">Vendor Code:</td>
              <td><input id="gn1" class="q_in" type="text" name="gn1" tabindex=""/></td>
              <td class="l_form">Work Order Number:</td>
              <td><input id="gd1" class="q_in" type="text" name="gd1" tabindex=""/></td>             </tr>
           
            <tr>
          <td class="l_form">Work Order Date:</td>
          <td><input id="odate" class="q_in" type="date" name="odate" tabindex=""/></td>  
          <td class="l_form" >Cost Center:</td>
          <td><input id="req1" class="q_in" type="text" name="req1" tabindex=""/></td>              
            </tr>
            <tr>
          <td class="l_form">Validity From:</td>
          <td><input id="d1" class="q_in" type="date" name="d1" tabindex=""/></td>
          <td class="l_form">Validity To:</td>
          <td><input id="d2" class="q_in" type="date" name="d2" tabindex=""/></td>
            </tr>
            </table>
           <br><br>
            
            
             <table class="midtext1">
             
            <tr><td colspan="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="button" value="Add Row" onClick="addRow('dataTable')" >&nbsp;
			<input type="button" value="Delete Row" onClick="deleteRow('dataTable')" >
				</td>
            </tr>
            </table>
				 <table class="des" >
                <tr>
                <td width="20"></td>
                <td class="heading" width="50">Sr. No</td>
                <td class="heading" width="105">Service No.</td>                
                <td class="heading" width="200">Service Description</td>
                <td class="heading" width="100">UOM</td>
                <td class="heading" width="100">Ouantity</td>
                <td class="heading" width="100">Basic Rate</td>
                <td class="heading" width="100">Value</td>
                </tr>
                </table>
               <!-- <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>-->
               <table class="des" id="dataTable">

                <tr>
                <td style="white-space:nowrap;" width="20"><input type="checkbox" name="chk[]"/></td>
                 <td width="50">
                <input class="des_in" type="text" name="no[]" id="0" value=""> <br>
                </td>
                <td width="105">
                <input class="des_in" type="text" name="sr[]" id="0" value=""> <br>
                </td>
                <td width="200">
                <input class="des_in" type="text" name="sr_d[]" id="0" value=""> <br>
                </td>
                <td width="100">
             <input class="des_cap" type="text" name="uom[]" id="uom" value="" ><br>
                </td>
                <td width="100">
                 <input class="des_q" type="text" name="qnt[]" id="" value="" ><br>
                </td>
                <td width="100" >
                 <input class="des_r" type="text" name="r[]" id="r" value=""  onkeyup="getValues()" ><br>
                </td>
                <td width="100">
                 <input class="des_ser" type="text" name="value[]" id="value" value=""  readonly><br>
                </td>                
                </tr>                 
                
                </table>               
                
                
                 <table class="des" border="1">
                <tr>
                <td width="20">&nbsp;&nbsp;</td>
                <td width="50">&nbsp;&nbsp;</td>                
                <td colspan="4">
                 Enter Service Tax (Including Ecess): RS.
                </td>
                <td width="100"><input type='text' name='stax' value=""  id="stax" onkeyup="getValues()" /></td>
                </tr>
                <tr>
                <td width="20">&nbsp;&nbsp;</td>
                <td width="50">&nbsp;&nbsp;</td>                
                <td colspan="4">
                 Enter VAT: RS.
                </td>
                <td width="100"><input type='text' name='vat' id="vat"  onkeyup="getValues()" /></td>
                </tr>
                <tr>
                <td width="20">&nbsp;&nbsp;</td>
                <td colspan="5">
                 Total Purchase Order Value:-
                 <div align="right"> Rs:-</div>
                </td>
                <td width="100"> 
                <input type='text' name='total' id="total" value=""/>
                </td>               
                </tr>
                <tr>
                <td width="20">&nbsp;&nbsp;</td>
                <td colspan="6">
				Order Value (in words):-
				<h5><div id='word'></div></h5>
                </td>                              
                </tr>
                </table>
              
            

                                  
             

                         
                
        <div class="addclients_b">
         <input name="g_add" class="formbutton" value=" Submit " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
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
