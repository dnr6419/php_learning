<?php
# mysqli 라는 클래스를 이용한다.
# xampp 를 이용한다면 mysql의 admin에서 비밀번호를 설정해야 한다.
# shell을 이용한뒤, mysql -u root 명령어를 통해 접속이 가능하다.
# set password = password('1234') 를 통해 비밀번호를 설정할 수 있다.
$host = 'localhost';
$user = 'root';
$pw = '1234';
$dbConnect = new mysqli($host,$user,$pw);
$dbConnect->set_charset('utf8');
# mysqli 클래스에 있는 함수를 사용한다.
if(mysqli_connect_errno()){
  echo "데이터 베이스 접속 실패!!<br>";
  echo mysqli_connect_error();
}else{
  echo "접속 성공!!<br>";
}
# 접속을 성공했으니, 데이터베이스를 생성하자.
# query('쿼리문')를 이용해서 데이터베이스를 만들 수 있다.
if(mysqli_connect_errno()){
  echo "데이터 베이스 접속 실패!!<br>";
  echo mysqli_connect_error();
}else{
  $sql = "CREATE DATABASE phpExample";
  $res = $dbConnect->query($sql);
  if($res){
    echo "데이터 베이스가 생성되었습니다.";
  }else{
    echo "데이터 베이스 생성을 실패하였습니다.";
  }
}
echo "<br>";
# 데이터 베이스 접속방법
$dbConnect = new mysqli($host,$user,$pw,"phpExample");
if(mysqli_connect_errno()){
  echo "데이터 베이스 접속 실패!<br>";
}else{
  echo "데이터 베이스 접속 성공!<br>";
}
$sql = 'drop table mymember;';
$res = $dbConnect->query($sql);
if($res){
  echo "테이블 삭제 <br>";
}else{
  echo "테이블 삭제 실패 <br>";
}
# 테이블 생성하기
# 접속된 데이터 베이스에서 테이블을 생성해본다.
$sql = 'create table myMember(';
$sql.= 'myMemberID int unsigned auto_increment comment "고객의 고유번호",';
$sql.= 'userId varchar(15) not null comment "고객의 아이디.",';
$sql.= 'name varchar(10) not null comment "고객의 이름.",';
$sql.= 'password varchar(30) not null comment "고객의 비밀번호.",';
$sql.= 'phone varchar(13) not null comment "고객의 전화번호.",';
$sql.= 'email varchar(30) not null comment "고객의 이메일 주소.",';
$sql.= 'birthDay char(10) not null comment "고객의 생일.",';
$sql.= 'gender enum("m","w","x") default "x" comment "고객의 성별.",';
$sql.= 'regTime datetime not null comment "회원가입 시간.",';
$sql.= 'primary key(myMemberID))';
$sql.= 'charset=utf8 comment="고객 정보 테이블.";';
# shell에서 테이블이 생성되었음을 볼 수 있다.
$res = $dbConnect->query($sql);
$sql = 'alter table myMember change nationality age int';
$res = $dbConnect->query($sql);

if($res){
  echo "테이블 생성을 완료했습니다. <br>";
}else{
  echo "테이블 생성을 실패했습니다. <br>";
}
# 생성된 테이블 목록보기. fetch_array()
# fetch_array argument : MYSQLI_NUM: 인덱스가 숫자로, MYSQLI_ASSOC: 인덱스가 문자로, MYSQLI_BOTH : 인덱스를 둘다 사용
$sql = 'show tables;';
$res = $dbConnect->query($sql);

if($res){
  $list = $res->fetch_array(MYSQLI_BOTH);
  echo "---------------------<br>";
  echo "테이블 목록 <br>";
  for($i = 0;$i<(count($list)-1);$i++){
    echo $list[$i];
    echo "<br>";
  }
}else{
  echo "목록 보이기 실패!<br>";
}
# 테이블에 필드 추가하기.
# 데이터형 옵션 코멘트 위치 순으로 필드의 속성을 나열한다.
# ex) alter table mymember add age int unsigned comment '현재나이' after gender;
# 마지막에 세미콜론은 생략해도 무방하다.

$sql = "alter table myMember add age int unsigned comment '현재 나이' after gender";
$res = $dbConnect->query($sql);
if($res){
  echo "필드 추가 성공!<br>";
}else{
  echo "필드 추가 실패!<br>";
}
# shell에서 desc myMember을 통해 확인할 수 있다.
# 테이블의 구조 보기
$sql = 'DESC myMember';
$res = $dbConnect->query($sql);

$list = $res->fetch_array(MYSQLI_ASSOC);
echo '<pre>';
var_dump($list);
echo "<pre>";
$list = $res->fetch_array(MYSQLI_ASSOC);
echo '<pre>';
var_dump($list);
echo "</pre>";
# fetch_array 함수는 값이 여러개면 가장 첫번째 값을 반환하고 그 후에
# 다시 같은 함수를 실행하면 그 다음에 있는 값은 반환한다.
# 테이블 필드명 변경하기
# alter table myMember change 기존 필드명 새 필드명 기존 데이터형
# 필드 이름을 변경할 수 있다.


$sql = 'alter table myMember change age nationality int';
$res = $dbConnect->query($sql);
if($res){
  echo "필드 이름변경 성공!<br>";
}else{
  echo "필드 이름변경 실패!<br>";
}
# 테이블 필드 옵션 변경하기

# 필드 옵션 변경하기
# alter table 테이블 명 modify 필드명 변경할 필드 정보
$sql = 'alter table myMember modify nationality varchar(15) comment "국적" after gender';
$res = $dbConnect->query($sql);
if($res){
  echo "필드 옵션변경 성공!<br>";
}else{
  echo "필드 옵션변경 실패!<br>";
}
# 필드 삭제하기
# alter table 테이블명 drop 삭제할 필드명
$sql = 'alter table myMember drop nationality';
$res = $dbConnect->query($sql);
if($res){
  echo "필드 삭제 성공!<br>";
}else{
  echo "필드 삭제 실패!<br>";
}
$sql = "alter table myMember add age int unsigned comment '현재 나이' after gender";
$res = $dbConnect->query($sql);
if($res){
  echo "필드 추가 성공!<br>";
}else{
  echo "필드 추가 실패!<br>";
}
# 테이블 삭제하기
# drop table 테이블 명
$sql = "create table test(";
$sql.= "test_id int(10) unsigned not null auto_increment,";
$sql.= "primary key(test_id))";
$res = $dbConnect->query($sql);
if($res){
  echo "테이블 생성 성공!<br>";
}else{
  echo "테이블 생성 실패!<br>";
}
$sql = "drop table test";
$res = $dbConnect->query($sql);
if($res){
  echo "테이블 삭제 성공!<br>";
}else{
  echo "테이블 삭제 실패!<br>";
}
# 테이블에 레코드 추가하기
# insert into 테이블명(입력할 필드명) values(입력할 데이터);
$sql = 'insert into myMember(name, phone) values("참수박","010-2222-3333")';
$res = $dbConnect->query($sql);
$sql = 'insert into myMember(name, phone,email) values("동네박","010-2332-2223","dnr6419@naver.com")';
$res = $dbConnect->query($sql);
if($res){
  echo "레코드 삽입 성공!<br>";
}else{
  echo "레코드 삽입 실패!<br>";
}
# 테이블의 레코드 불러오기
$sql = 'select name, phone from myMember';
$res = $dbConnect->query($sql);
if($res){
  echo "레코드 불러오기 성공!<br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH); # fetch_array를 통해 레코드를 한 개씩 받아온다.
    echo "이름 : ".$memberinfo[0]; # 받아온 레코드의 인덱스는 select문에서 질의한 필드순이다.
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone']; # 인덱스는 숫자일 수도 문자열일수도 있다.
    echo "<br>";
  }
}else{
  echo "레코드 불러오기 실패!<br>";
}
# 특정 조건의 데이터 불러오기.
# where을 사용한다.
$sql = 'select name,phone from myMember where myMemberID = 1';
$res = $dbConnect->query($sql);
if($res){
  echo "특정 조건의 데이터 불러오기 성공 <br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH);
    echo "이름 : ".$memberinfo[0];
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone'];
    echo "<br>";
  }
}else{
  echo "특정 조건 불러오기 실패 <br>";
}
# like를 써서 문자열의 일부분을 검색할 수도 있다.
$sql = 'select name,phone from myMember where name like "%참%"';
$res = $dbConnect->query($sql);
if($res){
  echo "특정 조건의 데이터 불러오기 성공 <br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH);
    echo "이름 : ".$memberinfo[0];
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone'];
    echo "<br>";
  }
}else{
  echo "특정 조건 불러오기 실패 <br>";
}
# 데이터 정렬하기
# select * from myMember order by name asc;
$sql = 'select myMemberID,name,phone from myMember order by name asc';
$res = $dbConnect->query($sql);
if($res){
  echo "오름차순 데이터 불러오기 성공 <br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH);
    echo '고유번호 : '.$memberinfo[0];
    echo "<br>";
    echo "이름 : ".$memberinfo[1];
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone'];
    echo "<br>";
  }
}else{
  echo "오름차순 데이터 불러오기 실패<br>";
}
# 불러올 레코드 수 지정하기.
# select 필드명 from 테이블명 limit 레코드 순번, 불러올 개수 0부터 시작한다.
$sql = 'select * from myMember limit 0,2';
$res = $dbConnect->query($sql);
if($res){
  echo "지정된 레코드만큼 불러오기 성공 <br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH);
    echo '고유번호 : '.$memberinfo['myMemberID'];
    echo "<br>";
    echo "이름 : ".$memberinfo['name'];
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone'];
    echo "<br>";
  }
}else{
  echo "지정된 레코드만큼 불러오기 실패<br>";
}
# 데이터 값 변경하기
# update 테이블명 set 필드명 값 조건
# 조건을 넣지 않는다면 전체 레코드에서 해당 필드가 변경된다.
$sql = 'update myMember set phone="0", name="Fresh수박",email="goo@gmail.com" where myMemberID = 1';
$res1 = $dbConnect->query($sql);
$sql = 'select * from myMember limit 0,2';
$res = $dbConnect->query($sql);
if($res1){
  echo "지정된 레코드 변경 성공 <br>";
  $dataCount = $res->num_rows;
  for($i=0;$i<$dataCount;$i++){
    $memberinfo = $res->fetch_array(MYSQLI_BOTH);
    echo '고유번호 : '.$memberinfo['myMemberID'];
    echo "<br>";
    echo "이름 : ".$memberinfo['name'];
    echo "<br>";
    echo "전화번호 : ".$memberinfo['phone'];
    echo "<br>";
  }
}else{
  echo "지정된 레코드 변경 실패<br>";
}
# 데이터 삭제하기.
# delete from 테이블명 조건
$sql = 'delete from myMember where myMemberID=2';
$res = $dbConnect->query($sql);
if($res){
  echo "지정된 레코드 삭제 성공 <br>";
}else{
  echo "지정된 레코드 삭제 실패<br>";
}
# 테이블 초기화하기
# trucate 테이블명;
$sql = 'truncate myMember';
$res = $dbConnect->query($sql);
if($res){
  echo "테이블 초기화 완료 <br>";
}else{
  echo "테이블 초기화 실패 <br>";
}
# 다수의 조건 사용하기
# where myMemberID in (1,2,3)
# 1,2,3의 값을 가진 myMemberID가 있는 레코드
 ?>
