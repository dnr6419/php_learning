<?php
  include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";
  $score = array();
  $score[0] = [1,1,90,80,90,90,100];
  $score[1] = [2,1,85,80,90,90,100];
  $score[2] = [3,2,100,90,70,70,100];
  $score[3] = [4,2,90,86,90,70,100];

  $cnt = 0;
    foreach ($score as $s) {
      $sql = 'insert into schoolRecord';
      $sql.= '(myMemberID,class,english,math,science,japanese,coding)';
      $sql.= "values({$s[0]},{$s[1]},{$s[2]},{$s[3]},{$s[4]},{$s[5]},{$s[6]})";
      print($sql);
      echo "<br>";
      $result = $dbConnect->query($sql);
      $cnt++;
      if($result){
        echo $cnt." 데이터 입력 성공<br>";
      }else{
        echo "데이터 입력 실패 <br>";
      }
    }
 ?>
