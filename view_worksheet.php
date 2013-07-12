<?php
	
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
        <div align="center"><h4 style="font-size:20px;color:#F03;">Technical Error while Deleting data</h4></div>
		<?php 
		}
		elseif(isset($_GET['res']) && $_GET['res']=='suc')
		{
		?>
        <div align="center"><h4 style="font-size:20px;color:#F03;">Delete record succesfully</h4></div>
		<?php 
		} ?>
    
    <div id="sub-header">
	<div class="quo">
    	<br /><br />
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
        echo "<tr class='emp_header'>";
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
        echo "<td class='print'>";
		echo "<a href='?c_id1=$c_row[0]' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updateworksheet.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='viewwork.php?c_id3=$c_row[0]'>View</a>&nbsp;<a href='assignstock.php?job_id=$c_row[0]'>assign stock</a>&nbsp;<a href='view_assgn.php'>view_assign</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>        
        </table>
        <?php
		  }
		?>

                <form action="" method="post" name="search">
				<table class="quotation">
                <tr>
                <td>Job Worksheet Details</td>
                <td><input type='text' name="search"  title="Enter client name here" />
                </td>
                <td><input type="submit" name="result" value="search" class="formbutton" /></td>
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
