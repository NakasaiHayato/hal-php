<?php
echo "演習1";
echo "<br>";

$name = "S水";
echo "こんにちは{$name}さん";

echo "<br>";

echo "演習2";
echo "<br>";

$pay = 200;
echo "合計金額¥{$pay}です";

echo "<br>";

echo "演習3";
echo "<br>";

for($i=0; $i<3; $i++){
   echo "hello";
   echo "<br>";
}

echo "演習4";
echo "<br>";

for($i=3; $i>0; $i--){
    echo "残り{$i}";
    echo "<br>";
}

echo "演習5";
echo "<br>";

$count = 0;
while($rand != 77){
    $rand = rand(1,100);
    $count++;
}
echo $count;

echo "<br>";

echo "演習6";
echo "<br>";

$count2 = 0;
while($rand2 != 77){
    $rand2 = rand(1,100);
    $count2++;
    echo "{$count2}回目:{$rand2}";
    echo "<br>";
}
echo "{$count2}回目でHit!";

echo "<br>";

echo "演習7";
echo "<br>";

$sum = 0;
for($i=0; $i<11; $i++){
    $sum += $i;
}
echo $sum;

echo "<br>";

echo "演習8";
echo "<br>";

for($i=0; $i<11; $i++){
    echo $i;
    echo "<br>";
}

echo "演習9";
echo "<br>";

for($i=0; $i<11; $i++){
    if($i % 2 == 0){
       echo "{$i}：偶数<br>";
    }else{
       echo "{$i}：奇数<br>";
    }
}

echo "演習10";
echo "<br>";

for($i=0; $i<11; $i++){
   echo "□";
}

echo "<br>";

echo "演習11";
echo "<br>";

for($i=0; $i<11; $i++){
    if($i % 2 == 0){
       echo "□";
    }else{
       echo "■";
    }
}

echo "<br>";

echo "演習12";
echo "<br>";

for($j=0; $j<3; $j++){
    for($i=0; $i<11; $i++){
        if($i % 2 == 0){
           echo "□";
        }else{
           echo "■";
        }
    }
    echo "<br>";
}

echo "<br>";

echo "演習13";
echo "<br>";

for($j=1; $j<10; $j++){
    for($i=1; $i<10; $i++){
        $sum = $i * $j;
        echo $sum."\n";
    }
    echo "<br>";
}

echo "<br>";

echo "演習14";
echo "<br>";

for($j=1; $j<10; $j++){
    for($i=1; $i<10; $i++){
        $sum = $i * $j;
        echo "{$i} * {$j} = {$sum}\n";
    }
    echo "<br>";
}

echo "<br>";

echo "演習15";
echo "<br>";

echo "<table border='1'>";
for($j=1; $j<10; $j++){
    echo "<tr>";
    for($i=1; $i<10; $i++){
        echo "<td>";
            $sum = $i * $j;
            echo "{$i} * {$j} = {$sum}\n";
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>