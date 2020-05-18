<center>
    <h1>Orders </h1> 
</center>
<hr> 
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th> №: </th>
                <th> Quantity: </th>
                <th> Order Date:</th>
                <th> Price: </th>
                <th> Paid / Unpaid: </th>
                <th> Invoice №: </th>
                <th> Status: </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $customer_session = $_SESSION['customer_email'];
            $get_customer = "select * from customers where customer_email='$customer_session'";
            $run_customer = mysqli_query($con,$get_customer);
            $row_customer = mysqli_fetch_array($run_customer);
            $customer_id = $row_customer['customer_id'];
            $get_orders = "select * from customer_orders where customer_id='$customer_id'";
            $run_orders = mysqli_query($con,$get_orders);
            $i = 0;
            while($row_orders = mysqli_fetch_array($run_orders)){
                $order_id = $row_orders['order_id'];
                $qty = $row_orders['qty'];
                $order_date = substr($row_orders['order_date'],0,11);
                $get_price = $row_orders['price'];
                $order_status = $row_orders['order_status'];
                $invoice_no = $row_orders['invoice_no'];
                $i++;
                if($order_status=='pending'){
                    $order_status = 'Unpaid';
                }else{
                    $order_status = 'Paid'; 
                }
            ?>
            <tr><!--  tr Begin  -->
                
                <th> <?php echo $i; ?> </th>
                <td> <?php echo $qty; ?> </td>
                <td> <?php echo $order_date; ?> </td>
                <td> $<?php echo $get_price; ?> </td>
                <td> <?php echo $order_status; ?> </td>
                <td> <?php echo $invoice_no; ?> </td>
                <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>