<?php
# 파일을 여는 함수 fopen()
$fopen = fopen("./thisisTest/file_Test.txt",'r+');
# r+파일을 읽고 쓸 수 있도록 열기.(기존 파일이 있을 경우, 내용이 삭제되고 처음부터 다시 쓴다.)
# a+ : 파일을 읽고 쓸수 있도록 열기.(기존 파일이 있을 경우, 내용에 덧붙인다.)
if($fopen){
  echo "파일을 열었습니다.";
}else{
  echo "파일을 열지 못했습니다.";
}
echo "<br>";
# fclose($fopen); # 파일을 닫는 함수
$content = "나는 할 수 있습니다.";
$fw = fwrite($fopen,$content);
if($fw){
  echo "파일에 내용을 저장했습니다.";
}else{
  echo "파일에 내용을 저장하는데 실패했습니다.";
}
fclose($fopen); # 파일을 닫는 함수
$fo = fopen("./thisisTest/file_Test.txt",'a+');
$fw = fwrite($fo," 내용을 덧붙입니다.\n");
if($fw){
  echo "파일에 내용을 저장했습니다.";
}else{
  echo "파일에 내용을 저장하는데 실패했습니다.";
}
#$fr = fread($fo,'12');
# 12byte만큼 해당 파일에서 읽어옵니다.
# 파일 읽기에 필요한 함수 file_exists, fopen, fread, filesize
# file_exists함수에 경로와 파일명을 적어놓을 것.
echo "<br>";
if(file_exists("./thisisTest/file_Test.txt")){
  echo "파일이 존재합니다. 읽을 준비가 되었습니다.";
  echo "<br>";
  $fo = fopen("./thisisTest/file_Test.txt",'r');
  if($fo){
    echo "파일 내용<br>";
    $fr = fread($fo,filesize("./thisisTest/file_Test.txt"));
    if($fr){
      echo $fr; #내용을 출력합니다.
      fclose($fo);
      echo "<br>";
    }
  }
}else{
  echo "해당파일이 없습니다. <br>";
}
echo "한 줄씩 읽어옵니다. <br>";
# 한 라인씩 읽기 fgets 함수를 사용한다. fgets는 한줄씩만 가져온다.
$fileName = './thisisTest/file_Test.txt';
if(file_exists($fileName)){
  $fopen = fopen($fileName,'r');
  $readByte = 512; # 읽을 용량 설정.. 상황에 따라 다른 값을 넣어야 한다.
  if($fopen){
    while($fgets=fgets($fopen,$readByte)){
      echo $fgets."<br>";
    }
  }
}
