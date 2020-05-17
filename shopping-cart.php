<?php 
include "header.php";

// var_dump($cart);
// die();



//  $sum = 0; $total = 0;

// foreach ($cart as $value) 
// {
//     $sum = $sum + $value['price'] * $value['quantity'];

//     $total = $total * $value['quantity'];
    
// }




 ?>

    <div class="wrapper">
        <main class="site-main shopping-cart">
            <div class="container">
                <ol class="breadcrumb-page">
                    <!-- <li><a href="#">Home </a></li> -->
                    <li class="active"><a href="#">Shopping Cart</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                       
                            <div class="table-cart">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="tb-image"></th>
                                            <th class="tb-product">Tên sản phẩm</th>
                                            <th class="tb-price">Đơn giá</th>
                                            <th class="tb-qty">Số lượng</th>
                                           <!--  <th class="tb-total">Tổng</th> -->
                                            <th class="tb-remove"></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                     <form method="GET" action="">
                                        <?php foreach ($cart as $value): ?>
                                        <tr>
                                            <td ><a href="#" ><img width="150px" src="<?php echo 'admin3/uploads/product/'. $value['image'] ?>" alt="cart"></a></td>
                                            <td class="tb-product">
                                                <div class="product-name"><a href="#"><?php echo $value['name'] ?></a></div>
                                            </td>
                                            <td class="tb-price">
                                               
                                                <span class="price"><?php echo $value['price'] ?>.đ</span>
                                            </td>
                                            <td class="tb-qty">
                                                <div class="quantity">
                                                    <div class="" style="color: blue; border: none;">
                                                        <input type="number" value="<?php echo $value['quantity'] ?>">  <!-- so luong -->
                                                        <!-- <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                                                        <a href="#" class="sign minus"><i class="fa fa-minus"></i></a> --> 
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tb-total">
                                                
                                                    <input type="hidden" name="action" value="update">
                                                     <button type="submit" ><i title="Cập nhập giỏ hàng" class="fa fa-refresh" aria-hidden="true"></i></button> 
                                            </td>
                                            <td class="tb-remove">
                                                <button><a  href="action-cart.php?id=<?php echo $value['id']?>&action=delete" class="action-remove"><span style="color: white"><i class="fa fa-times" ></i></span></a></button>
                                                
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                     </form>
                                       
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart-actions">
                                <button><a href="action-cart.php?action=deleteAll" class="btn-update" >
                                    <span style="color: white;" >Xóa giỏ hàng</span>
                                </a></button>
                            </div>
                       
                    </div>
                    <div class="col-md-3 padding-left-5">
                        <div class="order-summary">
                            <h4 class="title-shopping-cart">đặt hàng</h4>
                            <div class="checkout-element-content">
                               <!--  <span class="order-left">Số tiền:<span>$458.00</span></span> -->
                                <span class="order-left">Phí chuyển hàng:<span style="color: red;">miễn phí</span></span>
                                 <input type="hidden" name="price" value="<?php echo $sum; ?>">                                   <!--tong gia san pham -->
                                <span class="order-left">Tổng tiền:<span><?php echo tongtien($cart); ?>.vnđ</span></span>
                                <button type="submit" class="btn-checkout" >
                                   <a href="checkout.php" title="" >Đặt hàng</a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </main><!-- end MAIN -->
        
    </div>
  <?php include "footer.php";?>