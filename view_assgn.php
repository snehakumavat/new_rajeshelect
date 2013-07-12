<?php
	include("include/database.php");	
	$per_page = 20; 
	$sql = "select * from assign_job";
	$rsd = mysql_query($sql);
	$count = mysql_num_rows($rsd);
	$pages = ceil($count/$per_page);	
?>
<html>
<head><title>Rajesh Electric Works</title>
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
	
	$("#content").load("paginationstock.php?page=1", Hide_Load());



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
		$("#content").load("paginationstock.php?page=" + pageNum, Hide_Load());
		
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

<body><div id="container">
	
    <?php
	include("header.php");
	?>
      <div id="sub-header">
        <div class="quo">
    	<br />
        <?php
		
		if(isset($_REQUEST['search']))
		  {
		 	 $srch=$_REQUEST['search'];			
			 $query="select emp.e_name,stock.st_name,assign_job.assg_val,assign_job.date from assign_job ,emp,stock where assign_job.stock_id=stock.st_id and assign_job.emp_id=emp.e_id and (emp.e_name LIKE '%$srch%' OR stock.st_name LIKE '%$srch%' OR date LIKE '%$srch%' )";
	 		 $ans=mysql_query($query);
	 
	?>
        <table class="emp_tab">
        <?php
        if(mysql_num_rows($ans)==0)
		{
		?>
        <tr class='emp_header'>
         <td colspan='6' align="center"><h3>No Data available</h3></td>
        </tr>
		
		<?php
        }
		?>
           <?php
		while($e_row=mysql_fetch_array($ans))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td width='160'>";
		echo $e_row[1];
		echo "</td>";
		echo "<td>";
		echo $e_row[2];
		echo "</td>";
       echo "<td>";
		echo date('d-m-Y',strtotime($e_row[3]));
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
                <td>Stock Assign Details</td>
                <td><input type='text' name="search"  title="Enter Employee name,sotck_name,date here" />
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
