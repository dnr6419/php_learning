<?php
# 36 ~ 46
# 문자열의 공백을 없애는 함수
$str = " 양쪽 모두 공백을 없앰 ";
echo '|'.trim($str).'|'."<br>";
$str = " 앞쪽 공백을 없앰";
echo '|'.ltrim($str)."<br>";
$str = "뒤쪽 공백을 없앰 ";
echo rtrim($str).'|'."<br>";

# 문자열내 모든 문자를 대문자로 출력
$str = 'everdevel';
echo mb_strtoupper($str)."<br>";
# 문자열내 모든 문자를 소문자로 출력
$str = mb_strtoupper($str);
echo mb_strtolower($str)."<br>";

# 문자열의 수 세기
echo "{$str}은 ".strlen($str)."개의 문자로 이뤄져 있습니다. <br>";

# 특정 문자를 치환하기
# str_replace('피문자열','바꿀 문자열',문자열이 들어간 변수)
$str = str_replace('EVER',"changed! ",$str);
echo $str."<br>";

# 문자열을 자릿수로 자르기
# substr('대상 문자열',자르기 시작할 위치, 자를 문자열 수)
$str = 'array of index';
$str = substr($str,1,8);
echo "문자열을 자릅니다. : \$str = {$str}<br>";
# 한글 문자열은 해당되지 않는다.

# 첫 글자를 대문자로 변경하기
$str = ucfirst($str);
echo "첫 글자를 대문자로 변경합니다 ".$str."<br>";

# 영문의 첫 글자를 대문자로 변경하기
$str = 'everdevel, tomodevel, startwebcoding';
echo ucwords($str)."<br>";

# 문자열 속에서 특정 문자의 위치 찾기 정수형으로 반환
echo strpos($str,'tomodevel')."<br>";

# 변수의 존재 확인하기
echo "\$str변수는 선언이 되어 있나요 ? ".isset($str)."<br>";
# 선언이 되어 있다면 1을 반환, 선언되어 있지 않다면 0을 반환
echo "\$a변수는 선언이 되어 있나요 ? ".isset($a)."<br>";

# 변수에 데이터형 적용하기
$a;
settype($a,'int');
# 데이터형 선언시에는 'bool', 'int', 'double', 'str', 'array' 와 같이 문자열로 입력한다.
echo "\$a의 데이터 형은 무엇인가요 ? ".gettype($a)."<br>";


 ?>
