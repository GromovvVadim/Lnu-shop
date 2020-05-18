
<div class="row"> 
    <div class="col-lg-12"> 
        <!--<ol class="breadcrumb"> 
            <li> 
                <i class="fa fa-dashboard"></i> Dashboard / View Product Categories 
            </li>
        </ol>--> 
    </div> 
</div> 
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> 
                    <i class="fa fa-tags fa-fw"></i> View Product Categories 
                </h3> 
            </div> 
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-hover table-striped table-bordered"> 
                        <thead> 
                            <tr> 
                                <th> Product Category ID </th>
                                <th> Product Category Title </th>
                                <th> Product Category Desc </th>
                                <th> Edit Product Category </th>
                                <th> Delete Product Category </th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            
                            <tr> 
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $p_cat_title; ?> </td>
                                <td width="300"> <?php echo $p_cat_desc; ?> </td>
                                <td> 
                                    <a href="index.php?edit_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_p_cat= <?php echo $p_cat_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
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