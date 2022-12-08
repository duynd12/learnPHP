<?php
// $fileName = $_FILES['file']['name'];
$sizeMax = 5242880;
$arrayTypeFile = ["png", "jpg"];
$flag = True;

if (isset($_FILES['file_upload'])) {

    $fileName = basename($_FILES["file_upload"]['name']);

    $size = $_FILES['file_upload']['size'];
    $array = explode("/", $_FILES['file_upload']['type']);

    $lengthArray = count($array);
    $typeName = $array[$lengthArray - 1];

    if (!in_array($typeName, $arrayTypeFile)) {
        echo "Chỉ được upload các định dạng JPG, PNG";
        $flag = false;
    }
    if ($flag) {
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], 'image/' . $fileName)) {
            echo "File " . $fileName . " Đã upload thành công.";
        } else {
            echo "Có lỗi xảy ra khi upload file.";
        }
    }
    if ($size > $sizeMax) {
        echo "File không được vượt quá 5 MB";
    }
}
