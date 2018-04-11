<?php


function myPet($pet, $name){
    echo " My Pet is " .$pet." and his name is: ".$name;
}

myPet('dog', "Togas");
echo "<br>";
myPet('cat', "Mo");

function counter($a,  $b){
    echo $a+$b;
}
function counterResult($a,  $b){
    if($a > $b)
        return false;
    else
        return true;
}

echo "<br>";
counter(1,2);
echo "<br>";
if(counterResult(10,50)){
    echo "a mazesnis uz b";
}
else{
    echo "a didesnis uz b";
};
echo "<br>";

$box = "katinas";
function work(){
    $result = $GLOBALS['box'];
    return $result;
}//GLOBALUS KINTAMASIS $GLOBALS
echo work();
echo "<br>";
if(work() == 'katinas'){
    echo "mano dezuteje yra katinas";
}
else{
    echo "dezuteje kazkas kitas ... :(";
}

