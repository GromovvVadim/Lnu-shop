
<div class="row"> 
    <div class="col-lg-12"> 
        <!--<ol class="breadcrumb"> 
            <li> 
                <i class="fa fa-dashboard"></i> Dashboard / View Categories 
            </li>
        </ol>--> 
    </div> 
</div>  
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> 
                    <i class="fa fa-tags fa-fw"></i> View Categories 
                </h3> 
            </div> 
            <div class="panel-body"> 
                <div class="table-responsive"> 
                    <table class="table table-hover table-striped table-bordered"> 
                        <thead> 
                            <tr> 
                                <th> Category ID </th>
                                <th> Category Title </th>
                                <th> Category Desc </th>
                                <th> Edit Category </th>
                                <th> Delete Category </th>
                            </tr> 
                        </thead> 
                        <tbody> 
                            
                            <tr> 
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td width="300"> <?php echo $cat_desc; ?> </td>
                                <td> 
                                    <a href="index.php?edit_cat= <?php echo $cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_cat= <?php echo $cat_id; ?> ">
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