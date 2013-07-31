<?php
	error_reporting(0);
	include("session.php");
	include("include/database.php");
	
	
	
function date_dropdown($year_limit = 0)
{
        $html_output = '<div id="date_select" >'."\n";
           /*months*/
        $html_output .= '<select name="date_month" id="month_select" >'."\n";
        $months = array("", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
		$m=date('n');
            for ($month = 1; $month <= 12; $month++) {
				
			if($month==$m)				                
			{
					$html_output .= '<option value="' . $month . '" selected >' . $months[$month] . '</option>'."\n";
			}
			else
			{
				$html_output .= '<option value="' . $month . '" >' . $months[$month] . '</option>'."\n";
			}
            }
        $html_output .= '           </select>'."\n";

    return $html_output;
}

function yearDropdown($id="year" ){ 
    //start the select tag	
	 $endyear=(date('Y')+20) ;
	 $year=date('Y');
	 	
    echo "<select id=".$id." name=".$id.">n"; 
          
        //echo each year as an option     
        for ($i=date('Y')-20;$i<=$endyear;$i++){ 
		if($i==$year)
        echo "<option value='".$i."' selected>".$i."</option>";     
		else
		echo "<option value='".$i."'>".$i."</option>";     
        } 
      
    //close the select tag 
    echo "</select>"; 
} 
	
?>
<html>
<head>
<title>Rajesh Electric Works</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<link rel="stylesheet" href="styles2.css" type="text/css" />

<script type="text/javascript" language="javascript">
function validateMyForm ( ) { 
    var isValid = true;
    if ( document.form1.ename.value == "" ) 
	{ 
	    alert ( "Field Is Not Blank" ); 
	    isValid = false;
    }
    return isValid;
}
</script>

</head>

<body>
<div id="container">
    <div id="sub-header">
	
    <?php
	include("header.php");
	?>
<br />
		<div class="quotation"><center>Employee Salary Slip Details</center></div>
        <div>
        <form  method="post" name="emp_sal" action="month_income_pdf.php">
<table class="emp_sal">
		<tr><td>select Employee Code:-</td>
        <td>
        <select name="emp_code">
        <option value="0">select</option>
		<?php
        $query="select * from emp";
		$res1=mysql_query($query);
		
		while($row1=mysql_fetch_array($res1))
		{
		?>
			<option value="<?php echo $row1[1]; ?>" ><?php echo $row1[1]; ?></option>
		<?php
        }
		
		?>
        
         </select>
        </td>
        </tr>
        <tr>
        <td>Select Month:-</td>
        <td>
		<?php
        	echo date_dropdown();
		?>
        </td>
     </tr>
        <tr>
        	<td>Select Year:-</td>
        <td>		
		<?php
       	 yearDropdown();  
		
		?></td>
        
</tr>
</table><div class="addemp_button">
<input type="submit"name="e_add" class="formbutton" value="submit"/>

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
