<?php
  include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";
  function schoolRecord(){
    global $dbConnect;
    $sql = "select count(class) from schoolRecord";
    $result = $dbConnect->query($sql);
    $reviewInfo = $result->fetch_array(MYSQLI_ASSOC);
    echo "class 필드를 기준으로 한 레코드 수 <br>";
    echo $reviewInfo['count(class)'];
    echo "<br>";
  }
  # count 함수는 레코드의 class 필드의 값이 존재하는 레코드만 센다.
  # null 값이 들어간 레코드는 세지 않는다.
  schoolRecord();
  $sql = 'update schoolRecord set class = 1 where mymemberID = 1';
  $dbConnect->query($sql);
  schoolRecord();
# sum, avg, max, min 함수
  $sql = "select sum(english) from schoolRecord";
  $result = $dbConnect->query($sql);
  $score = $result->fetch_array(MYSQLI_ASSOC);
  echo "영어 점수 합계 : ".$score['sum(english)'];
  echo "<br>";

  $sql = "select max(math) from schoolRecord";
  $result = $dbConnect->query($sql);
  $score = $result->fetch_array(MYSQLI_ASSOC);
  echo "최대 수학 점수 : ".$score['max(math)'];
  echo "<br>";
  $sql = "select min(science) from schoolRecord";
  $result = $dbConnect->query($sql);
  $score = $result->fetch_array(MYSQLI_ASSOC);
  echo "최소 과학 점수 : ".$score['min(science)'];
  echo "<br>";

  # 그룹별 집계
  $sql = 'select class, avg(english) as avgEng from schoolRecord group by class';
  $result = $dbConnect->query($sql);
  $dataCount = $result->num_rows;

  for($i=0; $i<$dataCount; $i++){
    $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    echo "반 : ".$memberInfo['class'];
    echo "<br>";
    echo "평균 영어 점수 : ".$memberInfo['avgEng'];
    echo "<br>";
  }
  $sql = 'select class, sum(japanese) as avgJ from schoolRecord group by class';
  $result = $dbConnect->query($sql);
  $dataCount = $result->num_rows;

  for($i=0; $i<$dataCount; $i++){
    $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
    echo "반 : ".$memberInfo['class'];
    echo "<br>";
    echo "일본 점수 합계 : ".$memberInfo['avgJ'];
    echo "<br>";
  }

  
 ?>
