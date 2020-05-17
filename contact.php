<?php include "header.php";

if(isset($_POST['name'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$address = $_POST['address'];
	$note = $_POST['note'];
	$a  = NULL;
	$contact =  mysqli_query($conn,"INSERT INTO `orders`(`id`, `name`, `email`, `phone`, `address`, `number`, `note`, `total_price`, `created_at`, `updated_at`) VALUES ('$a','$name','$email','$phone','$address','$a','$note','$a','$a','$a')");

	$message = "Đăng kí thành  công";
	
}

?>

<div class="gioithieudaubep  wow fadeInUp daubepcontact">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-4">
 					<img src="images/daubepcontact.jpg" alt="" class="img-fluid">
 				</div>
 				<div class="col-sm-7 push-sm-1 ">
 					 <div class="khoi2dong"> 						
 						<span class="fontdancing">Đặt bàn</span>
 						<h2 class="fontoswarld">Để lại thông tin ở đây</h2>
 						<?php
                                if(isset($message)){
                                    echo "<p class='alert-success' style='font-size: 20px' >$message</p>"; 
                                }
                             ?>
 						 
 					</div>
 					<form method="post"  >
 					<div class="khoiform">
 						<div class="row">
 							
 								<div class="col-sm-6 " >
 								<input type="text" class="form-control formtext" placeholder="Họ và tên" name="name">
 							</div>
 							<div class="col-sm-6">
 								<input type="email" class="form-control formtext" placeholder="Email" name="email">
 							</div>
 							<div class="col-sm-6">
 								<input type="number" class="form-control formtext" placeholder="Số điện thoại" name="phone">
 							</div>
 							
 							<div class="col-sm-6">
 								<input type="text" class="form-control formtext" placeholder="Địa chỉ" name="address">
 							</div>
 							<div class="col-sm-12">
 								<textarea name="note" class="form-control formcomment" ></textarea>
 							</div>

 							<!-- <div class="col-sm-6">
 								<input type="hidden" class="form-control formtext"  name="status" value="1">
 							</div> -->
							


 							<div class="col-sm-12">
 								<button type="submit" class="btn btn-block btn-primary">Gửi tin nhắn</button>
 							</div>

							<p>_</p>
 							
 						</div>
 					</div>
 					</form>
 					
 				
 				</div>
 			</div>
 		</div>
 	</div>

<div class="khoimenu wow fadeInUp bannerkieu2dong">  
 		<div class="tieudekhoimenu text-xs-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-sm-8 push-sm-2">
 						<span class="tieudephu fontdancing">Cảm ơn đã ghé thăm chúng tôi</span>
 						<h3 class="tieudechinh fontroboto">We Make Stay Fresh Food & Wounderful View</h3>
 					</div>
 				</div>
 			</div>
 			
 		</div>   <!-- HET TIEUDEKHOIMENU -->
 	</div>  <!-- HET KHOI MENU -->



<div class="tintuchome wow   " data-wow-delay="0s">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-xs-center wow  flipInY" data-wow-delay="0s">
					<div class="tdtintuchome">
						<span class="fontdancing">Liên lạc</span>
						<h2 class="fontroboto">Địa điểm của chúng tôi</h2>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">

					<div class="mottinchuan">
						<a href=""><img src="images/f1.jpg" alt=""></a>

						<div class="motdong">
							<i class="fa fa-paper-plane-o"></i>
							<span class="textmd">Address : 44 New Design Street,<br>
							Melbourne 005</span>
						</div>
						<div class="motdong">
								<i class="fa fa-phone"></i>
								<span class="textmd">Phone : (01) 800 433 633</span>
						</div>
						<div class="motdong">
								<i class="fa fa-envelope-o"></i>
								<span class="textmd">Email : info@Example.com</span>
						</div>
					
					 	
 
					</div>
				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-03.jpg" alt=""></a>
					 	
						<div class="motdong">
							<i class="fa fa-paper-plane-o"></i>
							<span class="textmd">Address : 44 New Design Street,<br>
							Melbourne 005</span>
						</div>
						<div class="motdong">
								<i class="fa fa-phone"></i>
								<span class="textmd">Phone : (01) 800 433 633</span>
						</div>
						<div class="motdong">
								<i class="fa fa-envelope-o"></i>
								<span class="textmd">Email : info@Example.com</span>
						</div>

						  
					</div> 

				</div> 
				<div class="col-md-4 col-sm-6 col-xs-12 wow  flipInY" data-wow-delay="0s">
					<div class="mottinchuan">

						<a href=""><img src="images/f1-02.jpg" alt=""></a>
						 
						<div class="motdong">
							<i class="fa fa-paper-plane-o"></i>
							<span class="textmd">Address : 44 New Design Street,<br>
							Melbourne 005</span>
						</div>
						<div class="motdong">
								<i class="fa fa-phone"></i>
								<span class="textmd">Phone : (01) 800 433 633</span>
						</div>
						<div class="motdong">
								<i class="fa fa-envelope-o"></i>
								<span class="textmd">Email : info@Example.com</span>
						</div>

						 
					</div>

				</div> 

			</div>
		</div>

	</div>  <!-- HET TIN TUC O TRANG HOME -->





<?php include "footer.php"; ?>


</body>
</html>