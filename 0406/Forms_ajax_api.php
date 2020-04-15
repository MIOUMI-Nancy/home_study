<?php
$a = isset($_POST['a']) ? intval($_POST['a']) : 0 ;
$b = isset($_POST['b']) ? intval($_POST['b']) : 0;

//要回傳的值 

$output = [
    'a' => $a,
    'b' => $b,
    'c' => $a + $b,
];

echo json_encode($output);

//json_encode() 轉換成json的字串
//json_decode() json字串轉回物件
