  
<div class="row">
    <div class="col-lg-12">
    </div>
</div>     
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
           <div class="panel-heading">
               <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i> Insert User  
               </h3>
           </div>
           <div class="panel-body">
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Name </label>
                      <div class="col-md-6">
                          <input name="admin_name" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Phone </label>
                      <div class="col-md-6">
                          <input name="admin_phone" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> E-mail </label>
                      <div class="col-md-6">
                          <input name="admin_email" type="text" class="form-control" required> 
                      </div> 
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Country </label>
                      <div class="col-md-6">
                          <input name="admin_country" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Password </label>
                      <div class="col-md-6">
                          <input name="admin_pass" type="password" class="form-control" required>  
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> Job </label>
                      <div class="col-md-6">
                          <input name="admin_job" type="text" class="form-control" required> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"> About </label>
                      <div class="col-md-6">
                          <textarea name="admin_about" class="form-control" rows="3"></textarea> 
                      </div>
                   </div>
                   <div class="form-group">
                      <label class="col-md-3 control-label"></label>
                      <div class="col-md-6">
                          <input name="submit" value="Create Account" type="submit" class="btn btn-primary form-control"> 
                      </div>
                   </div> 
               </form>
           </div>
        </div>
    </div>
</div>

<?php } ?>