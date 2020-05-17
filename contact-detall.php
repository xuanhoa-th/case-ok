<?php include "header.php";

if(isset($_POST['name'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	
	$address = $_POST['address'];
	$note = $_POST['note'];
	$a  = NULL;
	// var_dump($name);
	// die();
	$contact =  mysqli_query($conn,"INSERT INTO `orders`(`id`, `name`, `email`, `phone`, `address`, `number`, `note`, `total_price`, `created_at`, `updated_at`) VALUES ('$a','$name','$email','$phone','$address','$a','$note','$a','$a','$a')");
	var_dump($contact);
	die();
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
 						<h2 class="fontoswarld">Xem lai thong tin</h2>
 						 
 					</div>
 					<form method="post">
 					<div class="khoiform">
 						<div class="row">
 							
 								<div class="col-sm-6 ">
 								<input type="text" class="form-control formtext" placeholder="Họ và tên" name="name">
 							</div>
 							<div class="col-sm-6">
 								<input type="email" class="form-control formtext" placeholder="Email" name="email">
 							</div>
 							<div class="col-sm-6">
 								<input type="number" class="form-control formtext" placeholder="Số điện thoại" name="phone">
 							</div>
 							<div class="col-sm-6">
 								<input type="number" class="form-control formtext" placeholder="Số lượng người" name="number">
 							</div>
 							<div class="col-sm-6">
 								<input type="text" class="form-control formtext" placeholder="Địa chỉ" name="address">
 							</div>
 							<div class="col-sm-12">
 								<textarea name="note" class="form-control formcomment" ></textarea>
 							</div>


 							<div class="col-sm-12">
 								<button type="submit" class="btn btn-block btn-primary">Gửi tin nhắn</button>
 							</div>

 							
 						</div>
 					</div>
 					</form>
 					
 				
 				</div>
 			</div>
 		</div>
 	</div>





<?php include "footer.php"; ?>


</body>
</html>