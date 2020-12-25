<?php 
/*
1) swaping number or string without third variable
2) reverse string / number
3) pallindrome
4) armstrong number
5) odd / even number
6) prime number
7) array sorting
8) remove duplicate from array
9) factorial number
10) fibonacci series
11) leap year
12) create function to print only odd value 1 - 1,3 - 1,3,5
13) circular prime number below 100 ex: 13 & 31
14) pascal triangle
-------------------------

*/

echo '1) swaping number or string without third variable<br/>';
$n1 = 5; $n2 = 1;
echo 'before swapping n1='.$n1.' and n2='.$n2;
$n1 = $n1 + $n2;
$n2 = $n1 - $n2;
$n1 = $n1 - $n2;
echo '<br/>after swapping n1='.$n1.' and n2='.$n2;

$str1 = "omkar";
$str2 = "kshirsagar";
echo '<br/>before swapping str1='.$str1.' and str2='.$str2;
list($str2, $str1) = array($str1, $str2);
echo '<br/>after swapping str1='.$str1.' and str2='.$str2;

$n1 = 5; $n2 = 1; $n3 = 10;
echo '<br>before swapping n1='.$n1.' and n2='.$n2.' and n3='.$n3;
$n1 = $n1 + $n2 + $n3;
$n2 = $n1 - $n2 - $n3;
$n3 = $n1 - $n2 - $n3;
$n1 = $n1 - $n2 - $n3;
echo '<br>after swapping n1='.$n1.' and n2='.$n2.' and n3='.$n3;

echo '<br/>2) reverse string / number<br/>';
$str = "omkar";
echo $str."<br/>";
for($i=strlen($str);$i>=1;$i--){
	echo $str[$i - 1];
}
echo '<br />';

$num = 123;
$rev = 0;
$rem = 0;
echo 'original number: '.$num;
while($num > 0){
	$rem = $num % 10;
	$rev = ($rev * 10) + $rem;
	$num = intval($num / 10);
}
echo '<br />reverse number: '.$rev;

echo '<br />3) pallindrome<br />';
$num = 155; $number = $num;
$rev = 0;
$rem = 0;
echo 'original number: '.$num.'<br />';
while($num > 0){
	$rem = $num % 10;
	$rev = ($rev * 10) + $rem;
	$num = intval($num / 10);
}
if($rev == $number){ 
	echo $number.' is pallindrome number'; 
}else{ 
	echo $number.' is not pallindrome number'; 
}

$str = "madam"; $str1 = ""; $str2 = $str;
echo '<br>original string: '.$str.'<br>';
for($i=strlen($str);$i>=1;$i--){
	$str1.= $str[$i-1];
}
if($str1 == $str2){ 
	echo $str2.' is pallindrome string'; 
}else{ 
	echo $str2.' is not pallindrome string'; 
}


echo '<br/>4) armstrong number';
$num = 232; $number = $num;
$rev = 0;
$rem = 0;
echo '<br/>original number: '.$num.'<br />';
while($num > 0){
	$rem = $num % 10;
	$rev = $rev + ($rem * $rem * $rem); //27 + 125 + 1 = 153
	$num = intval($num / 10);
}

if($rev == $number){ 
	echo $number.' is armstrong number'; 
}else{ 
	echo $number.' is not armstrong number'; 
}

echo '<br/>5) odd / even number<br />';
$num = 7;
if($num % 2 == 0){
	echo $num.' is even number';
}else{
	echo $num.' is odd number';
}


echo '<br/>6) prime number<br/>';
$num = 7; $count = 0;
for($i=1;$i<=$num;$i++){
	if($num % $i == 0){
		$count++;
	}
}

if($count == 2){
	echo $num.' is prime number';
}else{
	echo $num.' is not prime number';
}

echo '<br>7) array sorting<br>';
$arr = array(4,9,3,6,1,8,10,0);
echo 'original array '; print_r($arr); echo '<br>';
for($i=0;$i<count($arr);$i++){
	for($j=0;$j<count($arr)-1;$j++){
		if($arr[$j] > $arr[$j + 1]){
			$temp = $arr[$j + 1];
			$arr[$j + 1] = $arr[$j];
			$arr[$j] = $temp;
		}
	}
}
echo 'array sort by ascending order '; print_r($arr); echo '<br/>';

echo '<br>8) remove duplicate from array<br>';
$arr = array(1,5,7,8,1,4,9,4,3,6);
echo 'original array '; print_r($arr); echo '<br>';
$arr_key = array();

foreach($arr as $val){
	$arr_key[$val] = $val;
}

$arr_final = array();
foreach($arr_key as $val){
	$arr_final[] = $val;
}

print_r($arr_final);

echo '<br>9) factorial number<br>';
$num = 4; $res = 1;
for($i=1;$i<=$num;$i++){
	$res = $res * $i;
}

echo "factorial of $num! is : ".$res;

echo '<br>10) fibonacci series<br>';
$x = 0;
$y = 1;
$limit = 5; //1 1 2 3 5 8
echo $y."\t";
for($i=0;$i<$limit;$i++){
	$z = $x + $y;
	echo $z."\t";
	
	$x = $y;
	$y = $z;
} 


echo '<br>11) leap year<br>';
$year = 2012;

if(($year % 4 == 0) && ($year / 100 != 0) || ($year % 400 == 0)){
	echo $year.' is leap year';
}else{
	echo $year.' is not leap year';
}

echo '<br>12) create function to print only odd value 1 - 1,3 - 1,3,5<br>';
function show($num){
	$count = 0; $i = 1;
	$numbers = array();
	while($i > 0){
		if($num == $count){
			break;
		}
		$numbers[] = $i;
		
		$i += 2;
		$count++;
	}
	
	return (implode(',',$numbers));
}

echo show(5);

echo '<br>13) circular prime number below 100 ex: 13 & 31<br>';
$limit = 100; $arr = array(); $arr1 = array(); $arr2 = array();
for($i=1;$i<=$limit;$i++){
	if(isPrime($i) == 1){
		$arr[] = $i;
	}
}
$arr1 = $arr;

foreach($arr as $key=>$val){
	if(in_array(numReverse($val), $arr1)){
		$arr2[] = $val;
	}
}

function isPrime($num){
	$count = 0;
	for($i=1;$i<=$num;$i++){
		if($num % $i == 0){
			$count++;
		}
	}
		if($count == 2){
			return 1;
		}else{
			return 0;
		}
}

function numReverse($num){
	$rev = 0; $rem = 0;
	while($num > 0){
		$rem = $num % 10;
		$rev = ($rev * 10) + $rem;
		$num = intval($num / 10);
	}
	return $rev;
}

echo 'Prime Number Below 100: '.$str = implode(',',$arr); 
echo '<br>';
echo 'circular prime number below 100: '.$str1 = implode(',',$arr2);

echo '<br>pyramid structure<br>';
/*
	 * 
    * * 
   * * * 
  * * * * 
 * * * * * 
*/
for($i=5;$i>=1;$i--){
	for($k=$i;$k>=1;$k--){
		echo '&nbsp;';
	}
	for($j=$i;$j<=5;$j++){
		echo '*&nbsp;';
	}
	echo '<br/>';
}
echo '<hr />';
/*
 * * * * * 
  * * * * 
   * * * 
    * * 
     * 
*/
for($i=1;$i<=5;$i++){
	for($k=$i;$k>=1;$k--){
		echo '&nbsp;';
	}
	for($j=$i;$j<=5;$j++){
		echo '*&nbsp;';
	}
	echo '<br/>';
}

echo '<hr />';
/*
* 
* * 
* * * 
* * * * 
* * * * * 
*/
for($i=5;$i>=1;$i--){
	for($j=$i;$j<=5;$j++){
		echo '*&nbsp;';
	}
	echo '<br/>';
}

echo '<hr />';
/*
* * * * * 
* * * * 
* * * 
* * 
* 
*/
for($i=1;$i<=5;$i++){
	for($j=$i;$j<=5;$j++){
		echo '*&nbsp;';
	}
	echo '<br/>';
}

echo '<hr />';
echo '<p align="right">';
for($i=1;$i<=5;$i++)
{
echo  str_repeat('*',$i);
echo "<br />";
}
echo "</p>";

echo '<hr />';
/*
	A 
   B B 
  C C C 
   B B 
    A 
*/
$n = 5;
$char = 'A'; $char1 = 'C';
	for($i=$n-2;$i>=1;$i--){
		for($k=$i;$k>=1;$k--){
			echo '&nbsp;';
		}
		for($j=$i;$j<=$n-2;$j++){
			echo $char.'&nbsp;';
		}
		echo '<br/>';
		$char++;
	}
	$char = chr(ord($char) - 2 );
	for($i=1;$i<=$n-3;$i++){
		
		for($k=$i;$k>=1;$k--){
			echo '&nbsp;&nbsp;';
		}
		for($j=$i;$j<=$n-3;$j++){
			echo $char.'&nbsp;';
		}
		echo '<br/>';
		$char = chr(ord($char) - 1 );
	}

echo '<hr/>';
/*
1 
2 2 
3 3 3 
4 4 4 4 
5 5 5 5 5
*/
$count = 1;
for($i=5;$i>=1;$i--){
	for($j=$i;$j<=5;$j++){
		echo $count.'&nbsp;';
	}
	echo '<br>';
	$count++;
}	

echo '<hr/>';
/*
1 
2 3 
4 5 6 
7 8 9 10 
11 12 13 14 15 
*/
$count = 1;
for($i=5;$i>=1;$i--){
	for($j=$i;$j<=5;$j++){
		echo $count.'&nbsp;';
		$count++;
	}
	echo '<br>';
}	

echo '<hr />';

/*
1
121
12321
1234321
*/
$count = 1;
for($i=4;$i>=1;$i--){
	for($k=$i;$k>=1;$k--){
		echo '&nbsp;';
	}	
	for($j=$i;$j<=4;$j++){
		echo $count;
		$count ++;
	}
	echo 1;
	echo '<br />';
	$count = 1;
}

/*
pascal triangle
*/
$n = 5;
print("<table>");
$e = "<td>&nbsp;</td>";
for ($i=0; $i<=$n; $i++)
{
    $row = array();
    $row[] = 1;
    $s = str_repeat($e,$n-$i);
    print("<tr>$s");
    for ($j=0; $j<$i; $j++)
    {
        if ($j)
        {
            $row[] = $prev[$j-1]+$prev[$j];
            print($e);
        }
        print("<td>$row[$j]</td>");
    }
    $row[] = 0;
    $prev = $row;
    print("$s</tr>");
}
print("</table>");

echo '<hr>';
$arr = array(0=>0,'a'=>'a',1=>1,'b'=>'b');

sort($arr);

print_r($arr);

/*
Find a a maximum value from an array without using any php function

*/

$array = array(45,40,78,4,87,110,10);
$temp = 0;
for($i=0;$i<sizeOf($array);$i++){
    if($array[$i]>$temp){
        $temp = $array[$i];
    }
}
echo $temp;



