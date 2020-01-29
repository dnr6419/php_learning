<?php
  include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";

  $text=addslashes($_POST['text']);
# addslashes함수를 이용해서 따옴표 앞에 역슬래시를 붙여 따옴표 표시용으로 인식하게 만든다.
  $sql = 'insert into prodReview(myMemberID,content,regTime) ';
  $sql.='values(1,"'.$text.'",NOW())';
  echo $sql;
  echo '<br>';

  $res = $dbConnect->query($sql);
  if($res){
    echo "입력 성공";
  }else{
    echo "입력 실패";
  }
  echo "<br>";



 ?>
