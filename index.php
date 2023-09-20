<?php
//Task 1: Looping with Increment using a Function
echo"Task 1: Looping with Increment using a Function \n";

//for loop to print all even numbers from 1 to 20,


echo"for loop to print all even numbers from 1 to 20, \n";

for($i=1; $i<=20; $i++){
    if($i % 2 == 0){
        echo$i;
        echo PHP_EOL;
    }
}


//while loop to print all even numbers from 1 to 20,


echo"while loop to print all even numbers from 1 to 20,\n";



$i=0;
while($i<20){
    $i++;

    if($i % 2 == 0){
        
             echo$i;
             echo PHP_EOL;
         }
}


//do while loop to print all even numbers from 1 to 20,
echo"do while loop to print all even numbers from 1 to 20,\n";

$i=0;
do{
        $i++;
        if($i%2==0){

        echo$i;
        echo PHP_EOL;
        }

}while($i<20);


//The function should take the arguments like start as 1, end as 20 and step as 2. You must call the

echo"The function should take the arguments like start as 1, end as 20 and step as 2. You must call the \n";
function printNumber($start,$end,$stepping){
        if($start <= $end){
                return;
        }
        echo $start."\n";
        $start+=$stepping;
        printNumber($start,$end,$stepping);
        
}
printNumber(1,20,2);

//Task 2: Skip Multiples of 5

echo"Task 2: Skip Multiples of 5 \n";

for($i=1;$i<=50;$i+=1){
        if($i<5){
        continue;
        }
        echo $i;
        echo PHP_EOL;
}


// Task 3: Break on Condition.
echo"Task 3: Break on Condition.\n";

// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. 
echo"Write a PHP program that calculates and prints the first 10 Fibonacci numbers.\n";

function fibonacciNumber($old,$new,$start,$end){
    static  $start;
    $start = $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;
    echo $old."\n";
    $_temp = $old+$new;
    $old = $new;
    $new = $_temp;
    fibonacciNumber($old,$new,$start,$end);

}
fibonacciNumber(0,1,0,10);

//Fibonacci number is greater than 100, break out of the loop using the break statement.
echo"Fibonacci number is greater than 100, break out of the loop using the break statement.\n";

function fibonacciBrack($start,$end) {
        if($start > $end){
                return;
        }
        $start++;
        echo $start."\n";
        fibonacciBrack($start,$end);

}
fibonacciBrack(1,100);


//Task 4: Fibonacci Series printing using a Function.

echo "Task 4: Fibonacci Series printing using a Function. \n";
function fibonacciSeries ($old,$new,$start,$end){
    static  $start;
    $start = $start ?? 1;
    if($start > $end){
        return;
    }
    $start++;
    echo $old."\n";
    $_temp = $old+$new;
    $old = $new;
    $new = $_temp;
    fibonacciSeries ($old,$new,$start,$end);

}
fibonacciSeries(0,1,0,15);


?>