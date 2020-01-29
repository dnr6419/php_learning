<?php
# schoolRecord 테이블 생성
include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";

$sql = 'create table schoolRecord(';
$sql.= 'schoolRecordID int(10) unsigned auto_increment comment "학생번호",';
$sql.= 'myMemberID int unsigned not null comment "회원번호",';
$sql.= 'class tinyint unsigned comment "소속 반",';
$sql.= 'english tinyint unsigned not null comment "영어 점수",';
$sql.= 'math tinyint unsigned not null comment "수학 점수",';
$sql.= 'science tinyint unsigned not null comment "과학 점수",';
$sql.= 'japanese tinyint unsigned not null comment "일본어 점수",';
$sql.= 'coding tinyint unsigned not null comment "코딩 점수",';
$sql.= 'primary key(schoolRecordID))';
$sql.= "charset=utf8 comment='성적 정보';";

$result = $dbConnect->query($sql);

if($result){
  echo "테이블 생성 완료 <br>";
}else{
  echo "테이블 생성 실패 <br>";
}



 ?>
