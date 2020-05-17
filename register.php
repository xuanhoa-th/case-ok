<?php 
session_start();
$conn = mysqli_connect('localhost','root','','tasaki');
mysqli_set_charset($conn,"utf-8");
$error = [];
if (isset($_POST['name'])) {
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $status = $_POST['status'];

    if ($name == '') {
        $error['name'] = " *Tên không được để rỗng";
    }
    if ($phone == '') {
        $error['phone'] = "*Số điện thoại không được để rỗng";
    }
     if ($email == '') {
        $error['email'] = "*Email không được để rỗng";
    }
     if ($password == '') {
        $error['password'] = "*Mật khẩu không được để rỗng";
    }
     if ($address == '') {
        $error['address'] = "*Địa chỉ không được để rỗng";
    }

    if (empty($error)) {
        $register = mysqli_query($conn, "INSERT INTO users(name,phone,email,password,address,status) VALUES ('$name','$phone','$email','$password','$address','$status')");

        if ($register) {
            header("location: login.php");
            
        }
    }

    
}


 ?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="admin3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="admin3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="admin3/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Đăng ký thành viên</div>
            <form action="" method="post" enctype="form-data">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full name"/>
                        <?php if (!empty($error['name'])) {?>
                        <div class="help-block">
                          <span style="color: red;"><?php echo $error['name'] ?></span> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại"/>
                        <?php if (!empty($error['phone'])) {?>
                        <div class="help-block">
                           <span style="color: red;"><?php echo $error['phone'] ?></span> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email"/>
                        <?php if (!empty($error['email'])) {?>
                        <div class="help-block">
                           <span style="color: red;"><?php echo $error['email'] ?></span> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                         <?php if (!empty($error['password'])) {?>
                        <div class="help-block">
                           <span style="color: red;"><?php echo $error['password'] ?></span> 
                        </div>
                        <?php } ?>
                    </div>
                     <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ"/>
                         <?php if (!empty($error['address'])) {?>
                        <div class="help-block">
                           <span style="color: red;"><?php echo $error['address'] ?></span> 
                        </div>
                        <?php } ?>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="status" class="form-control" value="1" />

                    </div>
                </div>
                <div class="footer">                    
                    <button type="submit" class="btn bg-olive btn-block">Đăng ký</button>
                </div>
                <div class="footer">                    
                    <button type="" class="btn btn-danger"><a href="index.php" style="color: white;">Cancel</a></button>
                </div>
            </form>

            <div class="margin text-center">
                <span>Đăng ký sử dụng mạng xã hội</span>
                <br/>
                <button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>
                <button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>
                <button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="admin3/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>