<?php
  include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";
# 넣은 데이터
  $reviewList = array();
  $reviewList[0] = [1,'초보자에게 좋아요.'];
  $reviewList[1] = [2,'정말 초보자에게는 좋은 것이지만 깊이감이 없다.'];
  $reviewList[2] = [3,'좋다.'];
  $reviewList[3] = [4,'웹에 대해 조금 이해할 것 같다.'];
# prodReview에 데이터 넣기.
  $cnt = 0;
  foreach($reviewList as $rl){
    $sql = "INSERT INTO prodReview(myMemberID,content,regTime) ";
    $sql.= "values({$rl[0]},'{$rl[1]}',NOW())";
    print($sql);
    echo "<br>";
    $result = $dbConnect->query($sql);
    $cnt++;
    if($result){
      echo "데이터 입력 성공<br>";
    }else{
      echo "데이터 입력 실패 <br>";
    }
  }
  # mymemberID와 prodReview테이블을 이용해 join문 사용하기
  $sql = 'select m.name,r.content,r.regTime from mymember m join prodreview r';
  $sql.=' on (m.myMemberID=r.myMemberID)';
  $res = $dbConnect->query($sql);
  if($res){
    $dataCount = $res->num_rows;
    for($i=0;$i<$dataCount;$i++){
      $reviewInfo = $res->fetch_array(MYSQLI_ASSOC);
      echo "{$reviewInfo['regTime']}- {$reviewInfo['name']}님, {$reviewInfo['content']}";
      echo "<br>";
    }
  }

 ?>
