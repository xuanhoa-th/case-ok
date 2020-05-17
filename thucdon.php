
<?php include "header.php"; ?>
<?php 
$about = mysqli_query($conn,"SELECT * FROM about WHERE status = 0 ");
$about2 = mysqli_query($conn,"SELECT * FROM about WHERE status = 2 ");
$category = mysqli_query($conn,"SELECT * FROM category ");
$product = mysqli_query($conn,"SELECT * FROM product LIMIT 5 ");
$productSushi = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 8 ");
$productCom = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 11 ");
$productLau = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 12 ");
// var_dump($product);
// die();


 ?>


	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<span class="tieudephu fontdancing">Hương vị các món ăn tốt nhất.</span>
 						<h3 class="tieudechinh fontroboto">Danh sách thực đơn </h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 <div class="container">
 		 	<div class="row">
 		 		<div class="col-sm-12 text-xs-center">
 		 			<div class="khoi2dong"> 
 		 				<p><img src="images/service1.jpg" alt="">						</p>
 						<span class="fontdancing">Món ăn mới tuyệt vời </span>
 						<h2 class="fontoswarld">Khám phá nhà hàng của chúng tôi</h2>
 						 
  					</div>
 		 		</div>
 		 	</div>
 		 </div>
 		<div class="noidungct">
 			 <div class="container">
 			 	<div class="row nhieumon">
 			 		<?php foreach ($productSushi as $value): ?>
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon sang">
 			 			<div class="row">
 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						<div class="tagnew">NEW</div>
 			 						<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="img-fluid">
 			 					</div>

 			 					
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							<!-- Mussel with tomato sauce, wine -->
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->
 			 		<?php endforeach ?>
 			 		


 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
   
	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 					 	<div><img src="images/3contom.png" alt=""></div>

 						<span class="tieudephu fontdancing">Với thịt, cá hoặc rau</span>
 						<h3 class="tieudechinh fontroboto">Thực đơn đặc biệt</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 
 		<div class="noidungct  mt-3">
 			 <div class="container">
 			 	<div class="row nhieumon">

 			 		<?php foreach ($productCom as $value): ?>
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon sang">
 			 			<div class="row">
 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						<div class="tagnew">NEW</div>
 			 						<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="img-fluid">
 			 					</div>

 			 					
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							<!-- Mussel with tomato sauce, wine -->
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->
 			 		<?php endforeach ?>
 			 		
 			 		


 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->
   
	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<div><img src="images/nuocchanh.png" alt=""></div>
 						<span class="tieudephu fontdancing">Our Fresh And Healthy </span>
 						<h3 class="tieudechinh fontroboto">Special Dinner Menu Items</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

 	<div class="thucdonct wow fadeInUp  tthucdon">
 		 
 		<div class="noidungct mt-3">
 			 <div class="container">
 			 	<div class="row nhieumon">
 			 		
						<?php foreach ($productLau as $value): ?>
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon sang">
 			 			<div class="row">
 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						<div class="tagnew">NEW</div>
 			 						<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="img-fluid">
 			 					</div>

 			 					
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							<!-- Mussel with tomato sauce, wine -->
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->
 			 		<?php endforeach ?>
 			 		
 			 		

 			 	</div> <!-- het row -->
 			 </div>  <!-- het container -->
 			 
 		</div>  <!-- het noidungct -->
 	</div>  <!-- HET THUCDONCT -->




   <?php include "footer.php"; ?>


</body>
</html>