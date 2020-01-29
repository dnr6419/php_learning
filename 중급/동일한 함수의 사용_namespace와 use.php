<?php
# namespace와 use 사용하기
# 동일한 함수명을 사용하기 위해 사용.
namespace agroup;
function loaduser(){
  echo "첫번째 함수입니다.<br>";
  return;
}
class user{
  function print(){
    echo "A 클래스 함수입니다.<br>";
    return;
  }
}
namespace bgroup;
class user{
  function print(){
    echo "B 클래스 함수입니다.<br>";
    return;
  }
}
function loaduser(){
  echo "두번째 함수입니다.<br>";
  return ;
}
# 함수의 호출법
\agroup\loaduser();
\bgroup\loaduser();
# 클래스의 호출도 마찬가지
$aUser = new \agroup\user;
$bUser = new \bgroup\user;
$aUser->print();
$bUser->print();
# use의 사용
use \agroup\user as au;
use \bgroup\user as bu;
$au = new au;
$bu = new bu;

$au->print();

 ?>
