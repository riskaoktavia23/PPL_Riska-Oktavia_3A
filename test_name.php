<?php
//File: test_age.php
require_once "validator.php";

//Test Case 1: nama valid
try {
    $result =validateName("Riska Oktavia");
    echo "PASS : Nama Riska Oktavia diterima\n";
}catch(Exception $e){
    echo "FAIL : Nama Riska Oktavia. Error: " . $e->getMessage() . "\n";
}

//Test Case 2: nama angka
try {
    $result =validateAge("Riska321");
    echo "FAIL : Nama Riska321 seharusnya ditolak\n";
}catch(Exception $e){
    echo "PASS : Nama Riska321 ditolak. Error: " . $e->getMessage() . "\n";
}

//Test Case 3: nama kosong
try {
    $result =validateAge(" ");
    echo "FAIL : Nama seharusnya ditolak\n";
}catch(Exception $e){

    echo "PASS : Nama tidak boleh kosong. Error: " . $e->getMessage() . "\n";
}