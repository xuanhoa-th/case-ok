<?php include "header.php";?>

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
 	
<div class="slide">
		 

 
 	</div> <!-- het slide  -->
 	
  	<div class="khoimenu wow fadeInUp">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<span class="tieudephu fontdancing">Mục menu ngon của chúng tôi</span>
 						<h3 class="tieudechinh fontroboto">Thực phẩm tươi và tốt cho sức khỏe</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->
 	<div class="thucdonct wow fadeInUp">
 		<div class="tieudect text-xs-center fontroboto">

 			<a href="" data-monan="*">All </a>
 			<a href="id=3" data-monan=".sang">Sushi</a>
 			<a href="" data-monan=".trua">SET Cơm</a>
 			<a href="" data-monan=".toi">BUFFET Lẩu</a> 
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
 			 						<img src=" <?php echo 'admin3/uploads/product/'. $value['image']  ?> " alt="" class="img-fluid">
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->
 			 		<?php endforeach ?>
 			 		<?php foreach ($productCom as $value): ?>
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon toi">
 			 			<div class="row">
 			 				<div class="col-xs-3 col-sm-4">
 			 					<div class="anhmon">
 			 						<div class="tagnew">NEW</div>
 			 						<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?> " alt="" class="img-fluid">
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 							
 			 						</div>
 			 					</div>
 			 				</div>
 			 			</div> <!-- het row -->
 			 		</div>  <!-- het motmon -->
					<?php endforeach ?>

					<?php foreach ($productLau as $value): ?>
 			 		<div class="col-xs-12 col-sm-6 col-md-4   motmon trua">
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