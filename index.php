<?php

echo "<h1 class='task-title'>
loops task : </h1>";
// ======Q1=======
// remove duplicate number
echo "<h2>Q1</h2>"."<br>";
$array1=[1,1,2,3,2,5,4,6];
echo "<pre>";
print_r($array1);
for ($i=0; $i < count($array1); $i++) { 
   
    for ($j=$i+1; $j <count($array1)-$j; $j++) { 
  
      if($array1[$i]==$array1[$j]){
        array_splice($array1,$j,1);
      }
    }
}
echo "<pre>  
array after remove: 
";
print_r($array1);
// =========
// الحل باستخدام ميثود جاهزة 
// $result = array_unique($array);
// print_r($result);

echo "<hr>";
// =====Q2====
// get prime numbers under 1000
echo "<h2>Q2</h2>"."<br>";
function isPrime($num){
for ($i=2; $i <$num ; $i++) { 
if($num%$i==0){
    return false;
}
else {
    return true;
}
}
}
// نفذ اللوب اللي جايه دي يبقا حققت المطلوب 
// for ($i=2; $i < 1000; $i++) { 
//    if(isPrime($i)){

//     echo "<h1>$i</h1>"."<br>";
//    }
// }
// عملتله كومنت لأن العدد كتيير لكن الفكرة صح جربته 
// ================================

echo "<hr>";
echo "<h2>Q3</h2>"."<br>";
// Q3
// get sum of prime numbers less than 100
$sumPrimeLessThan=0;
for ($i=2; $i < 100; $i++) { 
   if(isPrime($i)){
    $sumPrimeLessThan=$sumPrimeLessThan+$i;
   }

}
echo $sumPrimeLessThan;//2499;
// =============================

// Q4
// write a php program to find the first npn repeated character in a given string 
// input :  Green => out : G 
// input : abcdea => out : B
echo "<hr>";
echo "<h2>Q4</h2>"."<br>";
$str="Green";
for ($i=0; $i <strlen($str); $i++) { 
    $falg=false;
   for ($j=$i+1; $j <strlen($str)-$i ; $j++) { 
    if($str[$i]==$str[$j]){$falg=true;}
   }
   if($falg==false){
    echo $str[$i];
    break;
   }
}
echo "<hr>";


// ====================
// Q5
// 1-2-3-4-5-6-7-8-9-10 display it without - 
echo "<h2>Q5</h2>"."<br>";
 $strnum="1-2-3-4-5-6-7-8-9-10";
 $res="";
 for ($i=0; $i < strlen($strnum); $i++) { 
    if($strnum[$i]=="-"){
// nothing
    }
    else {
$res=$res.$strnum[$i];
    }
 }
 echo $res;
//  ===================

echo "<hr>";


// Q6
// factorial 
echo "<h2>Q6</h2>"."<br>";
$factnum=5;
$resFact=1;
for ($i=$factnum; $i >1 ; $i--) { 
   $resFact=$resFact*$i;
}
echo "fact : ".$resFact;
echo "<hr>";
// ==========

// Q7
// count char in string  
echo "<h2>Q7</h2>"."<br>";
$strToCount="ERAA SOFT";
$charToCount="A";
$count=0;
for ($i=0; $i < strlen($strToCount) ; $i++) { 
   if($strToCount[$i]==$charToCount)$count++;
}
echo $count;
echo "<hr>";
// =========

// Q8
// print table 10 * 10 
// كانت صعبة جدا بالنسبالي
echo "<h2>Q8</h2>"."<br>";
$strTable="";
function printTen($num){
    $strTable="";
    for ($i=$num; $i < $num+10 ; $i++) { 
        $strTable=$strTable." 
     
       <td style='border: 1px solid black;''>$i</td>
    
     
     ";
    }
    return $strTable;
}

for ($i=0; $i <100 ; $i=$i+10) { 
        $strTable=$strTable.
        "<tr>".printTen($i+1)."</tr>";


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="icon" href="img/eraa.png type="image/x-icon"> -->
    <!-- CSS only -->
<link rel="stylesheet" href="style.css">
    <title>loop task</title>
</head>

<body>
    
<h2 style="
    text-align: center;
    margin: auto;
   
"> table</h2>  
<table style="border: 1px solid black;">
    <?php echo
    $strTable  ;
    ?>

</table>  
</body>
</html>
<?php
echo "<hr>";
// ============

// Q9
// fizz = > 3 ,  buzz => 5 , fizzBuzz=> 3,15
echo "<h2>Q9 (Fizz Buzz)</h2>"."<br>";
for ($i=1; $i <=50 ; $i++) { 
    if($i%3==0&&$i%5==0){
        echo "FizzBuzz"."<br>";
    }
    else if($i%3==0){echo "Fizz"."<br>";}
    else if($i%5==0){echo "Buzz"."<br>";}
    else{
        echo $i."<br>";
    }
    
}
// =========


// Q10
echo "<h2>Q10 </h2>"."<br>";
// مش فاهم السؤال 
?>

