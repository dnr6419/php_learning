<?php
# 적용범위를 테스트 하고 싶다면, 쿠키를 만들었던 탭에서 그대로 url만 변경해서 열어야 한다.

if(isset($_COOKIE['memberID'])){
  echo "쿠키의 memberID값은 {$_COOKIE['memberID']}입니다.<br>";
}else{
  echo "쿠키 memberID값이 존재하지 않습니다.<br>";
}
if(isset($_COOKIE['check'])){
  echo "쿠키의 check값은 {$_COOKIE['check']}입니다.<br>";
}else{
  echo "쿠키 check값이 존재하지 않습니다.<br>";
}
 ?>
