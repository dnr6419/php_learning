<?php
# filter_Var()함수로 url 유효성 검사하기
$url = 'http://www.naver.com';
$urlcheck = filter_Var($url,FILTER_VALIDATE_URL);
if($urlcheck){
  echo "url 형식에 맞습니다.";
}else{
  echo "url 형식에 맞지 않습니다.";
}
# IP주소 유효성 검사하기.
$ip = "8.8.8.8";
filter_Var($ip,FILTER_VALIDATE_IP);
# 정수의 유효성 : FILTER_VALIDATE_INT
# 실수의 유효성 : FILTER_VALIDATE_FLOAT
 ?>
