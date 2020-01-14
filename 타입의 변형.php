<?php
$str = '123문자열';
echo "\"{$str}\" 데이터의 변형 전의 데이터형".gettype($str);
echo "<br>";
$str = (int)$str;
echo "\"{$str}\" 데이터의 변형 후의 데이터형".gettype($str);
# 앞의 숫자만 남기고 문자들은 모두 제외되었다.
# "문자열123"으로 str을 설정하고 (int)형변환을 시킨다면 0인 값을 갖는다.
echo "<br>";
$double = 86.44;
echo "{$double}을 정수형으로 변환 : ".(int)$double;

 ?>
