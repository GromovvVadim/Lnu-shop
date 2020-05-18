
<div class="row"> 
    <div class="col-lg-12">  
    </div> 
</div> 
<div class="row"> 
    <div class="col-lg-12"> 
        <div class="panel panel-default"> 
            <div class="panel-heading"> 
                <h3 class="panel-title"> 
                    <i class="fa fa-tags fa-fw"></i> View Slides 
                </h3> 
            </div> 
            <div class="panel-body"> 
                 
                <div class="col-lg-3 col-md-3"> 
                    <div class="panel panel-primary"> 
                        <div class="panel-heading"> 
                            <h3 class="panel-title" align="center"> 
                                <?php echo $slide_name; ?> 
                            </h3> 
                        </div> 
                        <div class="panel-body"> 
                            <img src="slides_images/<?php echo $slide_image; ?>" alt="<?php echo $slide_name; ?>" class="img-responsive"> 
                        </div> 
                        <div class="panel-footer"> 
                            <center> 
                                <a href="index.php?edit_slide=<?php echo $slide_id; ?>" class="pull-left"> 
                                 <i class="fa fa-pencil"></i> Edit 
                                </a>
                                <a href="index.php?delete_slide=<?php echo $slide_id; ?>" class="pull-right"> 
                                 <i class="fa fa-trash"></i> Delete 
                                </a>
                                <div class="clearfix"></div> 
                            </center> 
                        </div> 
                    </div> 
                </div> 
                <?php } ?> 
            </div> 
        </div> 
    </div> 
</div> 
<?php } ?>