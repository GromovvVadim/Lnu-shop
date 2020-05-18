
<div class="row"> 
    <div class="col-lg-12">
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  View Costumers
               </h3>  
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> No: </th>
                                <th> Name: </th>
                                <th> Phone: </th>
                                <th> E-Mail: </th>
                                <th> Address: </th>
                                <th> City: </th>
                                <th> Country: </th>
                                <th> Delete: </th>
                            </tr> 
                        </thead>
                        <tbody> 
                            
                            <tr> 
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> </td> 
                                <td> 
                                     <a href="index.php?delete_customer=<?php echo $c_id; ?>"> 
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