<?php
# 파일만들기 : mkdir(경로와 디렉토리이름,퍼미션 설정값)
/*$folderName = "thisisTest";
$makeDir = mkdir("./{$folderName}",777);
if($makeDir){
  echo "파일 생성 성공";
  echo "<br>";
}else{
  echo "파일 생성 실패 <br>";
}*/
# 폴더의 존재 유무확인 id_dir
# [/htdocs/php]폴더 내에 해당 폴더가 있는지 확인한다.

$folderName = 'thisisTest';
$is_Dir = is_dir($folderName);
if($is_Dir){
  echo "폴더가 존재합니다.<br>";
}else{
  echo "폴더가 존재하지 않습니다.<br>";
}
# 폴더 열기
$is_Open = opendir($folderName);
if($is_Open){
  echo "폴더를 열었습니다. <br>";
}else{
  echo "폴더를 열지 못했습니다. <br>";
}
# 폴더 읽기
# 폴더를 열고난 뒤 담았던 변수를 이용한다. readdir($is_Open)
# 내용을 읽을 땐 하나씩 읽으므로 while문과 잘 쓰인다.
echo "파일의 내용은 : .<br>";
while($read_dir = readdir($is_Open)){
    echo $read_dir." <-파일<br>";
}
# readdir() 목록을 처음으로 되돌리기
# readir을 한번 사용하고 나면, 다시 읽어들일 수 없는 것을 방지하기 위해
# rewinddir을 사용한다.
rewinddir($is_Open);
echo "다시 파일의 내용은 : .<br>";
while($read_dir = readdir($is_Open)){
    echo $read_dir." <-파일<br>";
}
# 폴더 닫기
if(closedir($is_Open)){
  echo "폴더를 닫았습니다.";
}else{
  echo "폴더를 닫지 못했습니다.";
}
echo "<br>";
# 폴더 삭제는 rmdir(삭제할 폴더명)함수를 사용한다.
 ?>
