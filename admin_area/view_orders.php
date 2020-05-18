
<div class="row"> 
    <div class="col-lg-12">
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  View Orders 
               </h3>  
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> No: </th>
                                <th> Customer Email: </th>
                                <th> Invoice No: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th> 
                                <th> Order Date: </th>
                                <th> Total Price: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                            </tr> 
                        </thead>
                        <tbody> 
                            
                            
                            
                            <tr> 
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $customer_email; ?> </td>
                                <td> <?php echo $invoice_no; ?></td>
                                <td> <?php echo $product_title; ?> </td>
                                <td> <?php echo $qty; ?></td> 
                                <td> <?php echo $order_date; ?> </td>
                                <td> <?php echo $order_price; ?> </td>
                                <td>  
                                    
                                </td>
                                <td>   
                                     <a href="index.php?delete_order=<?php echo $order_id; ?>"> 
                                        <i class="fa fa-trash-o"></i> Delete 
                                     </a>  
                                </td>
                            </tr> 
                            <?php } ?> 
                        </tbody> 
                        
                    </table> 
                </div> 
            </div> 
            
        </div> 
    </div> 
</div> 

<?php } ?>