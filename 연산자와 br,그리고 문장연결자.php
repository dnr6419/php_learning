<?php
  $str = "안녕";
  $str2 = "하세요.";
  echo $str.$str2;
  echo "<br>";
  echo "우리 아버지는 "."감기에 걸리셨다.";
#변수는 다음과 같이 이어붙일 수 있다.
#상수 출력.
  echo "<br>";
  define("FAVORITE_DOLL","ToToro");
  echo "가장 좋아하는 인형은 ".FAVORITE_DOLL."입니다.";
  echo "<br>";
#  define("FAVORITE_DOLL","none");
#  이미 정의했으므로, 또다시 정의가 되지 않는 것을 알 수 있다.
#  echo "가장 좋아하는 인형은 ".FAVORITE_DOLL."입니다.";
# 연산자
  $sum = 5+5;
  $sub = 5-5;
  $mul = 5*5;
  $div = 5/5;
  echo "합은 : ".$sum;
  echo "<br>";
  echo "차는 : ".$sub;
  echo "<br>";
  echo "곱은 : ".$mul;
  echo "<br> ";
  echo "나누기는 : ".$div;
# 증감연산자
  $num1 = 10;
  $num2 = 10;
  echo "<br> ";
  echo "num1++ 값 : ".$num1++;
  echo "<br> ";
  echo "num2++ 값 : ".++$num2;
 ?>
