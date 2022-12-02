<?php
include './regexName.php';
include './const.php';
$array = array();
$isDisplay = True;
$convertString = '';
$count = 0;
$logCount;
$countReal = 0;
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
    } else if (!check_regex($regexName, $username)) {
        $error_username = "Sai định dạng tên";
    }
    // if ((0 >= (int)$age || (int)$age >= 101)) {
    //     $error_age = "Vui lòng nhập số tuổi hợp lệ";
    // }
    if ($numberphone == "") {
        $error_numberphone = "Vui lòng không được để trống";
    } else if (!check_regex($regexPhoneNumber, $numberphone)) {
        $error_numberphone = "Số điện thoại không đúng định dạng";
    }
    if ($email == "") {
        $error_email = "Vui lòng không được để trống";
    } else if (!check_regex($regexEmail, $email)) {
        $error_email = "Sai định dạng email";
    }
    if ($password == "") {
        $error_password = "Vui lòng không được để trống";
    } else if (!check_regex($regexPassword, $password)) {
        $error_password = "Mật khẩu không hợp lệ";
    }

    for ($i = 0; $i < strlen($password); $i++) {
        $array[$i] = '* ';
    }
    $convertString = implode(" ", $array);
    if (
        !empty($password) && check_regex($regexPassword, $password) && !empty($numberphone) && !empty($email) && !empty($username) && check_regex($regexEmail, $email)
        && check_regex($regexPhoneNumber, $numberphone) && check_regex($regexName, $username)
    ) {
        // $isDisplay = false;

        $file = fopen($numberphone . '.txt', 'w');
        $fileLogName = "log.txt";

        $nameFile = 'Tên : ' . $username;
        $numberphoneFile = 'Số điện thoại : ' . $numberphone;
        $addressFile = 'Địa chỉ : ' . $address;
        $ageFile = 'Tuổi : ' . $age;
        $emailFile = 'Email : ' . $email;
        $passwordFile = 'Mật khẩu : ' . $password;
        $jobFile = 'Nghề nghiêp : ' . $job;

        $content = "$nameFile\r$numberphoneFile\r$addressFile\r$ageFile\r$emailFile\r$passwordFile\r$jobFile";

        if (!file_exists($fileLogName)) {
            $fileLog = fopen($fileLogName, 'w+');
            fwrite($fileLog, '1');
        } else {
            $fileReadLog = fopen("log.txt", 'r+');
            $data = fread($fileReadLog, filesize("log.txt"));
            $data = ++$data;
            $fileNewLog = fopen("log.txt", 'w');
            fwrite($fileNewLog, $data);
            fclose($fileNewLog);
        }

        fwrite($file, $content);
        fclose($file);
    }
}
