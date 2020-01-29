<!-- html5 기본 구조-->
<!DOCTYPE html>

<html>
<head>
  <title>웹 페이지 제목</title>
</head>
<body>
  <form name='test' method='get' action='./get_php.php'>
    나이 : <input type='text' name='age' />
    <br>
    취미 : <input type='text' name='hobby' />
    <input type='submit' value='전송'/>
    <!-- 값을 입력하고 submit을 통해 전송하면 action에 명시된 주소로 파라미터를 전송하면서 해당 url로 이동한다.-->
  </form>
</body>
</html>
