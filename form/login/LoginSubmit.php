<?php
Session_start();
require '../Query.php';
$isError = 0;
$errorUsername = $errorPassword = "";
if (isset($_COOKIE['username'])) {
    header('Location:./Test.php');
}
if (isset($_POST['username']) || isset($_POST['age'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];


    if ($username == "") {
        $errorUsername = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($password == "") {
        $errorPassword = "Vui lòng không được để trống";
        $isError = 1;
    }
    if ($isError !== 1) {
        $queryData = new QueryData();
        if (isset($_POST['save'])) {
            $queryData->GetUser($username, $password, 'cookie');
        } else {
            $queryData->GetUser($username, $password, 'session');
        }
    }
}
