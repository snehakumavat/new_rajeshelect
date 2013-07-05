<?php
include("include/database.php");
	if(isset($_REQUEST['c_id3']))
	{
	$id=$_REQUEST['c_id3'];
	$c_qry="select * from stock where st_id=".$id;
	$c_res=mysql_query($c_qry);
	$result=mysql_fetch_array($c_res);
	//print_r($result);
	}
	if(isset($_REQUEST['can']))
	{
		header("location:view_stock.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            

<script type="text/javascript" language="javascript">

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
		<div class="quotation"><center>View Stock Details</center></div>
        <div > </div>
        <div>
        <form name="form1" action="" method="post">
        
        <table class="q_clients4">
                <tr><td class="l_form">ID:</td><td><input id="id" class="q_in" type="text" name="id" value="<?php echo $result[1];?>" readonly="readonly" /></td></tr>
                <tr><td class="l_form">Name:</td><td><input id="nm1" class="q_in" type="text" name="nm1" value="<?php echo $result[2] ;?>"  readonly="readonly" /></td></tr>
                <tr><td class="l_form">Category:</td><td><input type="text" id="cate" class="q_in" name="cate" value="<?php echo $result[3];?>"  readonly="readonly" /></td></tr>
                 <tr><td class="l_form">Quantity:</td><td><input type="text" id="qunt" class="q_in" name="qunt" value="<?php echo $result[4];?>" readonly /></td></tr>		
                 <tr><td class="l_form">Buying Rate:</td><td><input type="text" id="brate" class="q_in" name="brate" value="<?php echo $result[5];?>"  readonly="readonly" /></td></tr>
                <tr><td class="l_form">Selling Rate:</td><td><input id="srate" class="q_in" type="text" name="srate" value="<?php echo $result[6];?>"  readonly="readonly" /></td></tr>
                 <tr><td class="l_form">Suplier Name:</td><td><input id="sname" class="q_in" type="text" name="sname" value="<?php echo $result[7];?>"  readonly="readonly" /></td></tr>				
                </table>
                
                
        <div class="addclients_b">
        
         <input name="can" class="formbutton" value="Back" type="submit" />
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