<?php

    // echo "Hello World <br>";

    //comment
    /* 
    multiple comment
    */
    
    // variable
    // $myname = "Prodip <br>";
    // echo $myname;
    // $myName = "Dipto";
    // echo $myName;


    // variable scop
    // local, global, static

    // local
    /*$number1 = 10;
    function testing(){
        $number2 = 10;
        echo $number2;
    }

    testing();
    echo $number2;
    */

    // global 
     /* $number1 = 30;
     function testing(){
         $number2 = 10;
         echo $number2;
     }

     echo $number1; 
     testing();
     */
     
    //  static

   /* $number1 = 30;
    function testing(){
       static $number2 = 10;
        echo $number2 . "<br>";
        $number2--;
    }

    // echo $number1 . "<br>"; 
    testing();
    testing();
    testing();
    testing();
    // echo $number2 = 500 . "<br>";
*/

// data type
// string
/*
$language1 = "HTMLCSS <br>";
$language2 = 'HTMLCSS <br>';
echo $language1;
echo $language2;
var_dump($language2);
*/
/*
// int
$num = 1000;
echo $num;
var_dump($num);
*/

/*
// float
$num = 1.000;
echo $num;
var_dump($num);
*/


// boolean
/* 
$isvalid = false;
$isvalid = true;
echo $isvalid;
echo var_dump ($isvalid); 
*/

// array

// object

class Fruits{
    public $name;
    public $colors;

    public function setname ($name) {
        $this->name = $name;
    }
    public function getname () {
        return $this->name;
    }
}
$apple=new Fruits();
$apple->setname("apple");
echo $apple->getname() . "<br>";

$mango=new Fruits();
$mango->setname("mango");
echo $mango->getname();


/*// null 
$fruits = "Apple";
$fruits = null;
echo $fruits;
var_dump($fruits); 
*/
    

     
?>