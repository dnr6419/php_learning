<?php
# 34 ~35
$i = 0;
while($i<10){
  echo "실행합니다 ".++$i."<br>";
}
$i = 0;
$sum = 0;
while($sum<10){
  $sum += $i;
  $i++;
  echo "{$sum}의 값을 갖습니다.<br>";
}


 ?>
