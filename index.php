<?php
include './submit.php';
?>

<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php if ($isDisplay) { ?>
        <form action="" method="post">
            <div class=wrapper>
                <div class="container">
                    <div class="box_username">
                        <label class="title">Tên : <span class="star">*</span></label>
                        <br>
                        <input type=" text" name="username" id="username">
                        <br>
                        <div class="text_error"><?php echo $error_username; ?></div>
                        <br>
                    </div>
                    <div style="margin-top:-20px">
                        <label class="title">Tuổi :</label>
                        <br>
                        <input type="text" name="age" id="age">
                        <br>
                    </div>
                    <div>
                        <label class="title">Địa chỉ :</label>
                        <br>
                        <input type="text" name="address" id="address">
                        <br>
                    </div>
                    <div>
                        <label class="title">Số điện thoại : <span class="star">*</span></label>
                        <br>
                        <input type="text" name="numberphone">
                        <br>
                        <span class="text_error"><?php echo $error_numberphone; ?></span>

                        <br>
                    </div>
                    <div style="margin-top:-20px">
                        <label class="title">Nghề nghiệp :</label>
                        <br>
                        <input type="text" name="job">
                        <br>
                    </div>
                    <div>
                        <label class="title">Email : <span class="star">*</span></label>
                        <br>
                        <input type="text" name="email">
                        <br>
                        <span class="text_error"><?php echo $error_email; ?></span>

                        <br>
                    </div>
                    <div style="margin-top:-20px">
                        <label class="title">Password : <span class="star">*</span></label>
                        <br>
                        <input type="text" name="password">
                        <br>
                        <span class="text_error"><?php echo $error_password; ?></span>

                        <br>
                    </div>
                    <input type="submit"></input>
                </div>
            </div>
        </form>
    <?php } else { ?>
        <div class="info">
            <h1>Thông tin người dùng</h1>
            <div class="info_name">
                Tên : <h3><?php echo $username; ?></h3>
            </div>
            <div class="info_name">
                Tuổi : <h3><?php echo $age; ?></h3>
            </div>
            <div class="info_name">
                Địa chỉ : <h3><?php echo $address; ?></h3>
            </div>
            <div class="info_name">
                Số Điện Thoại : <h3><?php echo $numberphone; ?></h3>
            </div>
            <div class="info_name">
                Nghề Nghiệp : <h3><?php echo $job; ?></h3>
            </div>
            <div class="info_name">
                Email : <h3><?php echo $email; ?></h3>
            </div>
            <div class="info_name">
                Mật khẩu : <h3><?php echo $password; ?></h3>
            </div>
        </div>
    <?php } ?>
</body>

</html>