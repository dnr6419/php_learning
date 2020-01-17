<?php
# php 설정보기
# phpinfo();
# C:\xampp\php\php.ini 설정파일을 통해 설정값을 변경할 수 있다.

# 타임스탬프 시간 확인하기 (1970년 1월 1일 0초부터 ..)
echo time();
echo "<br>";

# 원하는 형식으로 시간 표시하기.
# date('시간포맷', 타임스탬프값)
echo "현재 시간은 ".date("Y년 m월 d일 A H시 i분 s초 ",time());
echo "<br>";

# 특정 시간을 타임스탬프 시간으로 표시하기.
# mktime(시,분,초,월,일,년)
echo "2020년 1월 1일 9시 15분 10초의 타임스탬프는 ?";
$timestamp = mktime(9,15,10,1,1,2020);
echo "{$timestamp}<br>";

# 특정 시간에만 특정 명령어 작동시키기.
$startime = mktime(0,0,0,1,1,2020);
$endtime = mktime(0,59,59,1,1,2020);

$nowtime = time();
if($nowtime>$endtime){
  echo "시간이 지났습니다. 일어나세요!!<br>";
}

# 특정 날짜가 있는 주의 월요일 날짜 구하기

$year = 2020;
$month = 1;
$day = 16;

$targetDateTimeStamp = mktime(0,0,0,$month,$day,$year);
# date에서 'w' 옵션은 그 타임스탬프의 요일을 반환한다. 0~6 : 일월화수목금토
$dayOfWork = date('w',$targetDateTimeStamp);

$secondOfOneDay = 60*60*24;

switch($dayOfWork){
  case 1:
    $monday = $targetDateTimeStamp;
    $friday = $targetDateTimeStamp+($secondOfOneDay*4);
    break;
  case 2:
    $monday = $targetDateTimeStamp-$secondOfOneDay*1;
    $friday = $targetDateTimeStamp+($secondOfOneDay*3);
    break;
  case 3:
    $monday = $targetDateTimeStamp-$secondOfOneDay*2;
    $friday = $targetDateTimeStamp+($secondOfOneDay*2);
      break;
  case 4:
    $monday = $targetDateTimeStamp-$secondOfOneDay*3;
    $friday = $targetDateTimeStamp+($secondOfOneDay*1);
    break;
  case 5:
    $monday = $targetDateTimeStamp-$secondOfOneDay*4;
    $friday = $targetDateTimeStamp;
    break;
}
if(isset($monday)&&isset($friday)){
  echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
  echo "<br>";
  echo "월요일 : ".date('Y-m-d',$monday);
  echo "<br>";
  echo "금요일 : ".date('Y-m-d',$friday);
}
# 현재 시간 정보를 배열로 보기.
echo "<br>";
$arr = getdate();
var_dump($arr);
echo "<br>";
# 날짜값이 유효한지 확인하기.
# checkdate(월,일,년)
$isDateCheck = checkdate(2,29,2020);
if($isDateCheck){
  echo "유효한 날짜입니다. <br>";
}else{
  echo "유효하지 않은 날짜입니다. <br>";
}
# 1초 이하의 시간 확인하기.
# microtime();
echo microtime();
echo "<br>";



?>
