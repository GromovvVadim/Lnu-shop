<?php
$db = mysqli_connect("localhost","root","","TD-Shop");
function getProduct(){ 
    global $db; 
    $get_products = "select * from products order by 1 DESC LIMIT 0,6"; 
    $run_products = mysqli_query($db,$get_products); 
    while($row_products=mysqli_fetch_array($run_products)){ 
        $pro_id = $row_products['product_id']; 
        $pro_title = $row_products['product_title']; 
        $pro_price = $row_products['product_price']; 
        $pro_img1 = $row_products['product_img1']; 
        echo " 
        <div class='col-md-4 col-sm-6 single'> 
            <div class='product'> 
                <a href='details.php?pro_id=$pro_id'> 
                    <img class='img-responsive' src='admin_area/product_images/$pro_img1'> 
                </a> 
                <div class='text'> 
                    <h3> 
                        <a href='details.php?pro_id=$pro_id'> 
                            $pro_title 
                        </a> 
                    </h3> 
                    <p class='price'> 
                        $ $pro_price 
                    </p> 
                    <p class='button'> 
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'> 
                            View Details 
                        </a> 
                        <a class='btn btn-primary' href='details.php?pro_id=$pro_id'> 
                            <i class='fa fa-shopping-cart'></i> Add to Cart 
                        </a> 
                    </p> 
                </div> 
            </div> 
        </div> 
        "; 
    } 
}


function items(){
    global $db;
    $ip_add = getIpFunc();
    $get_items = "select * from cart where ip_add='$ip_add'";
    $run_items = mysqli_query($db,$get_items);
    $count_items = mysqli_num_rows($run_items);
    echo $count_items;
}

function total_price(){
    global $db;
    $ip_add = getIpFunc();
    $total = 0;
    $select_cart = "select * from cart where ip_add='$ip_add'";
    $run_cart = mysqli_query($db,$select_cart);
    while($record=mysqli_fetch_array($run_cart)){
        $pro_id = $record['p_id'];
        $pro_qty = $record['qty'];
        $get_price = "select * from products where product_id='$pro_id'";
        $run_price = mysqli_query($db,$get_price);
        while($row_price=mysqli_fetch_array($run_price)){
            $sub_total = $row_price['product_price']*$pro_qty;
            $total += $sub_total;
        }
    }
    echo "$" . $total;
}
function getPagination(){
    global $db;
    $per_page=6;
    $aWhere = array();
    $aPath = '';
    if(isset($_REQUEST['p_cat'])&&is_array($_REQUEST['p_cat'])){
        foreach($_REQUEST['p_cat'] as $sKey=>$sVal){
            if((int)$sVal!=0){
                $aWhere[] = 'p_cat_id='.(int)$sVal;
                $aPath .= 'p_cat[]='.(int)$sVal.'&';
            }
        }
    }
    if(isset($_REQUEST['cat'])&&is_array($_REQUEST['cat'])){
        foreach($_REQUEST['cat'] as $sKey=>$sVal){
            if((int)$sVal!=0){
                $aWhere[] = 'cat_id='.(int)$sVal;
                $aPath .= 'cat[]='.(int)$sVal.'&';
            }
        }
    }

    $sWhere = (count($aWhere)>0?' WHERE '.implode(' or ',$aWhere):'');
    $query = "select * from products".$sWhere;
    $result = mysqli_query($db,$query);
    $total_records = mysqli_num_rows($result);
    $total_pages = ceil($total_records / $per_page);
    echo "<li> <a href='shop.php?page=1";
    if(!empty($aPath)){
        echo "&".$aPath;
    }
    echo "'>".'First Page'."</a></li>";
    for($i=1; $i<=$total_pages; $i++){
        echo "<li> <a href='shop.php?page=".$i.(!empty($aPath)?'&'.$aPath:'')."'>".$i."</a></li>";
    };
    echo "<li> <a href='shop.php?page=$total_pages";
    if(!empty($aPath)){
        echo "&".$aPath;
    }
    echo "'>".'Last Page'."</a></li>";
}
