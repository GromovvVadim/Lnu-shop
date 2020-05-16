

<h1 align="center">Edit Account</h1>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
       <label>Name</label> 
       <input type="text" class="form-control" name="c_name" value="<?php echo $customer_name; ?>" required> 
    </div>
    <div class="form-group">
       <label>Phone</label> 
       <input type="text" class="form-control" name="c_phone" value="<?php echo $customer_phone; ?>" required> 
    </div>
    <div class="form-group">
       <label>Email</label> 
       <input type="text" class="form-control" name="c_email" value="<?php echo $customer_email; ?>" required> 
    </div>
    <div class="form-group">
       <label>Address</label> 
       <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required> 
    </div>
    <div class="form-group">
       <label>City</label> 
       <input type="text" class="form-control" name="c_city" value="<?php echo $customer_city; ?>" required> 
    </div>
    <div class="form-group">
       <label>Country</label> 
       <input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required> 
    </div>
    <!--<div class="form-group">
       <label>Password</label> 
       <input type="password" class="form-control" name="c_password" required> 
    </div>-->
    <div class="text-center"> 
       <button type="submit" name="update" class="btn btn-primary"> 
       <i class="fa fa-user-md"></i> Save Changes 
       </button> 
   </div> 
</form> 