<?php
function show_name(){
echo 'hello';
}
show_name();

echo "<hr>";
function show_name2($param){
    echo $param . 'hello';
}

show_name2('vn');
echo "<hr>";
function show_name3($param,$param2){
    echo $param, $param2;
}
show_name3('admin','HN');

echo "<hr>";
function show_name4($param,$param2){
    return $param+$param2;
}   

$show = show_name4('5','6');
echo $show;
echo "<hr>";
$text = "VIET NAM VO DICH";
var_dump($text);

//ham cat chuoi
$cutText=trim('VIET');
echo "<br>";
var_dump($cutText);

//chuyen doi text sang array
echo "<br>";
$str = 'viet nam vo dich';
$strArr= explode(' ',$str);
print_r($strArr);

//chuyen doi arry sang text
echo "<br>";
$str2 = implode(',',$strArr);
print_r($str2);