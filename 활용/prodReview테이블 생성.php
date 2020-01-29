<?php
  include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";

  $sql = 'create table prodReview(';
  $sql.= 'prodReviewID int unsigned auto_increment COMMENT "리뷰의 고유번호",';
  $sql.= 'myMemberID int unsigned COMMENT "리뷰를 자겅한 회원번호",';
  $sql.= 'content tinytext  COMMENT "리뷰 내용",';
  $sql.= 'regTime datetime not null COMMENT "리뷰 작성 날짜",';
  $sql.= 'PRIMARY KEY(prodReviewID))';
  $sql.= 'charset=utf8 COMMENT="상품리뷰";';

  $result = $dbConnect->query($sql);

  if($result){
    echo "테이블 생성 완료 <br>";
  }else{
    echo "테이블 생성 실패 <br>";
  }



 ?>
