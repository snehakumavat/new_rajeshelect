<?php
error_reporting(0);
include("session.php");
	
	include("include/database.php");
	$per_page = 20; 
	$sql = "select * from job_worksheet";
	$rsd = mysql_query($sql);
	$count = mysql_num_rows($rsd);
	$pages = ceil($count/$per_page);

?>
<?php
	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];
		$c_del="delete from job_worksheet where job_id=".$c_d;
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:view_worksheet.php?res=suc");
		}
		else
		{
			header("location:view_worksheet.php?res=er1");
		}
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
	
	$("#content").load("sheetpagination.php?page=1", Hide_Load());



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
		$("#content").load("sheetpagination.php?page=" + pageNum, Hide_Load());
		
	});
	
	
});
	</script>

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
margin-left:2px;
background-color:#7aa127;
box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -o-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -webkit-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);
   -moz-box-shadow: 0 2px 6px rgba(0,0,0,0.5), inset 0 1px rgba(255,255,255,0.3), inset 0 10px rgba(255,255,255,0.2), inset 0 10px 20px rgba(255,255,255,0.25), inset 0 -15px 30px rgba(0,0,0,0.3);	
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
    <div id="sub-header">

	    <?php
        include('header.php');
		if(isset($_GET['res']) && $_GET['res']=='er1')
		{			
		?>
        <div align="center"><h4 style="font-size:20px;color:#F03;">Technical Error while Deleting data</h4></div>
		<?php 
		}
		elseif(isset($_GET['res']) && $_GET['res']=='suc')
		{
		?>
        <div align="center"><h4 style="font-size:20px;color:#F03;">Delete record succesfully</h4></div>
		<?php 
		} ?>
        <?php
		
		if(isset($_REQUEST['search']))
		  {
		 	 $srch=$_REQUEST['search'];			
			 $query="select * from job_worksheet where client_name LIKE '%$srch%'";
	 		 $ans=mysql_query($query);
	 
	?>
        <table class="emp_tab">
        <?php
        if(mysql_num_rows($ans)==0)
		{
		?>
        <tr class='emp_header'>
         <td colspan='6' align="center"><h3> No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
        <?php
		while($c_row=mysql_fetch_array($ans))
		{
        echo "<tr class='pagi'>";
        echo "<td width='250'>";
		echo $c_row[1];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[2];
		echo "</td>";
		echo "<td >";
		echo $c_row[3];
		echo "</td>";
		echo "<td >";
		echo $c_row[4];		
        echo "<td >";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'><img src='imgs1/green_delete.png' height='20px;'/></a>&nbsp;<a href='updateworksheet.php?c_id2=$c_row[0]'> <img src='imgs1/updt.png' height='20px;'/></a>&nbsp;<a  href='viewwork.php?c_id3=$c_row[0]'><img src='imgs1/view.png'  /></a>&nbsp;<a href='assignstock.php?job_id=$c_row[0]' class='print'>assign stock</a>&nbsp;<a class='print' href='view_assgn.php'>view_assign</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>        
        </table>
        <?php
		  }
		?>
				<br>
                
                <form action="" method="post" name="search">
				<table class="emp_tab">
                <tr class="search_res">
                <td class="info"> Job Worksheet Details</td>
                <td width="350"><input type='text' class="result" name="search"  title="Enter client name here" />
                
                
                <input type="submit" name="result" value="" class="go" /></td>
                </tr>
                </table>
                </form>
		<div id="loading" ></div>
		<div id="content" ></div>
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
