<?php
# session_start함수를 먼저 작성해야 한다.
session_start();
$_SESSION['userId'] = 'FreshWaterMelon';
if(isset($_SESSION['userId'])){
  echo "세션이 생성되었습니다. userId의 값 : {$_SESSION['userId']}";
}else {
  echo "세션 생성에 실패했습니다.";
}
echo "<br>";
var_dump($_SESSION);
echo "<br>";
# 세션 삭제
unset($_SESSION['userId']);
if(isset($_SESSION['userId'])){
  echo "세션이 생성되었습니다. userId의 값 : {$_SESSION['userId']}";
}else {
  echo "세션 생성에 실패했습니다.";
}
echo "<br>";
# 모든 세션 삭제 : session_destroy()
 ?>
