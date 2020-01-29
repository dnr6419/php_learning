<?php
# 파일의 코드를 보여주는 함수. 웹 페이지에 php파일의 코드를 출력할 수 있다.
# show_source("파일 경로와 파일명")
show_source("../001.php");
# class 사용하기
/* class 클래스명{
  code
  접근제한자 : public, protected, private
}
*/
class pen{
  public $color;
  public $bold;
  public $price;

  protected function write($contents){
    echo "{$contents}를 씁니다.<br>";
  }
  function draw($contents){
    echo "{$contents}를 그립니다..<br>";
  }
# this를 쓰고 변수를 가져올땐 $을 생략한다.
  function __construct($_color,$_bold,$_price){
    $this->color = $_color;
    $this->bold = $_bold;
    $this->price = $_price;
    echo "생성자가 실행됩니다.<br>";
  }
# 소멸자 생성 소멸자는 코드가 모두 실행되고 난뒤 자동으로 실행된다.
  function __destruct(){
    echo "소멸자가 실행됩니다.<br>";
  }
  public static function test(){
    echo "static을 사용합니다. <br>";
  } # 인스턴스(객체)를 생성하지 않아도 호출이 가능한 함수로 만든다.
}
# 상속 받기. a extends b{} : b가 부모 클래스, a가 자식클래스
class pencil extends pen{}

# $pen 클래스의 내부의 변수를 가져올 때는 $을 생략한다.
$pen = new pen("red","0.5","1$"); # 생성자는 현재 default 생성자.
# $pen->write('book'); protected에 의해 사용이 불가능하다.
echo "색깔은 ".$pen->color."<br>";
echo "굵기는 ".$pen->bold."<br>";
echo "가격 ".$pen->price."<br>";
echo "자식 클래스를 선언합니다. <br>";
$pencil = new pencil("빨간 연필","0.5","1$");
# $pencil->write(); 자식 클래스에서도 상속이 되지 않기 때문에 사용이 불가능하다.
$pencil->draw('스케치북');
pen::test();
 ?>
