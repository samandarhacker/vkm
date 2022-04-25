<?php

define("DB_SERVER", "localhost"); // Tegilmaydi
define("DB_USERNAME", "u6460_vkm"); // Mysql baza nomi
define("DB_PASSWORD", "samandar001@"); // Mysql baza paroli
define("DB_NAME", "u6460_vkm"); // Mysql baza nomi

$connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset($connect, "utf8mb4");
if($connect){
    echo "Ulandi";
}

