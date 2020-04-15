<?php

/*
 * 新增, 修改, 移除
 */

session_start();

if (!isset($_SESSION['car'])) {
    $_SESSION['car'] = [];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : '';
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : '';

if (!empty('$sid')) {
    // TODO: 判斷車裡有沒有那個商品
    if (!empty('$qty')) {
        //有$SID又有提供$QTY(數量)>>>>修改或新增
        $_SESSION['cart'][$sid] = $qty;
    }else{
        unset($_SESSION['cart'][$sid]);
    }
    
}
header('Content-Type: application/json');
echo json_encode($_SESSION['cart']);