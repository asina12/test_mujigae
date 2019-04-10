<?php
//soal 1
$num1 = 4;
$num2 =8;

echo $num1 . "<br />";
echo $num2 . "<br />";

$num1 = $num1 + $num2; //4 + 8 = 12
$num2 = $num1 - $num2; //12 – 8 = 4
$num1 = $num1 - $num2; //12 – 4 = 8

echo $num1 . "<br />";
echo $num2 . "<br />";

echo "<br />";

//soal 2
for($i=1; $i<=100; $i++){
	if($i%3 == 0 && $i%5 == 0){
		echo "FizzBuzz";
	}else if($i%3 == 0){
		echo "Fizz";
	}else if($i%5 == 0){
		echo "Buzz";
	}else{
		echo $i;
	}
	
	echo "<br />";
}

echo "<br />";


//soal 3
$n = 4; //input

for($i=1; $i<=$n; $i++){
	$jum_spasi = $n-$i;
	
	for($j=1; $j<=$jum_spasi; $j++){
		echo "&nbsp;&nbsp;";
	}
	
	for($j=$jum_spasi + 1; $j<=$n; $j++){
		echo "#&nbsp;";
	}
	
	echo "<br />";
}

?>