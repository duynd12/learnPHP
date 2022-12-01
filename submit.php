<?php
include './regexName.php';
include './const.php';
$s = "";
$array = array();
if (isset($_POST['username']) || isset($_POST['age']) || isset($_POST['address']) || isset($_POST['numberphone']) || isset($_POST['job']) || isset($_POST['email']) || isset($_POST['password'])) {

    $username = $_POST['username'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $numberphone = $_POST['numberphone'];
    $job = $_POST['job'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($username == "") {
        $error_username = "Vui lòng không được để trống";
    }
    if ($age == "") {
        $error_age = "Vui lòng không được để trống";
    } else if (is_numeric($age) || (0 >= (int)$age || (int)$age >= 101)) {
        $error_age = "Vui lòng nhập số tuổi hợp lệ";
    }
    if ($address == "") {
        $error_address = "Vui lòng không được để trống";
    }
    if ($numberphone == "") {
        $error_numberphone = "Vui lòng không được để trống";
    } else if (!check_regexEmail($regexPhoneNumber, $numberphone)) {
        $error_numberphone = "Số điện thoại không đúng định dạng";
    }
    if ($job == "") {
        $error_job = "Vui lòng không được để trống";
    }
    if ($email == "") {
        $error_email = "Vui lòng không được để trống";
    } else if (!check_regexEmail($regexEmail, $email)) {
        $error_email = "Sai định dạng email";
    }
    if ($password == "") {
        $error_password = "Vui lòng không được để trống";
    } else if (!check_regexEmail($regexPassword, $password)) {
        $error_password = "Mật khẩu không hợp lệ";
    }

    echo "Tên : " . $username . "<br/>";
    echo "Tuổi : " . $age . "<br/>";
    echo "Địa chỉ : " . $address . "<br/>";
    echo "Số điện thoại : " . $numberphone . "<br/>";
    echo "Nghề Nghiệp : " . $job . "<br/>";
    echo "Email : " . $email . "<br/>";

    for ($i = 0; $i < strlen($password); $i++) {
        $array[$i] = '* ';
    }
    echo "Mật khẩu : " . implode(" ", $array);
}
