<?php
include './LoginSubmit.php';
?>

<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div style="margin:10% auto;">
        <div class=wrapper>
            <div class="container">
                <form action="" method="post" enctype="multipart/form-data">
                    <h1 style="text-align:center">Đăng Nhập</h1>
                    <div class="box_username">
                        <label class="title">Username :</label>
                        <br>
                        <input type=" text" name="username" id="username">
                        <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorUsername; ?></div>
                        <br>
                    </div>
                    <div style="margin-top:-20px">
                        <label class="title">Password :</label>
                        <br>
                        <input type="text" name="password" id="password">
                        <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorPassword; ?></div>
                        <br>
                    </div>
                    <input type="checkbox" style="margin: 0 5px 0 20px;width:15px;height:15px;" name="save">Lưu thông tin đăng nhập

                    <input type="submit" style="width:65%"></input>
                </form>
                <a href="../register/Index.php" style="margin-right:10px;float:right;margin-top:-60px">Chưa có tài khoản</a>
            </div>
        </div>
    </div>
</body>

</html>