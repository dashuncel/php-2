<?php
$x = $_GET['x'];
//$x = rand(0, 100);
echo "Число ".$x."</br>";
$a = 1;
$b = 1;
$c;
do {
  if ($a > $x) {
    echo 'Задуманное число "'.$x.'" не входит в числовой ряд';
    break 1;
  }
  elseif ($a == $x) {
    echo 'Задуманное число "'.$x.'" входит в числовой ряд';
    break 1;
  }
  else {
    $c = $a;
    $a = $a + $b;
    $b = $c;
    //echo $a."-".$x."</br>";
  }
} while (true)
?>