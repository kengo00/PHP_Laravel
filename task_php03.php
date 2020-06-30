<?php
//////////////////////////////////////
//Task 1
$name = "Kengo";

if($name == "Kengo"){
    echo "私はあなたの名前です\n";
}else{
    echo "あなたの名前ではありません\n";
}
echo "\n";
echo "\n";
echo "\n";
//////////////////////////////////////
//Task 2
$sum = 0;

for($i=0;$i<10000;$i++){
    $sum += $i;
}

echo $sum;
echo "\n";
echo "\n";
echo "\n";

//////////////////////////////////////
//Task 3
$fruits = ["プラム","いちじく","みかん","もも","いちご"];

foreach($fruits as $fruits){
    echo $fruits;
    echo "\n";
}
echo "\n";
echo "\n";
echo "\n";

//////////////////////////////////////
//Task 4

$start = 1;

$end = 100;

for($i = $start; $i < $end+1; $i++){

  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
