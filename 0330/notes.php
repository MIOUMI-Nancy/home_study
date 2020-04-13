<?php

$one = 156;
$two = '35';
$three = 'ABC';

echo $one + $two; //PHP中+為值得相加
echo '<br>';
echo $one . $three; //字串的串接要用.
echo '<br>';


echo "$one<br>"; //雙引號呈現變數的值(跳脫字元同JS用法)
echo '$one<br>'; //呈現字串(跳脫僅適用\或')


//+=   $a = $a + $b >>>>>> $a += $b 
//其他運算以此類推


//三元運算值

echo $one > $two ? 'true' : 'false'; //如果$one > $two為真輸出'true'否則輸出'false'
echo '<br>';
echo $one ?: 'false'; //如果$one為真輸出'$one'否則輸出'false'
echo '<br>';

//JS時 12 || 10 會拿到12(第一為真輸出第一)
//PHP 12 || 10 會拿到TRUE(布林值)
// 優先權: ! 大於 || 大於 = 大於 or 和 and(類似先乘除後加減概念)


$a = isset($_GET['a']) ? intval($_GET['a']) : 0;
$b = isset($_GET['b']) ? intval($_GET['b']) : 0;
//isset偵測是否有設定
//intval轉換成整數

echo $a + $b;
echo '<br>';
echo '<table>';
for ($k = 1; $k <= $a; $k++) {
    echo "<tr>";
    for ($i = 1; $i <= $a; $i++) {
        $o = $i * $k;
        echo "<td>$o</td>";
    }
    echo "</tr>";
}
echo '</table></tr>';


//PHP裏面的變數一定要$字號開頭
