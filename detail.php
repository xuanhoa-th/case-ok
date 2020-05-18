<?php 
include "header.php";

$id = isset($_GET['id'])?$_GET['id']:0;

$products = mysqli_query($conn, "SELECT * FROM product WHERE product_id = $id ");
$product = mysqli_fetch_assoc($products);
// var_dump($product); die();


 ?>
        <main class="site-main">
            <div class="container">
                <ol class="breadcrumb-page">
                    <li><a href="#">Home </a></li>
                    <li class="active"><a href="#">Detail</a></li>
                </ol>
            </div>
            <div class="container">
                <div class="product-content-single">
                     
                    <div class="row">
                       
                            
                       
                        <div class="col-md-8 col-sm-12 padding-right">
                            <div class="product-media">
                                <div class="image-preview-container image-thick-box image_preview_container">
                                    <img id="img_zoom" data-zoom-image="<?php echo 'admin3/uploads/product/'. $product['image']  ?>" src="<?php echo 'admin3/uploads/product/'. $product['image']  ?>" alt="">
                                    <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-sm-6">

                            <div class="product-info-price">
                                 <div class="product-name"><a href="#"><?php echo $product['name'] ?></a></div>
                                <div class="product-info-stock-sku">
                                    <div class="stock available">
                                       
                                    </div>
                                </div>
                                <div class="transportation">
                                    <!-- <span>item with Free Delivery</span> -->
                                </div>
                                Giá:
                                <span class="price">
                                    <ins><?php echo $product['price'] ?>.vnđ</ins>
                                   
                                </span>
                              
                               <!--  <div class="single-add-to-cart">
                                    <a href="action-cart.php?id=<?php echo $product['id']?>" class="btn-add-to-cart">Thêm vào giỏ hàng</a>
                                    
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
           <br>
           <br>
           <br>
           <br>
           <br>
            
        </main>
       
        <?php include "footer.php" ;?>