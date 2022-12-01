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
    <form action="" method="post">
        <div class=wrapper>
            <div class="container">
                <div class="box_username">
                    <label class="title">Tên : <span class="star">*</span></label>
                    <br>
                    <input type=" text" name="username" id="username">
                    <br>
                    <span class="text_error"><?php echo $error_username; ?></span>
                    <br>
                </div>
                <div>
                    <label class="title">Tuổi : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="age" id="age">
                    <br>
                    <span class="text_error"><?php echo $error_age; ?></span>
                    <br>

                </div>
                <div>
                    <label class="title">Địa chỉ : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="address" id="address">
                    <br>
                    <span class="text_error"><?php echo $error_address; ?></span>

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
                <div>
                    <label class="title">Nghề nghiệp : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="job">
                    <br>
                    <span class="text_error"><?php echo $error_job; ?></span>

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
                <div>
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
</body>

</html>