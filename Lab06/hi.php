<!-- Bai 1 -->
<?php 
$x=10;
$y=7;
$plus= $x+$y;
$minus = $x-$y;
$mul = $x*$y;
$div = $x/$y;
echo '<pre>' ;
print_r("$x+$y={$plus}<br>");
print_r("$x-$y={$minus}<br>");
print_r("$x*$y={$mul}<br>");
print_r("$x/$y={$div}<br>");
echo'<pre>';
// Bia 2
function bai2(int $input){
    echo $input%5;

    switch ($input%5){
        case 0:
            echo "Hello <br>";
        break;
        case 1:
            echo "How are you ? <br>";
        break;
        case 2:
            echo "I'm doing well, thank you <br>";
        break;
        case 3:
            echo "See you later<br>";
        break;
        case 4:
            echo "Good-bye <br>";
        break;
    }
}
// bai3 
for ($i =1 ; $i<=100;$i++ ){
    if ($i%2==0){
        echo "$i ";
    }
    if(!($i%10)){
        echo "<br>";
    }
}
$i =1;
while ($i<=100){
    if ($i % 2 == 0) {
        echo "$i ";
    }
    if (!($i % 10)) {
        echo "<br>";
    }
    $i++;
}
// Bìa 4

for ($i = 1; $i<= 7;$i++){
    for ($j = 1; $j<= 7;$j++){
        echo $i*$j  ." ";
    }
    echo "<br>";
}
// bai5
?>
