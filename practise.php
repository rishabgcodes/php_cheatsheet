<?php
// echo "hello php duniya ";


// ----------------------------creating a variable----------------------------- 

// $a = 12;
// $b = 12;
// $c = 12;
// echo "The value of a is <br>".$a."and the value of b is <br>".$b."The value of c is ".$c;

// $string = "My name is rishabh gupta";
// echo $string;

// ----------------------------- Arrays ------------------------------------------

// $fruits = array('apple' , 'mango' , 'grapes' , 'banana' ,'orange ');
// var_dump($fruits);



// ------------------------------string functions -------------

// $str1 = "my name is rishabh gupta ";

// echo $str1;
// echo "<br>";
// echo "The word count is ". str_word_count($str1);
// echo "<br>";
// echo "the reverse of the string is :". strrev($str1);
// echo "<br>";
// echo "The position of rishabh in string is : ". strpos($str1,'rishabh');
// echo "<br>";
// echo "The replacement of rishabh is rishu in string :". str_replace('rishabh','rishu',$str1);




// ------------------------------creating a goobal variable -----------------------


define("PI",3.14);
// echo PI;


// ------------------------------operators in php ---------------------

// arithematic 
// assignment
// comparision 
// increment 
// decrement 
// logical
// string 
// array


// 1. arithematic operATOR
// echo "The value of 2 + 3 is :",3+2,"<br>";
// echo "The value of 2 * 3 is :",3*2,"<br>";


// 2. aSSIGNMENT OPERATOR
// $x=4;
// echo $x,"<br>";
// $x=$x-1;
// echo $x;

// 3. Increment and decrement operator 
// $x=5;
// echo $x,"<br>";
// $x++;
// $x--;
// echo $x;



// ------------------------------------- if and else in php -------------------------

// $t = date("H");
// echo $t,"<br>";
// if($t>6)
// {
//     echo "this is good time ".$t;
// }
// // else if($t==9){
// //     echo "this is 9";
// // }
// else
// {
//     echo "Bad luck ";
// }


// echo date_default_timezone_get();



// -------------------loops in php -------------------

// 1. while loop 

// $var1 = 1;
// while($var1<=4){
//     echo "The current value is".$var1."<br>";
//     $var1++;
// }

// while loop with continue statement 


// $var1=1;
// while($var1<=4){
//     if($var1==3)
//     {
//         $var1++;
//         continue;
//     }
//     echo "The current value is ".$var1."<br>";

//     $var1++;
// }

// while loop with break statement 

// $var1 = 1;
// while($var1<=4){
//     if($var1==3){
//         $var1++;
//         break;
//     }
//     echo "The value is ".$var1."<br>";
//     $var1++;
// }


// 2. for loop 

// for($i=0;$i<6;$i++){
//     echo "The current value is ".$i."<br>";
// }

// 3. do while loop 
// $i=1;
// do{
//     echo "The current value is ".$i."<br>";
//     $i++;
// }
// while($i<5)


// 4 for each loop 

// $colors = array("red","green","yellow");
// foreach($colors as $value){
//     echo "$value <br>";
// }



// ----------------------functions -----------------------



// function average_numbers($num1,$num2)
// {
//     $average = ($num1 + $num2)/2;
//     return $average; 
// }
// echo "The average of the numbers is : ". average_numbers(3,4);

// function area_circle($radius)
// {
//     $area = PI*$radius*$radius;            //we dont need $ in global variable 
//     return $area;
// }
// echo "The area of the circle is :".area_circle(1);
//




// ----------------------operation in array -------------------

// $numbers = array(4,3,6,22,11);
// sort($numbers);
// $len = count($numbers);
// for ($i=0 ; $i<=$len ; $i++){
//     echo $numbers[$i];
//     echo "<br>";
// }
?>
