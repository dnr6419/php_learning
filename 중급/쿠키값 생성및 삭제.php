<?php
# setcookie('쿠키명','쿠키 값','폐기 시간','경로')
# 경로는 쿠키의 적용범위를 의미한다.
setcookie('memberID','FreshWaterMelon',time()+3600,'/');
# !!주의 아래코드는 반드시 쿠키를 생성하고 진행해야 한다. setcookie
# 쿠키 값을 확인한다.
if(isset($_COOKIE['memberID'])){
  echo "쿠키의 memberID값은 {$_COOKIE['memberID']}입니다.<br>";
}else{
  echo "쿠키 memberID값이 존재하지 않습니다.<br>";
}

# 쿠키의 적용 범위 확인하기.
setcookie('check','wow! you find it!',time()+3600,'/중급/');
if(isset($_COOKIE['check'])){
  echo "쿠키의 check값은 {$_COOKIE['check']}입니다.<br>";
}else{
  echo "쿠키 check값이 존재하지 않습니다.<br>";
}
echo "쿠키값을 삭제합니다. <br>";
setcookie('memberID','FreshWaterMelon',time()-100);
setcookie('check','wow! you find it!',time()-100);
 ?>
