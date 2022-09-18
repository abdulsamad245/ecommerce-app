<?php 
    session_start();

    $qty = $_POST['quantity'];
    if(isset($_POST['update'])){
        foreach($_SESSION['cart'] as $Key => $value){
                // print_r($Key);
                if ($value['item_name'] ==$_POST['item_name']) {
                    $_SESSION['cart'][$Key]['quantity'] = $qty;
                    print_r($_SESSION['cart']);
                    echo "<script>alert('Item Updated');
                    window.location.href='shoping-cart.php';</script>";
                }
        }
    }
 ?>