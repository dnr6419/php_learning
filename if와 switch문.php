<?php
# 22 ~ 28
$num1 = 4;
$num2 = 4;
if($num1 == $num2){
  echo "변수 num1과 num2의 값은 서로 같습니다.<br>";
}
if((1==1)&&(2==2)){
  echo "&&는 두 조건이 같아야만 True값을 가집니다.<br>";
}
if((1==3)||(2==2)){
  echo "||는 하나만 같아도 True값을 가집니다.<br>";
}
# 문자열에도 if문은 같은 형식으로 운영됩니다.
if('a'<'b'){
  echo "ASCII코드상 b는 a보다 큽니다.";
}else if('a'=='b'){
  echo "if문이 틀리다면 이곳이 실행됩니다.";
}else{
  echo "상위 조건문들이 모두 False라면 else인 이 곳이 실행될 겁니다.";
}
echo "<br>";
# switch 조건문
$str = 'a';
switch($str){
case 'a':
  echo '$str 값은 a의 값을 가집니다.';
case 'b':
  echo "<br>";
  echo '$str 값은 b의 값을 가집니다.';
  echo "<br>";
  echo "break문이 없다면 'a'에서 실행된 후 여기까지 실행될 겂니다.";
  break;
case 'c':
  echo '$str 값은 c의 값을 가집니다.';
  break;
default:
  echo "아무것도 해당하지 않다면 이곳을 실행할 겁니다.";
  break;
}
echo "<br>";
# else문에 switch문을 사용할 수 있습니다.
$gender = 'woman';
$likePlace = 'Universal Studio';
if($gender == 'man'){
  echo "성별이 남성입니다.";
}else switch($likePlace){
  case 'disney':
    echo "디즈니가는 것을 좋아할 겁니다.";
    break;
  case ($likePlace =='Universal Studio'): # case엔 조건문이 가능합니다.
    echo "유니버셜 스튜디오를 좋아할 겁니다.";
    break;
  case 'theater':
    echo "theater 가는 것을 좋아할 겁니다.";
    break;
  default:
    echo "선택사항에 없습니다.";
    break;
}


 ?>
