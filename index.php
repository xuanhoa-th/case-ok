<?php include "header.php";?>

<?php 
$about = mysqli_query($conn,"SELECT * FROM about WHERE status = 0 ");
$about2 = mysqli_query($conn,"SELECT * FROM about WHERE status = 2 ");
$category = mysqli_query($conn,"SELECT * FROM category ");
$product = mysqli_query($conn,"SELECT * FROM product LIMIT 5 ");
$productSushi = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 8 ");
$productCom = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 11 ");
$productLau = mysqli_query($conn,"SELECT * FROM product WHERE category_id = 12 ");

// if(isset($_GET['id'])){
// 		$id = $_GET['id'];
// 		$productss = mysqli_query($conn,"SELECT * FROM product ");
// 		$limit = 4;
// 		$total = mysqli_num_rows($productss);
// 		$page = ceil($total/$limit);
// 		(isset($_GET['page'])) ? $curent_page = $_GET['page']: $curent_page=1;
// 		$start = ($curent_page - 1)*$limit;
// 		$product = mysqli_query($conn,"SELECT * FROM product WHERE status = 1 LIMIT $start,$limit");
// 	}
// 	else{
// 		$limit = 4;
// 		$productss = mysqli_query($conn,"SELECT * FROM product WHERE status = 1");
// 		$total = mysqli_num_rows($productss);
// 		$page = ceil($total/$limit);
// 		(isset($_GET['page'])) ? $curent_page = $_GET['page']: $curent_page=1;
// 		$start = ($curent_page - 1)*$limit;
// 		$product = mysqli_query($conn,"SELECT * FROM product WHERE status = 1 LIMIT $start,$limit");

// 	}
// var_dump($product);
// die();


 ?>
 	
<div class="slide">
 	<div id="slidehome" class="carousel slide slidecon" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#slidehome" data-slide-to="0" class="active"></li>
				<li data-target="#slidehome" data-slide-to="1"></li>
				<li data-target="#slidehome" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
 							
 							<div class="chu">
 								
 							</div>
 							<img src="images/banner/Banner1.jpg" alt="">
 						</div>
 						<div class="carousel-item">
 							<div class="chu">
 								
 							</div>
 							<img src="images/banner/banner2.jpg" alt="">
 						</div>
 						<div class="carousel-item">
 							<div class="chu">
 								
 							</div>
 							<img src="images/banner/banner_3.jpg" alt="">
 						</div>
			</div>
			<a class="left carousel-control" href="#slidehome" role="button" data-slide="prev">
				<span class="icon-prev" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slidehome" role="button" data-slide="next">
				<span class="icon-next" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		 

 
 	</div> <!-- het slide  -->
 	<div class="badichvu">
 		<div class="container ">
 			<div class="row">
 				<div class="col-sm-4 wow flipInY" data-wow-delay="0.4s">
 					<a href=""><img src="images/banner/uu_dai_hom_nay_1.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>TẶNG 1000 SUẤT COMBO THỎA THÍCH 239K CHO NHÓM 4</p>
 					<a href="" class="readmore">Đọc thêm</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="1s">
 					<a href=""><img src="images/banner/uu_dai_hom_nay.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>THỨ 3 HẠNH PHÚC - GIẢM 15% CHO THẺ MEMBER REDSUN</p>
 					<a href="" class="readmore">Đọc thêm</a>
 				</div>
				<div class="col-sm-4 wow flipInY" data-wow-delay="1.5s">
 					<a href=""><img src="images/banner/uu_dai_hom_nay_2.jpg" alt="" class="img-fluid"></a>
 					<h3><a href="">Our Restaruant Story</a></h3>
 					<p>ƯU ĐÃI HẤP DẪN VỚI CHƯƠNG TRÌNH MUA 2 TẶNG 1 SET LUNCH</p>
 					<a href="" class="readmore">Đọc thêm</a>	
 				</div>				
 			</div> <!-- het row -->
 		</div> <!--  het container -->
 	</div>  <!-- het badichvu -->
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
 			 						<a href="detail.php?id=<?php echo $value['product_id']?>"><div class="tagnew">Xem</div></a>
 			 						<a href="" class="xemchitiet"><img src=" <?php echo 'admin3/uploads/product/'. $value['image']  ?> " alt="" class="img-fluid"></a>
 			 					</div>
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi">
 			 						<a href="action-cart.php?id=<?php echo $value['product_id']?>"><i title="Thêm vào giỏ hàng" class="fa fa-shopping-bag"></i></a>
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
 			 						<a href="detail.php?id=<?php echo $value['product_id']?>"><div class="tagnew">Xem</div></a>
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
 			 						<a href="action-cart.php?id=<?php echo $value['product_id']?>"><i title="Thêm vào giỏ hàng" class="fa fa-shopping-bag"></i></a>	
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
 			 						<a href="detail.php?id=<?php echo $value['product_id']?>"><div class="tagnew">Xem</div></a>
 			 						<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="img-fluid">
 			 					</div>

 			 					
 			 				</div>
 			 				<div class="col-xs-9 col-sm-8">
 			 					<div class="tenmon">
 			 						<div class="tren">
 			 							<span class="float-xs-right"><?php echo $value['price'] ?>.vnđ</span>
 			 							<b class="ten"><?php echo $value['name'] ?></b>
 			 						</div>
 			 						<div class="duoi" >
 			 							
 			 							<a href="action-cart.php?id=<?php echo $value['product_id']?>"><i title="Thêm vào giỏ hàng"  class="fa fa-shopping-bag"></i></a>
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
  	<div class="slidemonan  wow fadeInUp">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-12">
 					<h4>Món ăn đặc biệt</h4>
 				</div>
 			</div>

 			<div class="row">
 			<div class="col-sm-12">
 						<div id="slidemonanduoi" data-interval="3000" class="carousel slide" data-ride="carousel">
 							<ol class="carousel-indicators">
 								<li data-target="#slidemonanduoi" data-slide-to="0" class="active"></li>
 								<li data-target="#slidemonanduoi" data-slide-to="1"></li>
 								<li data-target="#slidemonanduoi" data-slide-to="3"></li>
 							</ol>
 							<div class="carousel-inner" role="listbox">
 								<div class="carousel-item active">
 									<div class="row">
 										<?php foreach ($product as $value): ?>
 										<div class="sanpham">
 											<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right"><?php echo $value['price'] ?>.vnđ</div>
 												<div class="ten"><?php echo $value['name'] ?></div>
 											</div>
 											<!-- <div class="tencongthuc">
 												Mussel with tomato sauce, wine
 											</div> -->
 										</div> <!-- SAN PHAM -->
 										<?php endforeach ?>

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->

 								<div class="carousel-item">
 									<div class="row">
 										<?php foreach ($product as $value): ?>
 										<div class="sanpham">
 											<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right"><?php echo $value['price'] ?>.vnđ</div>
 												<div class="ten"><?php echo $value['name'] ?></div>
 											</div>
 											
 										</div> <!-- SAN PHAM -->
 										<?php endforeach ?>

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->
 								<div class="carousel-item ">
 									<div class="row">
 										<?php foreach ($product as $value): ?>
 										<div class="sanpham">
 											<img src="<?php echo 'admin3/uploads/product/'. $value['image']  ?>" alt="" class="anhspslide">
 											<div class="tensp">
 												<div class="gia float-xs-right"><?php echo $value['price'] ?>.vnđ</div>
 												<div class="ten"><?php echo $value['name'] ?></div>
 											</div>
 											
 										</div> <!-- SAN PHAM -->
 										<?php endforeach ?>

 										
 									</div> <!-- het row -->

 								</div>  <!-- HET CAROUSEL ITEM -->
 								 
								
 								 
 							</div>
 							<a class="left carousel-control" href="#slidemonanduoi" role="button" data-slide="prev">
 								<span class="icon-prev" aria-hidden="true"></span>
 								<span class="sr-only">Previous</span>
 							</a>
 							<a class="right carousel-control" href="#slidemonanduoi" role="button" data-slide="next">
 								<span class="icon-next" aria-hidden="true"></span>
 								<span class="sr-only">Next</span>
 							</a>
 						</div>
 				</div> <!-- het colsm12 cu monan -->
 			</div>  <!-- HET ROW -->
 		</div> <!-- HET CONTAINER -->

 	</div>  <!-- HET SLIDE MON AN -->


 	<div class="gioithieudaubep  wow fadeInUp">
 		<div class="container">
 			<div class="row">
 				<?php foreach ($about as $value): ?>
 				<div class="col-sm-4">
 					<img src="<?php echo 'admin3/uploads/about/'.$value['image']  ?>" alt="" class="img-fluid">
 				</div>
 				<div class="col-sm-7 push-sm-1 ">
 					
 					<div class="thongtin">
 						<h2 class="fontoswarld"><?php echo $value['name'] ?></h2>
 						<span class="fontdancing">CHUYÊN GIA ẨM THỰC</span>
 						<p>
 							<?php echo $value['content'] ?>
 						</p>
 					</div> <!-- het thong tin -->
 					<?php endforeach ?>
 					<div class="daubepcontact">
 						<a href="" class="icondb"><i class="fa fa-facebook"></i></a>
 						<a href="" class="icondb"><i class="fa fa-vimeo"></i></a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div><!--  HET GIOI THIEU DAU BEP	 -->

	<div class="sloganhome wow fadeInUp">
		<div class="container text-xs-center">
		 	 <div class="row">
		 	 	<div class="col-sm-8 push-sm-2">
		 	 		<h3 class="fontdancing"> Enjoy Pleasant Pastime With Friends and Partners</h3>
					<span class="fontroboto">Relaxing Atmosphere</span>
		 	 	</div>
		 	 </div>
			
		</div>
	</div> <!-- het slogan home  -->

	<div class="khoidatban text-xs-center wow fadeInUp" data-wow-delay="0s">
		<div class="container">

		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="thongtindatban fontroboto">
					<h2 class="fontroboto">Sashimi - Ngôi vương của sự tinh khiết</h2>
					<p class="tt ">Sashimi mềm mềm, tươi ngon, béo ngậy, được xếp một cách đẹp mắt trên khay cùng với củ cải trắng bào sợi và lá tía tô tạo nên một tổng thể ẩm thực đầy tinh tế. Sushi Kei còn chạm tới vị giác của thực khách với các món xào, súp bổ dưỡng, salad,... đậm đà phong vị Nhật Bản.!!</p>
					<p class="giodb">Thứ 2 - 8 <span class="vang"> 9:00 am - 23:00 pm </span> Chủ nhật <span class="vang"> 10:00 am - 22:00 pm</span>
	Note: Nhà hàng đóng cửa vào các ngày lễ.</p>
					<div class="dtdb fontoswarld">+084 43351211</div>
				</div>
				

			</div>
			
		</div> <!-- het row -->
			
		</div><!--  het container -->
		
	</div>  <!-- HET DAT BAN -->

	<div class="phanhoinguoidung wow  fadeInUp" data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 push-sm-1 text-xs-center">
					<div id="slidetestimnial" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slidetestimnial" data-slide-to="0" class="active"></li>
							<li data-target="#slidetestimnial" data-slide-to="1"></li>
							<li data-target="#slidetestimnial" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<?php foreach ($about as $value): ?>
							<div class="carousel-item active">
							 	 <i class="fa fa-quote-right"></i>
							 	 <div class="quote">
							 	 	<?php echo $value['content'] ?>
							 	 </div>
							 	 <b class="fontdancing tennguoi"> <?php echo $value['name'] ?> </b>

							</div> 
							<?php endforeach ?>
							
						</div>
						 
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- HET PHAN HOI NGUOI DUNG -->

	<div class="tintuchome wow   " data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Blog</span>
						<h2 class="fontroboto">Cập nhật tin tức mới nhất</h2>
					</div>
				</div>
				<?php foreach ($about2 as $value): ?>
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">

					<div class="mottinchuan">
						<a href=""><img src="<?php echo 'admin3/uploads/about/'. $value['image']  ?>" alt=""></a>
						<a href="" class="tieudetin1 fontoswarld"><?php echo $value['name'] ?></a>
						<div class="ngaythang1">10 - 05 - 2020  by <span class="vang"> Tanaka</span></div>
						<p class="fontroboto"><?php echo $value['content'] ?></p>

						<div class="docthem mb-2">
							<div class="like float-xs-right fontroboto">10 like</div>
							<a href="" class="rm fontroboto">Read More</a>
						</div>
					</div>
				</div> 
				<?php endforeach ?>
				

			</div>
		</div>

	</div>  <!-- HET TIN TUC O TRANG HOME -->

	<?php include "footer.php"; ?>

</body>
</html>