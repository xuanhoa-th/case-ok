<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Đăng ký thành viên mới</div>
            <form action="" method="post" enctype="form-data">
                <div class="body bg-gray">
                    <?php
                                if(isset($alert)){
                                    echo "<p class='alert-info'>$alert</p>"; 
                                }
                                ?>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full name"/>
                    </div>
                    <!-- <div class="form-group">
                        <input type="file" name="image" class="form-control" placeholder="Full name"/>
                    </div> -->
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Số điện thoại"/>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                     <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Địa chỉ"/>
                    </div>
                    <!-- <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password"/>
                    </div> -->
                </div>
                <div class="footer">                    

                    <button type="submit" class="btn bg-olive btn-block">Đăng ký cho tôi</button>

                    <a href="<?php echo 'index.php?page=login' ?>" class="text-center">Tôi đã có thành viên</a>
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
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>