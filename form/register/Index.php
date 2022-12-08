<?php
include './RegisterSubmit.php';
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
    <div class=wrapper>
        <div class="container">
            <form action="" method="post" enctype="multipart/form-data">
                <h1 style="text-align:center">Form Đăng Kí</h1>
                <div class="box_username">
                    <label class="title">Tên : <span class="star">*</span></label>
                    <br>
                    <input type=" text" name="name" id="name">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorName; ?></div>
                    <br>
                </div>
                <div class="box_username">
                    <label class="title">Username : <span class="star">*</span></label>
                    <br>
                    <input type=" text" name="username" id="username">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorUsername; ?></div>
                    <br>
                </div>
                <div class="box_username">
                    <label class="title">Password : <span class="star">*</span></label>
                    <br>
                    <input type=" text" name="password" id="password">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorPassword; ?></div>
                    <br>
                </div>
                <div style="margin-top:-20px">
                    <label class="title">Tuổi : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="age" id="age">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorAge; ?></div>
                    <br>
                </div>
                <div>
                    <label class="title">Địa chỉ : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="address" id="address">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorAddress; ?></div>
                    <br>
                </div>
                <div>
                    <label class="title">Nghề nghiệp : <span class="star">*</span></label>
                    <br>
                    <input type="text" name="job">
                    <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorJob; ?></div>
                    <br>
                </div>
                <div style="display: flex;margin-left:22px;margin-top:-30px;">
                    <span style="margin-top:15px;margin-right:25px">Giới tính : <span class="star">*</span></span>
                    <div style="display: flex;align-items:center;justify-content: center;">
                        <label for="male" style="margin-bottom:10px">Nam</label>
                        <input type="radio" name="gender" id="male" value="nam">

                    </div>
                    <div style="display:flex;align-items: center;justify-content: center;">
                        <label for="female" style="margin-bottom:10px">Nữ</label>
                        <input type="radio" name="gender" id="female" value="nữ">
                    </div>
                </div>
                <div class="text_error" style="margin-top:-10px;margin-bottom:10px"><?php echo $errorGender; ?></div>
                <div>
                    <label class=" title">Giới thiệu bản thân : <span class="star">*</span></label>
                    <br>
                    <textarea name="description" id="description" style="width:90%;margin-left:20px;margin-top:10px;height:70px"></textarea>
                    <div class="text_error" style="margin-top:10px;margin-bottom:10px"><?php echo $errorDescription; ?></div>
                    <br>
                </div>
                <div>
                    <input type="file" name="file_upload_avatar" id="file_upload">
                    <span class=" text_error" style="margin-top:10px;margin-bottom:10px"><?php echo $errorFile; ?></span>
                </div>
                <input type="submit"></input>
            </form>
            <a href="../login/Index.php">Quay trở lại Đăng Nhập</a>
        </div>
    </div>
</body>

</html>