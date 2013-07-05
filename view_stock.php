<?php
	
	include("include/database.php");
	$per_page = 20; 
	//$sql = "select * from stock";
	//$rsd = mysql_query($sql);
	//$count = mysql_num_rows($rsd);
	//$pages = ceil($count/$per_page);
	$pages='1';

?>
<?php
	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];		
		$c_del="delete from stock where st_id='$c_d'";
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:view_stock.php?res=suc");
		}
		else
		{
			header("location:view_stock.php?res=er1");
		}
		
	}
?>

<html>
<head>

<title>Rajesh Electic Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
 <script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript">

function confirmSubmit()
{
var agree=confirm("Are you sure to Delete this Entry?");
if (agree)
	return true ;
else
	return false ;
}

	
	$(document).ready(function(){
	//Display Loading Image
	function Display_Load()
	{
	    $("#loading").fadeIn(900,0);
	
	}
	//Hide Loading Image
	function Hide_Load()
	{
		$("#loading").fadeOut('slow');
	};
	

    //Default Starting Page Results
   
	$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("stockpagination.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		$("#content").load("stockpagination.php?page=" + pageNum, Hide_Load());
		
	});
	
	
});

setTimeout(function()
{
   $('#lead_form').show();
}, 5000);
	</script>
	          
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<style>
a
{
text-decoration:none;
color:#B2b2b2;

}

a:hover
{

color:#DF3D82;
text-decoration:underline;

}
#loading { 
width: 100%; 
position: absolute;
}

#pagination
{
text-align:center;
color:#6F0;
margin-left:10px;
margin-top:0px;
}
#pagination li {	
list-style: none; 
float: left; 
margin-right: 16px; 
padding:5px;3 
color:#FFF;
margin-left:-10px;
background-color:#00a1d2;

}
#pagination li:hover
{ 
color:#FF0084; 
cursor: pointer; 

}


</style>
</head>

<body>
<div id="container">
	    <?php
        include('header.php');
		if(isset($_GET['res']) && $_GET['res']=='er1')
		{			
		?>
        <div align="center" id="lead_form" >
          <h4 style="font-size:20px;color:#F03;">Technical Error while Deleting data</h4>
        </div>
		<?php 
		}elseif(isset($_GET['res']) && $_GET['res']=='suc')
		{
		?>
        <div align="center"  id="lead_form" ><h4 style="font-size:20px;color:#F03;">Delete record succesfully</h4></div>
	  <?php 
		} 
		?>
    
    <div id="sub-header">
	<div class="quo">
    	<br />
		<div class="quotation"><center>View Stock Details</center></div>
         
                <div id="loading" ></div>
		<div id="content" ></div>
       <?php
	   /*$c_d=$_REQUEST['c_id1'];
		$c_del="select * from stock where st_id='$c_d'";
		$c_dres=mysql_query($c_del);
		$count=mysql_num_rows($c_dres);
		if($count==0)
		{
	    ?>
        <div align="center">
          <h4 style="font-size:20px;color:#F03;">Record Not Present</h4>
        </div>
		<?php 
		}else
		{ */
		?>
        <table width="800px">
	<tr><Td>
			<ul id="pagination">
				<?php
						
				//Show page links
				for($i=1; $i<=$pages; $i++)
				{								
					echo '<li id="'.$i.'">'.$i.'</li>';
				}
				?>
	</ul>	
	</Td></tr></table>
    </div>
    <?php
		//}
	?>
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
