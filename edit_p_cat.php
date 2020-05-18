 
<div class="row"> 
    <div class="col-lg-12"> 
        <!--<ol class="breadcrumb"> 
            <li> 
                <i class="fa fa-dashboard"></i> Dashboard / Edit Product Category 
            </li>
        </ol> -->
    </div> 
</div>
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> 
                    <i class="fa fa-pencil fa-fw"></i> Edit Product Category 
                </h3> 
            </div>
            <div class="panel-body"> 
                <form action="" class="form-horizontal" method="post"> 
                    <div class="form-group"> 
                        <label for="" class="control-label col-md-3"> 
                             Category Title 
                        </label> 
                        <div class="col-md-6"> 
                            <input value=" <?php echo $p_cat_title; ?> " name="p_cat_title" type="text" class="form-control"> 
                        </div> 
                    </div> 
                    <div class="form-group"> 
                        <label for="" class="control-label col-md-3"> 
                             Category Description 
                        </label> 
                        <div class="col-md-6"> 
                            <textarea type='text' name="p_cat_desc" class="form-control"><?php echo $p_cat_desc; ?></textarea> 
                        </div> 
                    </div> 
                    <div class="form-group"> 
                        <label for="" class="control-label col-md-3"> 
                        </label>  
                        <div class="col-md-6"> 
                            <input value="Update" name="update" type="submit" class="form-control btn btn-primary"> 
                        </div> 
                    </div> 
                </form> 
            </div> 
        </div> 
    </div> 
</div> 
 
<?php } ?> 