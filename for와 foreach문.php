<?php
# 28 ~ 33
for($i =0;$i<10;$i++){
  echo "반복문입니다 ".($i+1)."회 실행됩니다.";
  echo '<br>';
  if(($i+1)%2 ==0){
    echo "짝수번째 입니다.<br>";
  }
}
# 반복문입니다 {($i+1)}회 실행됩니다.
# {$i+1}은 에러가 납니다.
# foreach반복문 사용하기
$memberList = ['김미우','김유나','김민후','김해윤'];
for($i = 0;$i<count($memberList);$i++){
  echo $memberList[$i];
  echo "<br>";
}
echo "foreach문을 사용합니다. <br>";
# 형식 : 배열 as 배열의 값을 대입할 변수
foreach($memberList as $ml){
  echo $ml;
  echo "<br>";
}
# 2중 배열문
$memberList[0] = ['name'=>'미우','id'=>'miu'];
$memberList[1] = ['name'=>'유나','id'=>'yuna'];
$memberList[2] = ['name'=>'민후','id'=>'minhu'];
$memberList[3] = ['name'=>'해윤','id'=>'hae'];
foreach ($memberList as $ml) {
  echo "이름 : ".$ml['name'];
  echo "<br>";
  echo "아이디 : ".$ml['id'];
  echo "<br>";
}
# memverList[0]의 인덱스 : name, id가 있습니다.
# memverList[0]의 value : 미우, miu가 있습니다.
foreach ($memberList[0] as $index => $value) {
  echo "인덱스 {$index}의 값 : ".$value;
  echo "<br>";
}
# 이중 foreach문을 구현할 수 있습니다.
foreach ($memberList as $index1 => $value) {
  foreach ($value as $index2 => $value2) {
    echo "{$index2}(은)는 {$value2} 입니다.";
    echo "<br>";
  }
  echo "<br>";
}
 ?>
