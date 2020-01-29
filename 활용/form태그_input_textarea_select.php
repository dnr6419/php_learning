<!-- html5 기본 구조-->
<!DOCTYPE html>

<html>
<head>
  <title>웹 페이지 제목</title>
</head>
<body>
<!-- form tag 사용방법 : <form name='폼 태그 이름' method='데이터 전송 방식' action='정보를 보낼 주소'></form> -->
<!-- form 태그 안에서 여러가지 태그들을 입력해야만 무언가를 선택하거나, 문구를 입력하거나 할 수 있다. -->
<form name='this is tag' method='data transmission type' action='to ip address'>
<!-- form 태그 안에서 사용하는 input 태그 -->
<h1>당신의 취미는 무엇인가요?</h1>
<input type='text' name='userId' maxlength="12" placeholder="아이디 입력"/>
<input type='password' name='userPw' maxlength="12" />

음악 감상<input type='checkbox' name 'myhobby' value='music' />
영화 감상<input type='checkbox' name 'myhobby' value='movie' checked/>
수집<input type='checkbox' name 'myhobby' value='collection'/>
<!-- checkbox는 복수선택이 가능하나, radio는 하나의 보기만 선택이 가능하다.-->
<br>
음악감상<input type='radio' name='myhobby' value='music' />
영화감상<input type='radio' name='myhobby' value='movie' />
수집<input type='radio' name='myhobby' value='collection' />
<br>
<!-- submit 타입의 input은 value값이 submit 버튼 안에 존재한다.-->
<input type='submit' value='전송' />
<br>
<!-- email 타입의 input 태그는 메일 주소 규칙을 확인하는 역할까지 수행한다. -->
<input type='email' name='email' placeholder="이메일 입력"/>
<!-- url 타입의 input 태그는 url 주소의 규칙을 확인한다. -->
url을 입력<input type='url' name='url' />
<!-- file 타입의 input 태그는 문서나 사진을 업로드할 수 있다.-->
<!-- 파일 업로드시 실제 파일을 업로드 하기 위해서 form  태그의 enctype속성 값을 multipart/form-data로 만든 뒤, 실행한다.
-->
<form enctype='multipart/form-data'>
    파일 업로드<input type='file' name='attachedFile'/>
</form>





<!-- textarea 태그 자기소개서와 같은 입력 폼을 만들 때 사용한다.-->
<textarea name='longtext' cols='10' rows='5'>hello world</textarea>

<!-- select 태그 아래쪽 목록에서 selection이 가능한 태그-->
<br>
선택하세요<select name='birthMonth'>
  <option value='1'>1</option>
  <option value='2'>2</option>
  <option value='3'>3</option>
</select>

</html>
