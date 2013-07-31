<?php
include("include/database.php");
error_reporting(0);
include("session.php");

if(isset($_REQUEST['cr_id2']))
{
	$m=$_REQUEST['cr_id2'];
	$query="select * from certificate where crt_id='$m'";
	$exe=mysql_query($query);
	$motor=mysql_fetch_array($exe);
	}
	if(isset($_REQUEST['c_add']))
	{
	$nm=$_POST['nm'];	
	$cp=$_POST['cp'];
	$addr=$_POST['addr'];
	$dpt=$_POST['dpt'];
	$dc=$_POST['dc'];
	$dcd=date('Y-m-d',strtotime($_POST['dcd']));			//date1
	$odc=$_POST['odc'];
	$odcd=date('Y-m-d',strtotime($_POST['odcd']));		//date2
	$no=$_POST['no'];
	$vno=$_POST['vno'];
	$mk=$_POST['mk'];
	$sno=$_POST['sno'];
	$hp=$_POST['hp'];
	$ph=$_POST['ph'];
	$kw=$_POST['kw'];
	$rp=$_POST['rp'];
	$vlt=$_POST['vlt'];
	$ci=$_POST['ci'];
	$lda=$_POST['lda'];
	$rv=$_POST['rv'];
	$cv=$_POST['cv'];
	$mv=$_POST['mv'];
	$dec=$_POST['dec'];
	$bn=$_POST['bn'];
	$nde=$_POST['nde'];
	$bn1=$_POST['bn1'];
	$cf=$_POST['cf'];
	$tp=$_POST['tp'];
	$mk1=$_POST['mk1'];
	$sno1=$_POST['sno1'];
	$ct=$_POST['ct'];
	$hp1=$_POST['hp1'];
	$kw1=$_POST['kw1'];
	$frm=$_POST['frm'];
	$vlt1=$_POST['vlt1'];
	$ci1=$_POST['ci1'];
	$la=$_POST['la'];
	$mfr=$_POST['mfr'];
	$br=$_POST['br'];
	$afr=$_POST['afr'];
	$dec1=$_POST['dec1'];
	$brn=$_POST['brn'];
	$ndec=$_POST['ndec'];
	$brno2=$_POST['brno2'];
	$cf1=$_POST['cf1'];
	$tp1=$_POST['tp1'];
	$af=$_POST['af'];
	$wd=$_POST['wd'];
	$sr=$_POST['sr'];
	$apl=$_POST['appl'];
	$frm=$_POST['frmsiz'];
	$mount=$_POST['mount'];
	$mainf=$_POST['mainf'];
	$mainc=$_POST['mainc'];
	$inter1=$_POST['inter1'];
	$inter2=$_POST['inter2'];

	$c_qry="update `certificate` set `name`= '".$nm."',`addr`='".$addr."',`ydc_no`='".$dc."',`ydc_date`='".$dcd."',
	 `no`='".$no."', `odc_no`='".$odc."',`odc_date`='".$odcd."',`vendor_cod`='".$vno."',`cnt_per`='".$cp."',`dept`='".$dpt."',
`make1`='".$mk."', `hp1`='".$hp."', `kw1`='".$kw."', `volts1`='".$vlt."',`loadamp1`='".$lda."', `capacitor_val`='".$cv."',
`driv_cover1`='".$dec."', `non_driv1`='".$nde."',`cooling_fan1`='".$cf."',`sr_no1`='".$sno."', `phase1`=  '".$ph."',`rpm`='".$rp."',
`insulatin1`='".$ci."', `resistnce`='".$rv."',`megar`='".$mv."',`bearing_n1`='".$bn."', `bearing_n2`= '".$bn1."',
`termplat1`='".$tp."', `make2`='".$mk1."', `hp2`='".$hp1."',`kw2`='".$kw1."', `volts2`= '".$vlt1."',`load_amp2`='".$la."', `brush`= '".$br."',
`driv_end2`='".$dec1."', `non_driv2`='".$ndec."',`cooling_fan2`='".$cf1."',
`sr_no2`='".$sno1."', `comut2`='".$ct."',`frame`='".$frm."', `clas_insult2`='".$ci1."',
`motor2`='".$mfr."', `armature`='".$afr."', `bear_no1`='".$brn."',`bear_no2`='".$brno2."', `terminal2`='".$tp1."', 
`analysis_fail`='".$af."', `wrk_don`='".$wd."', `remark`='".$sr."' ,`frame_size`='".$frm."',`mount_type`='".$mount."',`appl_motor`='".$apl."',`m_res`='".$mainf."',`m_no_cur`='".$mainc."',`m_inter1`='".$inter1."',`m_inter2`='".$inter2."'";
//	exit();
	$c_res=mysql_query($c_qry);
	
	if($c_res)
	{
		header("location:view_cert.php");
	}
	else
	{
		echo "error";
	}
}
	if(isset($_REQUEST['can']))
	{
		header("location:view_cert.php");
	}
?>
<html>
<head>
<title>Rajesh Electric Wires</title>
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
	?>
    <div class="quo"> <br />
      <div class="quotation">
        <center>
          Testing Certificate Details
        </center>
      </div>
      <div>
        <form action="" method="post" name="certificate">
          <br>
          <table  align="center" class="testing1" >
            <tr>
              <td class="l_form"   > M/s. </td>
              <td ><input type="text"  class="q_in" value="<?php echo $motor[1]; ?>" name="nm">
                </td>
                <td class="l_form"  >Contact Person:</td>
                <td><input type="text"  class="q_in" value="<?php echo $motor[9]; ?>" name="cp"></td>           
            </tr>
            <tr>
              <td class="l_form"  >Enter Address:</td>
              <td ><textarea  class="q_add" name="addr"><?php echo $motor[2]; ?></textarea></td>
              <td class="l_form" >Department:</td>
                <td><input type="text"  class="q_in" value="<?php echo $motor[10]; ?>" name="dpt"></td>
            </tr>            
            <tr>
              <td class="l_form" >Your D.C.No :</td>
               <td > <input type="text"  class="q_in" value="<?php echo $motor[3]; ?>" name="dc"></td>
              <td class="l_form"  >Your D.C.Date :</td>
               <td > <input type="date"  class="q_in" value="<?php echo $motor[4];?>" name="dcd"></td>
              
            </tr>
            <tr>
              <td class="l_form" >Our D.C.No :</td>
               <td> <input type="text"  class="q_in" value="<?php echo $motor[6]; ?>" name="odc"></td>
              <td class="l_form" >Our D.C.Date :</td>
                <td><input type="date"  class="q_in" value="<?php echo  $motor[7];?>" name="odcd"></td>
              
            </tr>
            <tr>
            <td class="l_form"  >No :</td>
                <td ><input type="text"  class="q_in" value="<?php echo $motor[5]; ?>" name="no"></td>
 
             <td class="l_form" >Vendor code No :</td>
                <td><input type="text"  class="q_in" value="<?php echo $motor[8]; ?>" name="vno"></td>
                </tr>
            </table>
            <table>
                  <tr>
                    <td class="des1">AC SQ.CAGE INDUCTION MOTOR TESTING CERTIFICATE</td>
                  </tr>
                </table>
                
                <table class="test2">
            
                  <tr>
                    <td class="l_form" >Make:-</td>
                     <td> <input type="text"  class="q_in" value="<?php echo $motor[11]; ?>" name="mk"></td>
                    <td class="l_form"   >Sr.No:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[20]; ?>" name="sno"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >HP:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[12]; ?>" name="hp"></td>
                    <td class="l_form"  width="379" >Phase:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[21]; ?>" name="ph"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Kw:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[13]; ?>" name="kw"></td>
                    <td class="l_form"  width="379" >RPM:-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[22]; ?>" name="rp"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Volts:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[14]; ?>" name="vlt"></td>
                    <td class="l_form"  width="379" >Class of Insulation:-</td>
                     <td>   <input type="text"  class="q_in" value='<?php echo $motor[23]; ?>' name="ci"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >No.Load Ampere:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[15]; ?>" name="lda"></td>
                    <td class="l_form"  width="379" >Resistance Value:-
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[24]; ?>" name="rv"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Capacitor Value:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[16]; ?>" name="cv"></td>
                    <td class="l_form"  width="379" >Megar Value:-
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[25]; ?>" name="mv"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Driving End Cover(F):-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[17]; ?>" name="dec"></td>
                    <td class="l_form"  width="379" >Bearing No:-
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[26]; ?>" name="bn"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Non Driving End Cover(B):-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[18]; ?>" name="nde"></td>
                    <td class="l_form"  width="379" >Bearing No:-
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[27]; ?>" name="bn1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Cooling Fan:-</td>
                     <td> <input type="text"  class="q_in" value="<?php echo $motor[19]; ?>" name="cf"></td>
                    <td class="l_form"  width="379" >Terminal Plate:-
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[28]; ?>" name="tp"></td>
                  </tr>
                   <tr>
                    <td class="l_form"  width="395"   >Frame Size:-</td>
                     <td> <input type="text"  class="q_in" value="<?php echo $motor[50]; ?>" name="frmsiz"></td>
                    <td class="l_form"  width="379" >Mounting Type:-
                    </td>
                    <td>
                       <select class="a" name="mount">
                       <option value="0">select</option>
                       <option value="1" <?php if($motor[51]=='1') echo 'selected'; ?>>1</option>
                       <option value="2" <?php if($motor[51] =='2') echo 'selected'; ?>>3</option>
                       </select>
                       </td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395">Application of Motor:-</td>
                     <td colspan="3"> <textarea class="q_add" name="appl"><?php echo $motor[52]; ?></textarea></td>
                     </tr>
                </table>
                
            <table>
                  <tr>
                    <td class="des1" >DC MOTOR TESTING CERTIFICATE</td>
                  </tr>
                </table>
              
              <table class="test2" >
                  <tr>
                    <td class="l_form"  width="395"   >Make:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[29]; ?>" name="mk1"></td>
                    <td class="l_form"  width="379" >Sr.No:-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[38]; ?>" name="sno1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >HP:-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[30]; ?>" name="hp1"></td>
                    <td class="l_form"  width="379" >Commutator:-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[39]; ?>" name="ct"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Kw:-</td>
                       <td> <input type="text"  class="q_in" value="<?php echo $motor[31]; ?>" name="kw1"></td>
                    <td class="l_form"  width="379" >Frame:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[40]; ?>" name="frm"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Volts:-</td>
                     <td> <input type="text"  class="q_in" value="<?php echo $motor[32]; ?>" name="vlt1"></td>
                    <td class="l_form"  width="379" >Class of Insulation:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[41]; ?>" name="ci1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >No.Load Ampere:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[33]; ?>" name="la"></td>
                    <td class="l_form"  width="379" >Motor Field Resistance :-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[42]; ?>" name="mfr"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Brush:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[35]; ?>" name="br"></td>
                    <td class="l_form"  width="379" >Armature Field Resistence:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[43]; ?>" name="afr"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395">Driving End Cover(F):-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[36]; ?>" name="dec1"></td>
                    <td class="l_form"  width="379" >Bearing No:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[44]; ?>" name="brn"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Non Driving End Cover(B):-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[37]; ?>" name="ndec"></td>
                    <td class="l_form"  width="379" >Bearing No:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[45]; ?>" name="brno2"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Cooling Fan:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[38]; ?>" name="cf1"></td>
                    <td class="l_form"  width="379" >Terminal Plate:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[46]; ?>" name="tp1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395" >Main field resistance:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[53]; ?>" name="mainf"></td>
                    <td class="l_form"  width="379" >Main field no load current:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[54]; ?>" name="mainc"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395" >Main interpole resistance:-</td>
                      <td>  <input type="text"  class="q_in" value="<?php echo $motor[55]; ?>" name="inter1"></td>
                    <td class="l_form"  width="379" >Main interpole no load current:-</td>
                     <td>   <input type="text"  class="q_in" value="<?php echo $motor[56]; ?>" name="inter2"></td>
                  </tr>
                </table>
           
             <table class='test2'>
                  <tr>
                    <td class="l_form" width="260"  >Work Done :</td>
                      <td>  <textarea  class="q_in" name="wd"><?php echo $motor[48]; ?></textarea></td>
                  </tr>
                    <tr>
                    <td class="l_form" >Special  Remarks:</td>
                      <td>  <textarea  class="q_add" name="sr"><?php echo $motor[49]; ?></textarea></td>
                      
                      <td class="l_form" >Analysis of Failure :</td>
                      <td>  <textarea  class="q_add"  name="af"><?php echo $motor[47]; ?></textarea></td>
                  </tr>
                </table>
                <div class="addclients_b">
            <input name="c_add" class="formbutton" value=" Update " type="submit" tabindex="49" onClick="javascript:return validateMyForm();" />
            <input name="can" class="formbutton" value="Cancel" type="submit" tabindex="50" />
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
