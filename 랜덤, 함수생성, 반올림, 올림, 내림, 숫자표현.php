<?php
# 실수 반올림하기.
# round함수
# 57 ~ 68
$a = round(23.12,1);
$b = round(23.12,2);
echo $a."<br>";
echo $b."<br>";
# 뒤쪽부터 1자리, 2자리 .. 식으로 계산한다.
# round(1234,-2);는 뭘까? 앞에서 0 ,-1, -2 순으로 자릿수를 맞추면 3이나온다.
# 3에서 반올림하니까 1200인 값이 나온다.
echo round(1234,-2);
echo "<br>";

# 실수 내림하기 : 실수부분을 내림한다.
$num = 12.68;
$floor = floor($num);
echo $floor;
echo "<br>";
# 실수 올림하기 : 실수부분을 올림한다.
$num = 12.6668;
$ceil = ceil($num);
echo $ceil;
echo "<br>";
# php 에서 사용자 정의함수 만들기
# function functionName()
# {
# code to be executed;
# }
# 숫자를 3자리씩 구분하여 표시하기
# number_format(숫자, n번째까지 소수점 자릿수 표시)
$str = number_format(1000000.123141,5);
echo $str.'<br>';

# 랜덤값 구하기
$int = rand(1,10); # 랜덤값 하나를 무작위로 추출한다. 10을 포함한다.
echo $int.'<br>';

function add($a,$b=1){
  echo "add함수를 호출합니다. <br>";
  echo "{$a}+{$b}를 계산합니다. <br>";
  return $a+$b;
}
$add = add(1,3);
echo $add."<br>";
# 함수의 기본값 설정하기.
$add = add(2);
echo $add;
echo "<br>";



 ?>
