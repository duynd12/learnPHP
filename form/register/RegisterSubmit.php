<?php
require '../Query.php';

$isError = 0;
$errorName = $errorAge = $errorAddress = $errorJob = $errorDescription = $errorGender = $errorPassword = $errorUsername = $errorFile = "";

if (
    isset($_POST['name']) || isset($_POST['age']) || isset($_POST['address'])
    || isset($_POST['job']) || isset($_POST['description'])
    || isset($_POST['gender']) || isset($_POST['username']) || isset($_POST['password']) || isset($_POST['file_upload_avatar'])
) {

    $hoten = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $job = $_POST['job'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $description = $_POST['description'];

    $fileName = basename($_FILES["file_upload_avatar"]['name']);


    if ($hoten == "") {
        $errorName = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($username == "") {
        $errorUsername = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($password == "") {
        $errorPassword = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($age == "") {
        $errorAge = "Vui lòng không được để trống";
        $isError = 1;
    } else if (0 >= (int)$age || (int)$age >= 101) {
        $errorAge = "Vui lòng nhập số tuổi hợp lệ";
        $isError = 1;
    }
    if ($address == "") {
        $errorAddress = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($job == "") {
        $errorJob = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($description == "") {
        $errorDescription = "Vui lòng không được để trống";
        $isError = 1;
    }
    if (empty($_POST['gender'])) {
        $errorGender = "Vui lòng chọn giới tính";
        $is_error = 1;
    }
    if ($fileName == null) {
        $errorFile = "Vui lòng chọn file";
        $is_error = 1;
    }
    if ($isError !== 1) {
        $queryData = new QueryData();
        $date  = date('Y-m-d');

        $dataArray = array(
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'age' => $age,
            'address' => $address,
            'job' => $job,
            'gender' => $_POST['gender'],
            'description' => $description,
            'image' => $fileName,
            'date' => $date,
            'hoten' => $hoten
        );

        if ($queryData->GetUserName($username) >= 1) {
            echo '<script>alert("Đã trùng tên username")</script>';
        } else {
            $result = $queryData->Register($dataArray);
            if ($result) {
                echo '<script>alert("Đăng kí thành công")</script>';
                move_uploaded_file($_FILES['file_upload_avatar']['tmp_name'], '../message/image/' . $fileName);
                header('Location:../login/Index.php');
            } else {
                echo '<script>alert("Đăng kí thất bại")</script>';
            }
        }
    }
}
