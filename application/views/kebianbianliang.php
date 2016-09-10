
$one="0";
$two="one";
$three="two";
$four="three";


echo $four ; three
echo $$four; two

$one=10;
$two=$one;

$one=100;
$two="hello";
echo $one; 100
echo $two; hello


$one=10;
$two=&$one;

$one=100;
$two="hello";
echo $one; hello;
echo $two; hello;

