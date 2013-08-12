<?php
error_reporting(0);
include("session.php");
include("include/database.php");

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
	
			
	echo $c_qry="INSERT INTO `certificate`(`name`, `addr`, `ydc_no`,`ydc_date`, `no`, `odc_no`, `odc_date`, `vendor_cod`, `cnt_per`, `dept`,
	 `make1`, `hp1`, `kw1`, `volts1`, `loadamp1`, `capacitor_val`,`driv_cover1`, `non_driv1`, `cooling_fan1`, `sr_no1`, `phase1`, `rpm`,
	   `insulatin1`, `resistnce`, `megar`, `bearing_n1`, `bearing_n2`, 
	   `termplat1`, `make2`, `hp2`, `kw2`, `volts2`, `load_amp2`, `brush`,
	    `driv_end2`, `non_driv2`,`cooling_fan2`, `sr_no2`, `comut2`, `frame`, `clas_insult2`,
		 `motor2`, `armature`, `bear_no1`, `bear_no2`, `terminal2`, 
		 `analysis_fail`, `wrk_don`, `remark`,`frame_size`, `mount_type`, `appl_motor`, `m_res`, `m_no_cur`, `m_inter1`,`m_inter2`) VALUES ('".$nm."','".$addr."','".$dc."','".$dcd."','".$no."',
		 '".$odc."','".$odcd."','".$vno."','".$cp."','".$dpt."',
		 '".$mk."','".$hp."','".$kw."','".$vlt."','".$lda."',
			 '".$cv."','".$dec."','".$nde."','".$cf."','".$sno."',
		 '".$ph."','".$rp."','".$ci."','".$rv."','".$mv."',
		 '".$bn."','".$bn1."','".$tp."','".$mk1."','".$hp1."',
		 '".$kw1."','".$vlt1."','".$la."','".$br."','".$dec1."',
		 '".$ndec."','".$cf1."','".$sno1."','".$ct."','".$frm."',
		 '".$ci1."','".$mfr."','".$afr."','".$brn."','".$brno2."',
		 '".$tp1."','".$af."','".$wd."','".$sr."','".$frm."','".$mount."','".$apl."','".$mainf."','".$mainc."','".$inter1."','".$inter2."')";
	//$c_res=mysql_query($c_qry);
	
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
          <table  align="center" class="q_clients_2" >
            <tr>
              <td class="l_form"   > M/s. </td>
              <td ><input type="text"  class="q_in" value="" name="nm">
                </td>
                <td class="l_form"  >Contact Person:</td>
                <td><input type="text"  class="q_in" value="" name="cp"></td>           
            </tr>
            <tr>
              <td class="l_form"  >Enter Address:</td>
              <td ><textarea  class="q_add" name="addr"></textarea></td>
              <td class="l_form" >Department:</td>
                <td><input type="text"  class="q_in" value="" name="dpt"></td>
            </tr>            
            <tr>
              <td class="l_form" >Your D.C.No :</td>
               <td > <input type="text"  class="q_in" value="" name="dc"></td>
              <td class="l_form"  >Your D.C.Date :</td>
               <td > <input type="date"  class="q_in" value="<?php echo date('Y-m-d');?>" name="dcd"></td>
              
            </tr>
            <tr>
              <td class="l_form" >Our D.C.No :</td>
               <td> <input type="text"  class="q_in" value="" name="odc"></td>
              <td class="l_form" >Our D.C.Date :</td>
                <td><input type="date"  class="q_in" value="<?php echo date('Y-m-d');?>" name="odcd"></td>
              
            </tr>
            <tr>
            <td class="l_form"  >No :</td>
                <td ><input type="text"  class="q_in" value="" name="no"></td>
 
             <td class="l_form" >Vendor code No :</td>
                <td><input type="text"  class="q_in" value="" name="vno"></td>
                </tr>
            </table>
             <table class='q_clients4'>
                  <tr>
                    <td class="l_form"  >Analysis of Failure :</td>
                      <td  colspan="3" class="l_form" >  <textarea  class="q_add" name="af"></textarea>
                      </td>
                       
                  </tr>
                      <tr>
                    <td class="l_form" >Special  Remarks:</td>
                      <td class="l_form" >  <textarea  class="q_add" name="sr"></textarea></td>
                      <td class="l_form" >Work Done :</td>
                      <td>  <textarea  class="q_add" name="wd"></textarea>
                      </td>
                  </tr>
                </table>
           
                <table class="test2">
              <tr> 
                    <td colspan="4" style="font-size:18px; padding-bottom:20px;" align="center" >AC SQ.CAGE INDUCTION MOTOR TESTING CERTIFICATE</td>
                  </tr>
                  <tr>
                    <td class="l_form" >Make:-</td>
                     <td> <input type="text"  class="q_in" value="" name="mk"></td>
                    <td class="l_form"   >Sr.No:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="sno"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >HP:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="hp"></td>
                    <td class="l_form"  width="379" >Phase:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="ph"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Kw:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="kw"></td>
                    <td class="l_form"  width="379" >RPM:-</td>
                       <td> <input type="text"  class="q_in" value="" name="rp"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Volts:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="vlt"></td>
                    <td class="l_form"  width="379" >Class of Insulation:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="ci"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >No.Load Ampere:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="lda"></td>
                    <td class="l_form"  width="379" >Resistance Value:-
                      <td>  <input type="text"  class="q_in" value="" name="rv"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Capacitor Value:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="cv"></td>
                    <td class="l_form"  width="379" >Megar Value:-
                      <td>  <input type="text"  class="q_in" value="" name="mv"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Driving End Cover(F):-</td>
                       <td> <input type="text"  class="q_in" value="" name="dec"></td>
                    <td class="l_form"  width="379" >Bearing No:-
                      <td>  <input type="text"  class="q_in" value="" name="bn"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Non Driving End Cover(B):-</td>
                       <td> <input type="text"  class="q_in" value="" name="nde"></td>
                    <td class="l_form"  width="379" >Bearing No:-
                      <td>  <input type="text"  class="q_in" value="" name="bn1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Cooling Fan:-</td>
                     <td> <input type="text"  class="q_in" value="" name="cf"></td>
                    <td class="l_form"  width="379" >Terminal Plate:-
                       <td> <input type="text"  class="q_in" value="" name="tp"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Frame Size:-</td>
                     <td> <input type="text"  class="q_in" value="" name="frmsiz"></td>
                    <td class="l_form"  width="379" >Mounting Type:-</td>
                       <td> 
                       <select class="a" name="mount">
                       <option value="0">select</option>
                       <option value="1">1</option>
                       <option value="2">3</option>
                       </select>
                       </td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395">Application of Motor:-</td>
                     <td colspan="3"> <textarea class="q_add" name="appl"></textarea></td>
                     </tr>
                </table>
                
          
              
              <table class="test3" >
              <tr> 
                    <td  colspan="4" style="font-size:18px; padding-bottom:20px;" align="center" >DC MOTOR TESTING CERTIFICATE</td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Make:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="mk1"></td>
                    <td class="l_form"  width="379" >Sr.No:-</td>
                       <td> <input type="text"  class="q_in" value="" name="sno1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >HP:-</td>
                       <td> <input type="text"  class="q_in" value="" name="hp1"></td>
                    <td class="l_form"  width="379" >Commutator:-</td>
                       <td> <input type="text"  class="q_in" value="" name="ct"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Kw:-</td>
                       <td> <input type="text"  class="q_in" value="" name="kw1"></td>
                    <td class="l_form"  width="379" >Frame:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="frm"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Volts:-</td>
                     <td> <input type="text"  class="q_in" value="" name="vlt1"></td>
                    <td class="l_form"  width="379" >Class of Insulation:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="ci1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >No.Load Ampere:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="la"></td>
                    <td class="l_form"  width="379" >Motor Field Resistance :-</td>
                     <td>   <input type="text"  class="q_in" value="" name="mfr"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Brush:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="br"></td>
                    <td class="l_form"  width="379" >Armature Field Resistence:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="afr"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395">Driving End Cover(F):-</td>
                     <td>   <input type="text"  class="q_in" value="" name="dec1"></td>
                    <td class="l_form"  width="379" >Bearing No:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="brn"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Non Driving End Cover(B):-</td>
                      <td>  <input type="text"  class="q_in" value="" name="ndec"></td>
                    <td class="l_form"  width="379" >Bearing No:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="brno2"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395"   >Cooling Fan:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="cf1"></td>
                    <td class="l_form"  width="379" >Terminal Plate:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="tp1"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395" >Main field resistance:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="mainf"></td>
                    <td class="l_form"  width="379" >Main field no load current:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="mainc"></td>
                  </tr>
                  <tr>
                    <td class="l_form"  width="395" >Main interpole resistance:-</td>
                      <td>  <input type="text"  class="q_in" value="" name="inter1"></td>
                    <td class="l_form"  width="379" >Main interpole no load current:-</td>
                     <td>   <input type="text"  class="q_in" value="" name="inter2"></td>
                  </tr>
                </table>
           
            
                <div class="addclients_b"  >
            <input name="c_add" class="formbutton" value=" Add " type="submit" tabindex="49" onClick="javascript:return validateMyForm();" />
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
