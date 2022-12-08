<?php
include './upload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file_upload">
        <input type="radio" name="check">
        <input type="submit"></input>
    </form>
    <div>
        <img src='./image/<?php echo $fileName ?>' alt="lag">
    </div>
</body>

</html>