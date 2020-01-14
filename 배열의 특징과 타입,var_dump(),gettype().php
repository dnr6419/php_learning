<?php
# 11 ~ 21
# 배열을 먼저 선언한 뒤, 값을 엽력한다.!!
$space = array();
$space[0] = 'earth';
$space[1] = 'moon';
$space[2] = 'jupyter';

echo "지구 : ".$space[0];
echo "<br>";
echo "달 : ".$space[1];
echo "<br>";
echo "목성 : ".$space[2];
echo "<br>";
# 배열의 인덱스는 숫자가 아닌 문자도 가능하다
$country = array();
$country['korea'] = 'seoul';
$country['china'] = 'beijing';
$country['america'] = 'LA';
# index는 키다!
$country = array('japan'=>'tokyo','philiphinas'=>'borakay','england'=>'london');
echo $country['japan'];
echo "<br>";
echo "index는 key다!";
echo "<br>";
# round함수
echo "round(1234,2) : ".round(1234,-2);
# 뒤에서 2자리까지만 영향을 받도록 반올림한다. 1200
echo "<br>";
# 배열뒤에 배열 계산하기

$earth['nation'] = array();
$earth['nation'][0] = 'korea';
$earth['nation'][1] = 'japan';
$earth['nation'][2] = 'china';
echo "earth['nation'][0] : ".$earth['nation'][0];
echo "<br>";
echo "earth['nation'][1] : ".$earth['nation'][1];
echo "<br>";
echo "earth['nation'][2] : ".$earth['nation'][2];
echo "<br>";

# array_push()
$fruit = array();
array_push($fruit,'apple','banana','grape','coconut','tangerine');

echo $fruit[0].'<br>';
echo $fruit[1].'<br>';
echo $fruit[2].'<br>';
echo $fruit[3].'<br>';
echo $fruit[4].'<br>';
# 배열의 구조 보기 = var_dump()
# index와 value의 관계를 알 수 있다.
# html의 pre 태그와 같이 사용하면 쉽게 파악이 가능하다.
echo "<pre>";
echo var_dump($fruit);
echo "</pre>";

$fruit = array();
$fruit = ['grape','strawberry','apple','alal'];
# fruit배열은 list안의 변수 수보다 많은 값을 가져야 한다.
list($first,$second,$third) = $fruit;
echo "second : ".$second;
# range 함수를 이용하여 범위의 수를 배열로 만들 수 있다.
$num = range(1,10);
echo "<pre>";
var_dump($num);
echo "count of num :".count($num);
echo "<br>";
# gettype()함수로 해당 변수의 타입을 알 수 있다.
# integer, double. string, boolean, NULL, array가 대표적인 타입이다.
$num1 = 10;
echo "\$num1의 데이터값은 {$num1}이고 타입은 ".gettype($num1).'입니다.';
