<div class="box">
  <div class="box-header">
      <center>
          <h1> Login </h1> 
          <p class="lead"> Already have account? </p>
      </center>
  </div>
  <form method="post" action="checkout.php">
      <div class="form-group">
          <label> Email </label> 
          <input name="c_email" type="text" class="form-control" required> 
      </div> 
       <div class="form-group"> 
          <label> Password </label> 
          <input name="c_password" type="password" class="form-control" required>
      </div>
      <div class="text-center">
          <button name="login" value="Login" class="btn btn-primary"> 
              <i class="fa fa-sign-in"></i> Login 
          </button> 
      </div>
  </form>
  <center>
     <a href="register.php">
         <h3> Register now </h3>
     </a>
  </center>
</div>
