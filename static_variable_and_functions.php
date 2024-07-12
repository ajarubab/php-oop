<?php

/**
 * if we want to access member variables and member functions of a class without using object, we make it static.
 * Static functions and variable are accessed directly using class name with scope resolution operator
 * Even constructor will not execute here IF there is no object created;
 * If object created our constructor will get executed
 * We can get our sattic variable value using 'self::' keyword 
 * We cannot access any normal variable value into static function using "$this" keyword
 */
    class MyClass{
        static public $x = 10;
        public $y = 20;
        function __construct()
        {
            echo "This is constructor message<br>";
            echo self::$x," * 10 = ".self::$x*10;

        }
        
        static function showVal() {
            echo "The value is ".self::$x;
            // echo "The value is ".$this->$y;      // error
        }
        
        static function show() {
            echo "This is Static Function Statement";
        }
    }
    
    echo "<br>---------------------------------<br>";
    $obj = new MyClass();
    echo "<br>---------------------------------<br>";
    echo MyClass::showVal();
    echo "<br>---------------------------------<br>";
    echo MyClass::$x;
    echo "<br>---------------------------------<br>";
    echo MyClass::show();
?>