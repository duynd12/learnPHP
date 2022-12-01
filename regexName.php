<?php
$error_username = $error_age = $error_email = $error_address = $error_job = $error_password = $error_numberphone = "";
$regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
$regexPhoneNumber = '/^[0-9]{10}+$/';
$regexName = '/^[A-Za-z]$/';
$regexPassword = '((?=.*[a-z])(?=.*d)(?=.*[@#$%])(?=.*[A-Z]).{8,10000})';
