
<div class="row"> 
    <div class="col-lg-12">  
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
               <h3 class="panel-title">
                   <i class="fa fa-tags"></i>  View Users 
               </h3>  
            </div>
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-striped table-bordered table-hover">
                        <thead> 
                            <tr> 
                                <th> No: </th>
                                <th> User Name: </th>
                                <th> User Phone: </th>
                                <th> User E-Mail: </th>
                                <th> User Country: </th>
                                <th> User Job: </th> 
                                <th> Edit: </th>
                                <th> Delete: </th>
                            </tr> 
                        </thead>
                        <tbody>
                             
                            <tr> 
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td>  </td>
                                <td> </td>
                                <td>  </td> 
                                <td>
                                 <a href="index.php?user_profile=<?php echo $user_id; ?>">
                                    <i class="fa fa-pencil"></i> Edit 
                                 </a>  
                                </td>
                                <td>  
                                 <a href="index.php?delete_user=<?php echo $user_id; ?>"> 
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