<?php
# 변수의 값이 빈 값인지 확인하기
# empty()함수는 bool타입의 true나 false 값을 반환한다.
$var = '';
echo "값이 빈 문자열인 경우";
var_dump(empty($var));
echo "<br>";

$var = null;
echo "값이 null인 경우";
var_dump(empty($var));
echo "<br>";

$var = array();
echo "값이 빈 배열인 경우";
var_dump(empty($var));
echo "<br>";
$var = 0;
echo "값이 0인 경우";
var_dump(empty($var));
echo "<br>";
$var = '0';
echo "값이 '0' 문자열인 경우";
var_dump(empty($var));
echo "<br>";

$var = 'string';
echo "값이 'string' 문자열인 경우";
var_dump(empty($var));
echo "<br>";

?>
