<?php
	include("include/database.php");
	if(isset($_REQUEST['c_id3']))
	{
	$c_up=$_REQUEST['c_id3'];
	}
	
?>
<?php
	if(isset($_REQUEST['g_add']))
	{	
	
	$g_t1=$_REQUEST['gn1'];
	$g_t2=$_REQUEST['gd1'];
	$g_t3=$_REQUEST['due1'];
	$g_t4=$_REQUEST['req1'];
	$g_t5=$_REQUEST['dept'];
	$g_t6=$_REQUEST['st1'];
	$g_t7=$_REQUEST['ref1'];
	$g_t8=$_REQUEST['part1'];
	$g_t9=$_REQUEST['add1'];
	$g_t10=$_REQUEST['tran'];
	$g_t11=$_REQUEST['time'];
	$g_t12=$_REQUEST['nm1'];
	$g_t13=$_REQUEST['vno'];
	$g_t14=$_REQUEST['ip1'];
	$g_t16=$_REQUEST['quant'];
	$g_t20=$_REQUEST['amt'];
	$g_t21=$_REQUEST['remark'];
	$g_t22=$_REQUEST['nm2'];
	$g_t23=$_REQUEST['apr'];
	$g_t24=$_REQUEST['date'];		
	$g_t25=$_REQUEST['tin'];
	$g_t26=$_REQUEST['cst'];
	$g_t27=$_REQUEST['ring'];
	$g_t28=$_REQUEST['exno'];
	$g_t29=$_REQUEST['div1'];
	$g_t30=$_REQUEST['com1'];
	
	$a=$_POST['d'];
	$b = count($a);
	for($i=0; $i<$b; $i++)
	{
		$id=$_REQUEST['i_id'];			
		$q_d=$_POST['d'][$i];
		$q_c=$_POST['c'][$i];
		$q_q=$_POST['q'][$i];
		$q_r=$_POST['r'][$i];
		$q_a=$_POST['s'][$i];
		$total=10;
			
	$quo="INSERT INTO `material_desc`( `gatpas_id`,`client_id`, `desc_mat`, `quant`, `tot_qnt`, `unit`, `rate`, `amount`, `tot_amt`) VALUES ('".$g_t1."','".$c_up."','".$q_d."','".$q_c."','-','".$q_q."','".$q_r."','".$q_a."','".$total."')";
	$quo_res=mysql_query($quo);	
	}
	
$result="insert into gatepass(`client_id`, `tin_no`, `cst_no`, `ex_ring`, `ex_no`, `ex_div`, `ex_com`,`g_no`,`g_date`,`due_date`,`req`,`dept`,`status`, `t_ref_no`,`p_name`,`addr`,`mode`, `time`, `t_name`, `v_no`, `issue`,`total_qnt`, `total_amt`, `remark`, `req_by`, `appr_nm`, `date_tim`) values('".$c_up."','".$g_t25."','".$g_t26."','".$g_t27."','".$g_t28."','".$g_t29."','".$g_t30."','".$g_t1."','".$g_t2."','".$g_t3."','".$g_t4."','".$g_t5."','".$g_t6."','".$g_t7."','".$g_t8."','".$g_t9."','".$g_t10."','".$g_t11."','".$g_t12."','".$g_t13."','".$g_t14."','-','-','".$g_t21."','".$g_t22."','".$g_t23."','".$g_t24."')";
	$ans=mysql_query($result);
	if($ans)
	{
	header("location:clients.php");
	}
	else
	{
		header("location:gatepass.php?c_id3=".$c_up);
	}	
	}
	
	
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>

<html>
<head>
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />

	<script language="javascript" type="text/javascript">
	function data()
	{

	alert($('input[id="a[]"]').length);
	
	}
	
	function data1()
	{

	  var a= document.getElementsByName('c1[]');
	  alert('trdt'+a.length);
	  var b=document.getElementsByName("r1[]");	  		
	  var total=document.getElementsByName("s1[]");
	  alert('val='+b.length);
	  for(var i=2;i<=a.length; i++)
		{
		alert('value='+(a[i].value * b[i].value));
		}	
	}
	  
	</script>
<script>
 var counter = 2;
 function add_phone_field()
 {
  var obj = document.getElementById("phone");
  var data = obj.innerHTML;
  data += "<table class='des'><tr><td><input class='des_in' type='text' name='d1["+counter+"]' id='d"+counter+"' /></td><td><input class='des_cap' type='text' name='c1["+counter+"]' id='a["+counter+"]' /></td><td><input class='des_q' type='text' name='q1["+counter+"]' id='person_phone"+counter+"' /></td><td><input class='des_r' type='text' name='r1["+counter+"]' id='b["+counter+"]' onChange='return data1()' /></td><td><input class='des_ser' type='text' name='s1["+counter+"]' id='total["+counter+"]' /></td></tr></table>";
  obj.innerHTML = data;
  counter++;
  }
  
  
 </script>
</head>

<body>
<div id="container">
	
    <?php
	include("header.php");
	?>
    
    <div id="sub-header">
    <div class="quo">
    	<br />
		<div class="quotation"><center>Returnable Gate Pass</center></div>
        <div>
        <form action="" method="post" name="gatepass1">
        <table class="q_clients_2" >       
            <tr>
              <td class="l_form">TIN NO:</td>
              <td><input id="tin" class="q_in" type="text" name="tin" tabindex="1"/></td>
              <td class="l_form">&nbsp;&nbsp; CST NO:</td>
              <td><input id="cst" class="q_in" type="text" name="cst" tabindex="2"/></td>             </tr>
           
            <tr>
          <td class="l_form">Ex Ring:</td>
          <td><input id="ring" class="q_in" type="text" name="ring" tabindex="3"/></td>  
          <td class="l_form" >&nbsp;&nbsp;Ex No.:</td>
          <td><input id="exno" class="q_in" type="text" name="exno" tabindex="4"/></td>              
            </tr>
            <tr>
          <td class="l_form">Ex Div:</td>
          <td><input id="div1" class="q_in" type="text" name="div1" tabindex="5"/></td>
          <td class="l_form">&nbsp;&nbsp;Ex Com:</td>
          <td><input id="com1" class="q_in" type="text" name="com1" tabindex="6"/></td>
            </tr>
            </table>
        <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Gate Pass Details</label></td>
            </tr> 
            </table>
            
            <table class="q_clients_2" >       
            <tr>
              <td class="l_form">Gate Pass No.:</td>
              <td><input id="gn1" class="q_in" type="text" name="gn1" tabindex="7"/></td>
              <td class="l_form">&nbsp;&nbsp;Gate Pass &nbsp;&nbsp;Date:</td>
              <td><input id="gd1" class="q_in" type="text" name="gd1" value="<?php echo date('Y-m-d'); ?>" tabindex="8"/></td>             </tr>
           
            <tr>
          <td class="l_form">Due Date:</td>
          <td><input id="due1" class="q_in" type="text" name="due1" value="<?php echo date('Y-m-d'); ?>" tabindex="9"/></td>  
          <td class="l_form" >&nbsp;&nbsp;Requested By:</td>
          <td><input id="req1" class="q_in" type="text" name="req1" tabindex="10"/></td>              
            </tr>
            <tr>
          <td class="l_form">Department:</td>
          <td><input id="dept" class="q_in" type="text" name="dept" tabindex="11"/></td>
          <td class="l_form">&nbsp;&nbsp;Status:</td>
          <td><input id="st1" class="q_in" type="text" name="st1" tabindex="12"/></td>
            </tr>
            </table>
            <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Party Details</label></td>
            </tr> 
            </table>
             <table class="q_clients_2" >       
            <tr>
              <td class="l_form">Truck Ref No.:</td>
              <td><input id="ref1" class="q_in" type="text" name="ref1" tabindex="13"/></td>
              <td class="l_form">&nbsp;&nbsp;Party Name:</td>
              <td><input id="part1" class="q_in" type="text" name="part1" tabindex="14"/></td>             </tr>
           
            <tr>
          <td class="l_form">Address:</td>
          <td><textarea id="add1" class="q_add" type="text" name="add1" tabindex="15"></textarea></td>  
          <td class="l_form" >&nbsp;&nbsp; Mode Of &nbsp;&nbsp;Transport:</td>
          <td><input id="tran" class="q_in" type="text" name="tran" tabindex="16"/></td>              
            </tr>
            <tr>
          <td class="l_form">Time</td>
          <td><input id="time" class="q_in" type="text" value="<?php echo date('h:i:s'); ?>" name="time" tabindex="17"/></td>
          <td class="l_form">&nbsp;&nbsp;Transport &nbsp;&nbsp;Name:</td>
          <td><input id="nm1" class="q_in" type="text" name="nm1" tabindex="18"/></td>
            </tr>
             <tr>
          <td class="l_form">Vehicle Number:</td>
          <td><input id="vno" class="q_in" type="text" name="vno" tabindex="19"/></td>
          <td class="l_form">&nbsp;&nbsp;Issue To &nbsp;&nbsp;Person:</td>
          <td><input id="ip1" class="q_in" type="text" name="ip1" tabindex="20"/></td>
            </tr>
            </table>
            
            
             <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Material Details</label></td>
            </tr> 
            </table>
				 <table class="des">
                <tr>
                <td class="heading">Description  Of Material.</td>                
                <td class="heading" >Quantity</td>
                <td class="heading">Unit</td>
                <td class="heading">Rate</td>
                <td class="heading">Amount</td>
                </tr>
                <span style="color:#00f;font-size:20px;font-weight:bold;cursor:pointer;" onClick="add_phone_field()">[+]</span>
                <tr>
                <td>
                 <input class="des_in" type="text" name="d[]" id="0" value=""> <br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="c[]" id="a[1]" value=""  ><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="q[]" id="0" value="" ><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="r[]" id="b[1]" value=""  onChange="return data()" ><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="s[]" id="total[1]" value=""  readonly><br>
                </td>                
                                </tr>                 
                
                </table>
                <div id="phone">
                
                </div>
                 <table class="des">
                <tr>
                <td>
                 <input class="des_in" type="text" name="total" id="tot" value='TOTAL' align="right" readonly><br>
                </td>
                <td>
                 <input class="des_cap" type="text" name="tot_qnt" id="tot_qnt" value="" readonly><br>
                </td>
                <td>
                 <input class="des_q" type="text" name="" id="" readonly><br>
                </td>
                <td>
                 <input class="des_r" type="text" name="" id="" readonly><br>
                </td>
                <td>
                 <input class="des_ser" type="text" name="tot_amt" id="" value="" readonly><br>
                </td>
                
                </tr>
                </table>
             
                      
             <table class="midtext">
            <tr >
            <td colspan="3"><label class="desc">Authorization</label></td>
            </tr> 
            </table>

             <table style="margin-left:250px;">       
            <tr>
              <td class="l_form">Approver Name:</td>
              <td><input id="apr" class="q_in" type="text" name="apr" tabindex="28"/></td>
              <td class="l_form">&nbsp;&nbsp;Date:</td>
              <td><input id="date" class="q_in1" type="text" name="date" value="<?php echo date('Y-m-d - h:i:sa'); ?>" tabindex="29" width="40px"/></td>             </tr>
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
