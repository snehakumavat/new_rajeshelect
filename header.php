
<div id="nav">
     <ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="home.php">Home</a>
            	<ul>
                	<li><a href="term.php">T&amp;C</a>
                    <li><a href="taxdetails.php">Service Tax Details</a>
                    <li><a href="addterm.php">Add Terms</a></li>
                    <li><a href="addTaxDetails.php">Add Tax Details</a></li>
              
            
                </ul>
            
            </li>
                      
            <li><a class="has_submenu" href="clients.php">Client</a>
            	<ul>
                	<li><a href="addclients.php">Add Clients</a></li>
                     <li><a class="has_submenu" href="quotation.php">Quotation</a>
            			<ul>
                     		<li><a href="addquo.php">Quotation Add</a></li>
                		</ul>
            		</li>
                    <li><a class="has_submenu" href="viewpo.php">PO</a>
            			<ul><li><a href="addpo.php">PO Add</a></li></ul>
            		</li>
                    <li><a class="has_submenu" href="invoicedetails.php">Invoice</a>
            			<ul>
                    	<li><a href="addinvoice.php">Invoice Add</a></li>
                    	</ul>
            		</li>
                    <li><a href="reciept.php">Delivery Chalan</a></li>
                    
                </ul>
                                 
            <li ><a class="has_submenu" href="view_worksheet.php">Worksheet</a>
            <ul>
               	<li><a href="add_worksheet.php">Add Job</a></li>            	
            </ul>
            </li>
             <?php /*?><li><a class="has_submenu" href="quotation.php">Quotation</a>
            		<ul>
                     <li><a href="addquo.php">Quotation Add</a></li>
                	</ul>
            </li>
            <li><a class="has_submenu" href="viewpo.php">PO</a>
            		<ul>
                    <li><a href="addpo.php">PO Add</a></li>
                	
                    </ul>
            </li>  
            
              <li><a class="has_submenu" href="invoicedetails.php">Invoice</a>
            		<ul>
                    <li><a href="addinvoice.php">Invoice Add</a></li>
                
                    </ul>
            </li> 
            </li>
            <li><a href="reciept.php">Delivery Chalan</a>
            		
            </li><?php */?>
                                     
            <li><a href="payment.php">Payments</a>
            <ul>
            		<li><a href="income.php">Income</a></li>
            		<li><a href="expense.php">Expense</a></li>
					<li><a href="montlyincome.php">Monthy Inc.</a></li>
                    <li><a href="montlyexpense.php">Monthy Exp.</a></li>
                    <li><a href="totalreport.php">Reports</a></li>     
			</ul>
            </li>     		
            <li><a class="has_submenu" href="employee.php">Employees</a>
            	<ul>
                	<li><a href="addepm.php">Add Employee</a></li>    
                    <li><a href="month_emp_income.php">View income Details</a></li>    
                 </ul>
            </li>
            <li><a class="has_submenu" href="view_vendor.php">Vendor</a>
            <ul>
               	<li><a href="add_vendor.php">Add Vendor</a></li>            	
            </ul>
           
            <li><a class="has_submenu" href="view_stock.php">Stock</a>
            <ul>
                	<li><a href="add_stock.php">Add Stock</a></li>                	

            </ul></li>
              <li><a class="has_submenu" href="view_cert.php">Test Report</a>
            <ul>
              	<li><a href="raj.php">add_certificate</a></li>
            </ul>
           </li>  
           
            <li><a class="has_submenu" href="loghistory.php">log_history</a>
                      </li> 
                                  
           <li>
           <a class="has_submenu" href="logout.php">logout</a>
           </li> 
           <li>
           <?php
 if(isset($_SESSION['uname']) && isset($_SESSION['password']))
{
	echo '<h4 style="color:#000;margin-left:20px;margin-top:12px;">Welcome: '.$_SESSION['uname'].'</h4>';
}
 ?></li>
                          
        </ul>
  
</div>
