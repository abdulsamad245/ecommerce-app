 <?php 
    session_start();
    if(isset($_POST['remove'])){
        foreach($_SESSION['cart'] as $Key => $value){
                // print_r($Key);
                if ($value['item_name'] ==$_POST['item_name']) {
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    unset($_SESSION['cart'][$Key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                    echo "<script>alert('Item removed');
                    window.location.href='product.php';</script>";
                }
        }
    }
 ?>