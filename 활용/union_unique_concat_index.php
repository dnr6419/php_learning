<?php
include $_SERVER['DOCUMENT_ROOT']."/활용/db_Connect.php";

# union 사용법
$sql = "(select name, email from dropOutOld) union (select name,email from dropOutNew)";
$result = $dbConnect->query($sql);
$dataCount = $result->num_rows;

for($i=0; $i<$dataCount; $i++){
  $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
  echo "이름 : ".$memberInfo['name'];
  echo "<br>";
  echo "이메일 주소 : ".$memberInfo['email'];
  echo "<br>";
}
# 두 테이블에 존재하는 동일한 레코드는 1회만 출력하는 것을 알 수 있다.
# 중복된 정보를 함께 보려면 union all을 이용한다.
echo "중복을 허용한 union 사용 결과 <br>";
$sql = "(select name, email from dropOutOld) union  all (select name,email from dropOutNew)";
$result = $dbConnect->query($sql);
$dataCount = $result->num_rows;

for($i=0; $i<$dataCount; $i++){
  $memberInfo = $result->fetch_array(MYSQLI_ASSOC);
  echo "이름 : ".$memberInfo['name'];
  echo "<br>";
  echo "이메일 주소 : ".$memberInfo['email'];
  echo "<br>";
}
# 서브쿼리 사용하기.
# select * from schoolRecord where english = max(english);
# 위 구문은 에러를 유발한다.
$sql = 'select * from schoolRecord where english = (select max(english) from schoolRecord)';
$result = $dbConnect->query($sql);
$memberInfo = $result->fetch_array(MYSQLI_ASSOC);
echo "학생 번호 : ".$memberInfo['myMemberID'];
echo "<br>";
echo "클래스(반) : ".$memberInfo['class'];
echo "<br>";
echo "영어 점수 : ".$memberInfo['english'];
echo "<br>";

# 특정 필드에 중복값 넣지 않기.
# alter table myMember modify email VARCHAR(30) not null unique comment '고객의 이메일 주소'
$sql = "alter table myMember modify email VARCHAR(30) not null unique comment '고객의 이메일 주소'";
$result = $dbConnect->query($sql);
if($result){
  echo "특정 필드 수정 성공 <br>";
}else{
  echo "수정 실패 ";
}
# insert into myMember(userId, name, password, phone, email, birthday, gender, regTime)
# values('pepper', '페퍼', 'vpvjeptm', '010-1234-5678', 'dnr6419@gmail.com', '2015-11-18', 'm', now())
$sql = "insert into myMember(userId, name, password, phone, email, birthday, gender, regTime)";
$sql.= " values('pepper', '페퍼', 'vpvjeptm', '010-1234-5678', 'd1@gmail.com', '2015-11-18', 'm', now())";
$result = $dbConnect->query($sql);
if($result){
  echo "데이터 추가 성공 <br>";
}else{
  echo "추가 실패 ";
}
# 이메일 필드에 있는 값이 기존 레코드에 있는 값과 같아서 추가가 되지 않는다.

# 서로 다른 필드의 값을 합쳐서 출력하기
# select concat(합칠 문자열 및 필드, 합칠 문자열 및 필드) from 테이블 명
$sql = 'select concat(name,"의 이메일 주소는 ",email," 입니다.") as _CONCAT from myMember';
$result = $dbConnect->query($sql);
if($result){
  echo "필드값 합치기 성공 <br>";
  $string = $result->fetch_array(MYSQLI_ASSOC);
  echo "출력 값 : ".$string['_CONCAT'];
}

# 인덱스 사용하기.
# 데이터 베이스의 레코드를 더욱 빠른 속도로 불러오게 하려면 인덱스를 사용해야 한다.
# name 필드에 index를 추가하는 구문이다.
echo "<br>";
$sql = "alter table myMember add index(name)";
$result = $dbConnect->query($sql);
if($result){
  echo "인덱스 적용 완료 <br>";
}else{
  echo "적용 실패 <br>";
}
# desc mymember; 로 확인한 결과 name 레코드의 key 필드를 보면 MUL이라고 표시된 것을 알 수 있다.

 ?>
