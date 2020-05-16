<center>
  <h1 align="center"> Are u sure u want to delete account?</h1>
  <form action="" method="post" > 
    <input type="submit" class="btn btn-primary" name="No" value="No">
    <input type="submit" class="btn btn-danger" name="Yes" value="Yes">   
  </form>
</center>


<?php
$c_email = $_SESSION['customer_email'];
if(isset($_POST['Yes'])){
    $delete_customer = "delete from customers where customer_email='$c_email'";
    $run_delete_customer = mysqli_query($con,$delete_customer);
    if($run_delete_customer){
        session_destroy();
        echo "<script>alert('Account was deleted')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    } 
}
if(isset($_POST['No'])){ 
    echo "<script>window.open('account.php?orders','_self')</script>";   
}
?>