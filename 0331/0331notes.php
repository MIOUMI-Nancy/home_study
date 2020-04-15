<?php

//表單(input)送出是依照NAME的屬性   

$s = isset($_GET['s']) ? intval($_GET['s']) : 0;    


?>


<form action="" method="get">
    <input type="number" name="s" value="<?= $s ?>">
    <input type="submit">
</form>

<?php 
//for迴圈

//for ($k = 1; $k <= $a; $k++) {
//}

//也可寫成

//for ($k = 1; $k <= $a; $k++):
//endfor;


//索引式陣列
$CCCC  =array(1,2,3,'AAAAAA');
$DDD = [1,2,3];
$CCCC[] ='YYYYYYYYYY';//代表push(塞值)
$CCCC[0] ='0000';//[]有值代表替換掉第0個的值

print_r($CCCC);
?>
<br>

<?php
//foreach:將 $arl的每一個值，當作一個一個的$i這個東西，然後一個一個倒出來

$arl = array(1,2,3,'AAAAAA');
foreach( $arl as $i ){
    echo "$i <br>";
}


?>

<?php
//關聯式陣列 => 胖箭頭       //"->"瘦箭頭等於JS的"."(誰誰誰"的"啥啥啥啥)
//一個KEY  => 對應一個值

/*JS箭頭函式:
const func = (x) => x + 1
const func = function (x) { return x + 1 }
*/

//PHP字串一定要標''

$try = [
    'name'=> 'Nancy',
    'age'=> 18,
    'gender'=>' female',
];

foreach( $try as $i ){
    echo "$i <br>";
}//只取得值

foreach( $try as $k=>$i ){
    echo "$k = $i <br>";
}//取得KEY+值

//複製的部分 slice()是將內容一個一個切出來
//PHP的等號"=" 是將值複製一份給他不是參照(得到後就$A固定了)(JS是參照)，如果PHP要參照是用$a = &$b(得到後會$A依照$B改變)

?>

<?php 
//php 的 function 不會往外找變數 要用外面的變數要用global宣告
//不要這樣用!!!!!!!!!!!!!!

$aaaaaaa=100;
$bbbbbbb=2000;
function YOOOO(){
    global $aaaaaaa;
    echo $aaaaaaa;
}


?>
