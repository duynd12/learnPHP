<?php
require '../Query.php';
session_start();
$queryData = new QueryData();
$data = $queryData->getData();

$flag = 0;
$errorMessage = $errorFile = "";

if (!isset($_SESSION['username'])) {
    header('Location:../login/Index.php');
}

function CheckExistsSession()
{
    global $queryData;
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $id = $queryData->GetIdUser($username);
        print_r($id);
        return $id[0]['id'];
    }
}

if (isset($_POST['message']) || isset($_POST['file_upload'])) {
    $content = $_POST['message'];
    $fileName = basename($_FILES["file_upload"]['name']);

    if ($content == "") {
        $errorMessage =  "Vui lòng không được để trống";
        $flag = 1;
    }
    if ($fileName == null) {
        $errorFile = "Vui long chon anh";
        $flag = 1;
    }
    if ($flag !== 1) {

        $date  = date('Y-m-d');
        $resultId = CheckExistsSession();
        $result = $queryData->SendMessage($resultId, $content, $fileName, $date);
        if ($result) {
            $data = $queryData->GetData();
            echo "Thanh cong";
        } else {
            echo " that bai";
        }
    }
}
