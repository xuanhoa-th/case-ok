<?php 
include "header.php";
// die();

$id = isset($_GET['id'])?$_GET['id']:0;
// var_dump($id); die();
$action = isset($_GET['action'])?$_GET['action']:'add';

// $quantity = isset($_GET['action'])?$_GET['quantity'] : 1;

$pro = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $id ");
// var_dump($pro); die();
$product = mysqli_fetch_assoc($pro);




// them moi

if ($action == 'add' && $product ) {

    if (isset($_SESSION['cart'][$id])) {
    $_SESSION['cart'][$id]['quantity']+=1;
} else {
    $_SESSION['cart'][$id] = 

    [

    'id' => $product['product_id'],
    'name' => $product['name'],
    'image' => $product['image'],
    'price' => $product['price'],
    'quantity' => 1

   ];

}
    
}

// xoa 1sp
if ($action ==='delete') {
    unset($_SESSION['cart'][$id]);
    
}


// update

if ($action == 'update') {

    
}


// xoa het

if ($action == 'deleteAll') {
    unset($_SESSION['cart']);
    // unset( $_SESSION['cart'][$id]);

}


                     


echo "<script>window.location='./shopping-cart.php'</script>";




 ?>