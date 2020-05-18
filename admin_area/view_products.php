 
<div class="row"> 
    <div class="col-lg-12"> 
        <!--<ol class="breadcrumb"> 
            <li class="active"> 
                <i class="fa fa-dashboard"></i> Dashboard / View Products 
            </li> 
        </ol>--> 
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  View Products 
               </h3>  
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> Product ID: </th>
                                <th> Product Date: </th>
                                <th> Product Title: </th>
                                <th> Product Image: </th>
                                <th> Product Price: </th>
                                <th> Product Keywords: </th>
                                <th> Product Edit: </th>
                                <th> Product Delete: </th>
                                <th> Product Sold: </th> 
                            </tr> 
                        </thead>
                        <tbody>
                             
                            <tr> 
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> <img src="product_images/<?php echo $pro_img1; ?>" width="60" height="60"></td>
                                <td> $  </td>
                                <td>  </td>
                                <td>
                                     <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-pencil"></i> Edit
                                     </a>
                                </td>
                                <td>
                                     <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                        <i class="fa fa-trash-o"></i> Delete
                                     </a>
                                </td>
                                <td> 

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