<?php

$db_host = 'localhost';//設定主機位置
$db_name = 'proj54';//資料庫名稱
$db_user = 'nancyyao';//資料庫帳號
$db_pass = 'nancyyao';//資料庫密碼

$dsn=  sprintf('mysql:host=%s;dbname=%s;charset=utf8', $db_host, $db_name);//把上面設定好的主機位置&資料庫名稱塞進去

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
];//資料庫相關連線設定

try {
    $pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);
} catch(PDOException $ex){
    echo 'Ex:'. $ex->getMessage();
}

if(! isset($_SESSION)){
    session_start();
}