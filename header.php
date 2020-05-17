
 <?php 

$conn = mysqli_connect('localhost','root','','tasaki');
mysqli_set_charset($conn,"utf-8");
// var_dump($conn);
session_start();

if (isset($_SESSION['islogin'])) {
	$user = $_SESSION['islogin'];
}
// var_dump($_SESSION['islogin']);
// die();

$cart = (isset($_SESSION['cart']))? $_SESSION['cart'] : [];
function total($cart){
    $total = 0;
    foreach ($cart as $value) {
        $total = $total + $value['quantity'];

    }
    return $total;
 }

 function tongtien($cart){
        $sum = 0;
        foreach ($cart as $value) {
            $sum = $sum + $value['quantity'] * $value['price'];
        }
        return $sum;
};


 ?>

<!DOCTYPE html>
<html lang="en"><head>
	<title> Tasaki  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
 	<script type="text/javascript" src="vendor/imagesloaded.pkgd.min.js"></script>
 	<script type="text/javascript" src="1.js"></script>
 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="1.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="vendor/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="vendor/chosen.css">
    <link rel="stylesheet" type="text/css" href="vendor/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="vendor/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">
 </head>
<body >	
	
 	<div class="topheader">
 		<div class="container">
 			<div class="row">
 				<div class="col-sm-6 wow jello">
 					<div class="mangxh float-sm-left text-xs-center text-sm-left">
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-google-plus"></i></a>
 					 </div>
 					<div class="datban">
 						Gọi để đặt bàn: +84 29 345 678
 					 </div>
 				</div>
 				<div class="col-sm-6 ">
 					<div class="datban openingtop float-sm-right text-sm-left text-xs-center">
 						Mở cửa : 9:00am - 10:00pm
 					</div>
 				</div>
 			</div> <!-- het row -->
 		</div> <!-- het container -->
 	</div> <!-- het topheader  -->
 	<div class="logovamenu">
	    <nav class="navbar navbar-light  fontroboto">
	    	<div class="container">    	
			      <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtren">
			       
			      </button>
			      <div class="collapse navbar-toggleable-xs" id="mtren">
			        <a class="navbar-brand text-xs-center text-sm-left" href="index.php"><img src="images/banner/logo1.png" alt=""></a>

			        <ul class="nav navbar-nav float-sm-right">
			          <li class="nav-item active">
			            <a class="nav-link" href="index.php">Trang chủ</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="about.php">Giới thiệu</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="news.php">Tin Tức</a>
			          </li>
			          <li class="nav-item">
			            <a class="nav-link" href="thucdon.php">Thực Đơn</a>
			          </li>
			          <li class="nav-item  ">
			            <a class="nav-link" href="shopping-cart.php" style="font-size: 1.5em;"><i  title="Giỏ hàng" class="fa fa-shopping-bag"></i><span id = "total" style="position: absolute;padding: 11px 2px;font-size: 13px;color: #ff8d00;"><?php echo total($cart); ?></span></a>
			          </li>
			         <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 1.3em">
				         <i  class="fa fa-user"></i>
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<?php if (isset($user)) { ?>
								<a class="dropdown-item" href="#"><?php echo $user["name"] ?></a>
								<a class="dropdown-item" href="logout.php">Đăng xuất</a>
								<a class="dropdown-item" href="#">Hồ sơ</a>

							<?php } else { ?>
								
							    <a class="dropdown-item" href="login.php">Đăng nhập</a>
							<?php } ?>
				        	
							 
				        </div>
				      </li>
			          
			         <li class="nav-item datbanmenu">
			            <a class="nav-link btn btn-warning wow bounce" data-wow-iteration="3" href="contact.php" >Đặt bàn</a>
			          </li>
			        </ul>
			      </div>
	      </div> <!-- het container -->
	    </nav>
 	</div> <!-- het logo va menu -->