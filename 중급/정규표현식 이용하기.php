<?php
#정규표현식

# $pattern = '/패턴 입력할 곳/'; 정규표현식을 선언할 때는 /가 필요하다.
# preg_match(패턴, 검사할 텍스트, 반환할 패턴 일치 결과를 받을 변수)
# $pattern에 있는 문자들이 $str에 존재하는지 여부를 확인한다.
# 1byte이상의 값을 검사하려면 + 기호를 사용한다.
$pattern = '/^a$/';
# $pattern = '/^a+$/';
# 비교해보아라!
$str = 'aaaa';
if(preg_match($pattern,$str,$matches)){
  echo "값 {$str}은 정규식 표현에 적합한 값입니다.";
  echo "<pre>";
  var_dump($matches);
  echo "</pre>";
}else{
  echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
}
echo "<br>";
# 정규표현식 한글 검사
# 한글은 한 글자당 3byte, 영어와 숫자는 1byte로 할당된다.

$pattern = '/^[가-힣]{6}$/';
# 두글자 검사하기.
# $pattern = '/^[가-힣]{6,}$/';
# 두글자 이상 검사하기
$str = '한글';
if(preg_match($pattern,$str,$matches)){
  echo "값 {$str}은 정규식 표현에 적합한 값입니다.";
  echo "<pre>";
  var_dump($matches);
  echo "</pre>";
}else{
  echo "이름에 영문 또는 숫자가 있는지 확인 요망";
}
# 영문 대문자가 있는지 검사
$pattern = '/^[A-Z]+.*$/';
$str = 'Halo~';
if(preg_match($pattern,$str,$matches)){
  echo "대문자가 존재합니다.<br>";
  #echo $matches;
}else{
  echo "대문자가 존재하지 않습니다.";
}
# 영문 소문자, 대문자, 한글로 이뤄졌는지 검사.
#  띄어쓰기와 점이 있는지도 확인한다.
$pattern = '/^[A-Za-z가-힣. ]+$/';
$str = '안녕하세요helolo';
if(preg_match($pattern,$str,$matches)){
  echo "특수문자가 존재하지 않습니다.<br>";
  #echo $matches;
}else{
  echo "특수문자가 존재합니다.";
}
# 정규표현식으로 휴대전화번호 유효성 검사하기.
# (ㅁ|ㅠ|ㅊ|ㄷ|) 식으로 사용한다.
$pattern = '/^(010|011|019|016)-[0-9]{3,4}-[0-9]{3,4}$/';
$str = '011-2033-6419';
if(preg_match($pattern,$str,$matches)){
  echo "전화번호 형식에 맞습니다..<br>";
  #echo $matches;
}else{
  echo "전화번호 형식에 맞지 않습니다.";
}
# 정규표션식으로 이메일 주소 유효성 확인하기.
$pattern = '/^[A-Za-z]{1}[a-zA-Z0-9_\-]+@[A-Za-z]{1}[a-zA-Z0-9_\-]+(([a-z]{1}[a-z.]+[a-z]{1})|[a-z]+)$/';
$str = "dnr6419@gmail.co.kr";
if(preg_match($pattern,$str,$matches)){
  echo "이메일 형식에 맞습니다..<br>";
  #echo $matches;
}else{
  echo "이메일 형식에 맞지 않습니다.";
}
# filter_Var()함수로 이메일 유효성 검사하기.
$email = "dnr6419f";
$emailCheck = filter_Var($email,FILTER_VALIDATE_EMAIL); #  이미 상수가 선언되어 있음.
if($emailCheck){
  echo "이메일 형식에 맞습니다. <br>";
}else{
  echo "이메일 형식에 맞지 않습니다. <br>";
}


 ?>
