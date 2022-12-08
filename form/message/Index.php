<?php
include './MessageSubmit.php';
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
    <header class="header_message">
        <a href="../login/Logout.php">Đăng xuất</a>
    </header>
    <?php if (count($data) > 0) {
    ?>
        <div class="messages_sent" style="width:50%;margin:40px auto;height:50%;overflow:auto;border: 1px solid #DDD;display:block;">
            <h2 style="text-align:center">Các tin nhắn đã gửi</h2>
            <div style="width: 100%;padding-left: 10px;height: 50px">
                <?php
                foreach ($data as $item) {
                    echo "
                    <div style='display:flex;'>
                        <img src='./image/$item[image]' style='width: 50px; height: 50px; border: 1px solid #DDD; border-radius:50%; '>
                        <div style='background-color: #fff; border-radius:5px;margin-left:20px;padding: 10px'>
                            <p style='margin:0;font-weight:bold'>$item[hoten]</p style='margin:0;'>
                            <p style='margin:0;'>$item[content]</p>
                        </div>
                    </div>" . "<br/>
                    ";
                }
                ?>
            </div>
        </div>
    <?php } ?>
    <form action="" method="post" enctype="multipart/form-data">
        <div class=wrapper>
            <div class="container">
                <div>
                    <label class=" title">Nội dung tin nhắn : </label>
                    <br>
                    <textarea name="message" id="message" style="width:90%;margin-left:20px;margin-top:10px;height:70px"></textarea>
                    <div class="text_error" style="margin-bottom:10px"><?php echo $errorMessage; ?></div>
                    <br>
                </div>
                <div class="box_username">
                    <input type="file" name="file_upload">
                    <div class="text_error" style="margin-bottom:10px"><?php echo $errorFile; ?></div>

                </div>
                <input type="submit"></input>
            </div>
        </div>
    </form>

</body>

</html>