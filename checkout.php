<?php 
	include 'header.php';

	// var_dump($cart);
	// die();
	
	foreach ($cart as $value) {
		$users_id = $value['id'] ;
		$quantity = $value['quantity'];

	}

	$total = tongtien($cart);

	if(isset($_POST['check'])){
		// var_dump($conn);
	 //         die();
		$sql = mysqli_query($conn,"INSERT INTO `order_detail`( `users_id`, `total`, `status`) VALUES ('$users_id','$total','5')");
	// var_dump($sql);
	//          die();
		
		$id_order = mysqli_insert_id($conn);
		
		
		
			// var_dump($quantity); die();
			$id_pro = $user['id'];
			
			// $quantity = $value['quantity'];
			$sql2 = mysqli_query($conn,"INSERT INTO order_detail2(order_id,product_id,quantity) VALUES ('$id_order','$id_pro','$quantity')");
		
		unset($_SESSION['cart']);
		echo "<script>window.location='./index.php'</script>";
	}
	

 ?>
	<div class="container">
		<?php if($cart == '') :?>
			<div class="alert alert-warning">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<strong>Vui long đăng nhập để mua hàng</strong> <a href="login.php" title="" class="btn btn-success">Đăng nhập</a>
				</div>
		<?php else: ?>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title">Thông tin đặt hàng</h3>
					</div>
					<form action="" method="POST" class="form" role="form">
				
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						Người đặt hàng:
						<input type="text" class="form-control" id="" placeholder="Người đặt hàng" name="name" value="<?= $user['name']?>">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						Địa chỉ nhận:
						<input type="text" class="form-control" id="" placeholder="Địa chỉ nhận" name="address"  value="<?=$user['address']?>">
					</div>
					<div class="form-group">
						<label class="sr-only" for="">label</label>
						Số điện thoại:
						<input type="text" class="form-control" id="" placeholder="SDT" name="phone" value="<?= $user['phone']?>">
					</div>
				
					<button type="submit" class="btn btn-primary" name="check">Thanh toán</button>
				</form>
				</div>
			</div>
			<div class="col-md-8">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>MA SP</th>
								<th>Tên sản phẩm<h>
								<th>Ảnh<h>
								<th>Giá<h>
								<th>số lượng</th>
								<th>Thành tiền<h>
								
							</tr>
						</thead>
						<tbody>
						
							<?php foreach ($cart as $value) :?>
							<tr>
								<td><?php echo $value['id'] ?></td>
								<td><?php echo $value['name'] ?></td>
								<td><img src="<?php echo 'admin3/uploads/product/'. $value['image'] ?>" alt="" width = "50px"></td>
								<td><?php echo number_format($value['price']) ; ?>.vnđ</td>
								<td><?php echo $value['quantity'] ; ?></td>
								<td><?php echo $value['price'] * $value['quantity'] ; ?>.vnđ</td>
								
							</tr>
						<?php endforeach ?>
						<tr>
							<td>Tổng tiền</td>
							<td><?php echo tongtien($cart) ?>.vnđ</td>
							
						</tr>
						</tbody>
					</table>
					
				</div>
			</div>

			
		</div>
	<?php endif ?>
	</div>
 <?php 
 include 'footer.php';

  ?>
  