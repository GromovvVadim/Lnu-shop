<?php
include("db.php");
include_once("functions/functions.php");
?>
<?php
if(isset($_GET['c_id'])){ 
    $customer_id = $_GET['c_id'];  
} 
$ip_add = getIpFunc();
$status = "pending"; 
$invoice_no = mt_rand(); 
$select_cart = "select * from cart where ip_add='$ip_add'"; 
$run_cart = mysqli_query($con,$select_cart); 
while($row_cart = mysqli_fetch_array($run_cart)){ 
    $pro_id = $row_cart['p_id']; 
    $pro_qty = $row_cart['qty']; 
    $get_products = "select * from products where product_id='$pro_id'"; 
    $run_products = mysqli_query($con,$get_products); 
    while($row_products = mysqli_fetch_array($run_products)){ 
        $sub_total = $row_products['product_price']*$pro_qty; 
        $insert_customer_order = "insert into customer_orders (customer_id,qty,order_date,price,order_status,invoice_no) values ('$customer_id','$pro_qty',NOW(),'$sub_total','$status','$invoice_no')";
        $run_customer_order = mysqli_query($con,$insert_customer_order); 
        $insert_pending_order = "insert into pending_orders (customer_id,invoice_no,product_id,qty,order_status) values ('$customer_id','$invoice_no','$pro_id','$pro_qty','$status')";
        $run_pending_order = mysqli_query($con,$insert_pending_order); 
        $delete_cart = "delete from cart where ip_add='$ip_add'"; 
        $run_delete = mysqli_query($con,$delete_cart); 
        echo "<script>alert('Orders has been submitted')</script>";
        echo "<script>window.open('customer/account.php?orders','_self')</script>";
    } 
} 
?>