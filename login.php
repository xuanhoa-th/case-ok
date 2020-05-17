<?php
session_start();
$conn = mysqli_connect('localhost','root','','tasaki');
mysqli_set_charset($conn,"utf-8");
$error = [];

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $loginObject = mysqli_query($conn, " SELECT * FROM users WHERE email = '$email' AND password = '$password' ");
    $loginArray = mysqli_fetch_assoc( $loginObject);

   if (isset($loginArray)) {
         $_SESSION['islogin'] = $loginArray;

         // var_dump( $_SESSION['islogin']); die();

        $messger = "Đăng  nhập  thành công";

        header("location: index.php");
       
   } else {
      $messger = "Mật khẩu hoặc tài khoản không  đúng";
   }
     
}


// if ($email == '') {
//         $error['email'] = "*Email không được để rỗng";
//     }
// if ($password == '') {
//         $error['password'] = "*Mật khẩu không được để rỗng";
//     }

?>

<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
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
            <div class="header">Đăng nhập</div>
            <form action="" method="post">
                <div class="body bg-gray">
                    <div class="form-group">
                        
                        <?php if (isset($messger)) {
                        echo $messger ;
                        }  ?>

                        <input type="text" name="email" class="form-control" placeholder="User name"/>
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
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Đăng nhập</button>
                    
                    <a href="register.php" class="text-center">Đăng ký</a>
                </div>
            </form>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="admin3/js/bootstrap.min.js" type="text/javascript"></script>        

    </body>
</html>