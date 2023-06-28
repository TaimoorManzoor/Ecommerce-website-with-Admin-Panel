<?php
session_start();
// session_destroy();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "hello";

    if (isset($_POST['add_to_cart'])) {

        if (isset($_SESSION['cart'])) {
            $myitem = array_column($_SESSION['cart'], 'id');
            if (in_array($_POST['id'], $myitem)) {

                echo "<script>
                alert('Product Already Added');
                        window.location.href='product.php'; 
                </script>";
            } else {
                $count = count($_SESSION['cart']);
                $_SESSION['cart'][$count] = array('id' => $_POST['id'], 'price' => $_POST['price'], 'images' => $_POST['images'], 'detail' => $_POST['detail'], 'quantity' => 1);
                print_r($_SESSION['cart']);
                echo "<script>
                alert('Product Added');
                        window.location.href='product.php'; 
                </script>";
            }

        } else {
            $_SESSION['cart'][0] = array('id' => $_POST['id'], 'price' => $_POST['price'], 'images' => $_POST['images'], 'detail' => $_POST['detail'], 'quantity' => 1);
            print_r($_SESSION['cart']);
            echo "<script>
            alert('Product Added');
                    window.location.href='product.php'; 
            </script>";
        }
    }
    if (isset($_POST['remove_item'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            if($value['id']==$_POST['id'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo "<script>
                        alert('Product Remove');
                        window.location.href='cart.php'; 
                </script>";
            }  
        }
    }
}?>