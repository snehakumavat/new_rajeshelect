<?php
include("include/database.php");
if(isset($_REQUEST['c_id3']))
{
 $id=$_REQUEST['c_id3'];
$per_page = 20; 
$sql = "select * from gatepass where client_id=".$id;
$rsd = mysql_query($sql);
$count = mysql_num_rows($rsd);
$pages = ceil($count/$per_page);
}

	if(isset($_REQUEST['c_id1']))
	{
		$c_d=$_REQUEST['c_id1'];
		$id=$_REQUEST['c_id3'];						
		$g_des="delete from material_desc where gatpas_id='$c_d'";
		$query2=mysql_query($g_des);
		$c_del="delete from gatepass where g_no='$c_d'";
		$c_dres=mysql_query($c_del);
		if($c_dres)
		{
			header("location:view_gatepass.php?c_id3=$id&res=suc");
		}
		else
		{
			header("location:view_gatepass.php?c_id3=$id&res=er1");
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
	
	$("#content").load("getpasspagination.php?page=1&id=<?php echo $id; ?>", Hide_Load());



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
		$("#content").load("getpasspagination.php?page=" + pageNum, Hide_Load());
		
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
	include("header.php");
	?>
    
    <div id="sub-header"><br>
    	<?php
		
		if(isset($_REQUEST['search']))
		  {
		 	 $srch=$_REQUEST['search'];
			 $id=$_REQUEST['id'];
			 $query="select * from gatepass where client_id='$id' AND (g_no LIKE '%$srch%' OR g_date LIKE '%$srch%' OR status LIKE '%$srch%' OR appr_nm LIKE '%$srch%')";
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
		while($c_row=mysql_fetch_array($ans))
		{			
        echo "<tr class='emp_header'>";
        echo "<td width='250'>";
		echo $c_row[8];
		echo "</td>";
        echo "<td width='160'>";
		echo $c_row[9];
		echo "</td>";
		echo "<td>";
		echo $c_row[13];
		echo "</td>";
		echo "<td>";
		echo $c_row[26];		
        echo "<td width='100' class='print'>";
		echo "<a href='?c_id1=$c_row[8]&c_id3=$id' onclick='return confirmSubmit()'>Delete</a>&nbsp;<a href='updategatepass.php?c_id2=$c_row[0]'>Update</a>&nbsp;<a href='view_gate.php?c_id3=$c_row[0]'>View</a>";
		echo "</td>";
		echo "</tr>";
		}
		?>        
        </table>	
	<?php
		}
?>
                <div class="quo">
                <br />
                <form action="" method="post" name="search">
				<table class="quotation">
                <tr>
                <td>GatePass Details</td>
                <td><input type='text' name="search" title="Enter gatepass no,date,approver name,status here.." /><input type="hidden" name="id" value="<?php echo $id; ?>">
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
                
                </div>
                
        
    
    	<div class="clear"></div>
    
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
