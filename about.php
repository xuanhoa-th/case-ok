<?php include "header.php";
$about = mysqli_query($conn,"SELECT * FROM about WHERE status = 0 ");
$about2 = mysqli_query($conn,"SELECT * FROM about WHERE status = 2 ");


 ?>
	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
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

	<div class="thongtin2about  wow fadeInUp">
		<div class="container">
			<div class="row">
				<?php foreach ($about as $value): ?>
					
				
				<div class="col-sm-6">
					<div class="khoi2dong"> 						
 						<span class="fontdancing">Món ăn mới tuyệt vời </span>
 						<h2 class="fontoswarld">Khám phá nhà hàng của chúng tôi</h2>
 						<p>
 							<?php echo $value['content']; ?>
 						</p>
 						<a href="" class="nutslide fontoswarld btn btn-warning"> Read More</a>
 					</div>
				</div>
				<div class="col-sm-5 push-sm-1">
					<img src="<?php echo 'admin3/uploads/about/'.$value['image']  ?>" alt="" class="img-fluid">
				</div>
				<?php endforeach ?>

			</div>
		</div>
	</div>  <!-- HET THONG TIN 2 ABOUT -->

	<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<span class="tieudephu fontdancing">Món ăn tươi và tốt cho sức khỏe.</span>
 						<h3 class="tieudechinh fontroboto">Ưu đãi tốt nhất từ ​​đầu bếp tại nhà.</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->

	<div class="badichvu badichvuabout">
 		<div class="container ">
 			<div class="row">
 				<div class="col-sm-12 text-xs-center">
 					<div class="tdtintuchome">
						<span class="fontdancing">Our Service</span>
						<h2 class="fontroboto">We Create Delicous Memory</h2>
					</div>
 				</div>
 				<?php foreach ($about2 as $value): ?>
 					
 				
 				<div class="col-sm-4 wow flipInY text-xs-center">
 					<a href=""><img src="<?php echo 'admin3/uploads/about/'.$value['image']  ?>" alt="" class="img-fluid"></a>
 					<h3><a href=""><?php echo $value['name'] ?></a></h3>
 					<p><?php echo $value['content'] ?></p>
 					<a href="" class="readmore vang">Read More</a>
 				</div>
 				<?php endforeach ?>
							
 			</div> <!-- het row -->
 		</div> <!--  het container -->
 	</div>  <!-- het badichvu -->


<div class="gioithieudaubep  wow fadeInUp daubepabout">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-4">
 					<img src="images/daubep.jpg" alt="" class="img-fluid">
 				</div>
 				<div class="col-sm-7 push-sm-1 ">
 					<div class="thongtin">
 						<?php foreach ($about as $value): ?>
 							
 						
 						<h2 class="fontoswarld"><?php echo $value['name']; ?></h2>
 						<span class="fontdancing">The Master of Cooking</span>
 						<p>
 							<?php echo $value['content'] ?>
 						</p>
 						<?php endforeach ?>
 					</div> <!-- het thong tin -->
 					<div class="daubepcontact">
 						<a href="" class="icondb"><i class="fa fa-facebook"></i></a>
 						<a href="" class="icondb"><i class="fa fa-vimeo"></i></a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div><!--  HET GIOI THIEU DAU BEP	 -->















	<?php include "footer.php"; ?>


</body>
</html>