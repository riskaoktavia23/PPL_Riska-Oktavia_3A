<?php
// File: Validator.php
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new InvalidArgumentException("Umur harus berupa angka");
    }
    if ($age < 0) {
        throw new InvalidArgumentException("Umur tidak boleh negatif");
    }
    return true;
}

function validateName($name) {
    if (empty(trim($name))) { 
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama hsrud berupa huruf");
    }
    return true;
}