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
            
            <tr><!--  tr Begin  -->
                
                <th>  </th>
                <td>  </td>
                <td>  </td>
                <td> $ </td>
                <td>  </td>
                <td>  </td>
                <td>
                    <a href="confirm.php?order_id=<?php echo $order_id; ?>" target="_blank" class="btn btn-primary btn-sm"> Confirm Paid </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>