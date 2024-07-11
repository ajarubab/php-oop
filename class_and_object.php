<?php
    class Abc {
        public $x = 100;

        function preIncr() {
            return ++$this->x;
        }

        function postIncr() {
            return $this->x++;
        }
    }

    echo "-----------pre increment below-------------<br>";
    
    echo "<br>";
    echo "For OBJECT 1";
    echo "<br>";
    echo "<br>";
    
    $obj1 = new Abc();
    echo "value of x in the class initially is : $obj1->x";
    echo "<br>";
    echo "After iterating preIncr function first time value of x is : ". $obj1->preIncr();
    echo "<br>";
    echo "After iterating preIncr function second time value of x is : ". $obj1->preIncr();
    
    echo "<br>";
    echo "<br>";
    echo "For OBJECT 2";
    echo "<br>";
    echo "<br>";

    $obj2 = new Abc();
    echo "value of x when multiplied by 5 is : ". 5*$obj2->x;
    echo "<br>";
    echo "After iterating preIncr function first time value of x is : ". 2 * $obj2->preIncr();
    echo "<br>";
    echo "After iterating preIncr function second time value of x is : ". 2 * $obj2->preIncr();


    echo "<br>";
    echo "<br>";
    echo "-----------post increment below-------------<br>";

    echo "<br>";
    echo "<br>";
    echo "For OBJECT 3";
    echo "<br>";
    echo "<br>";

    $obj3 = new Abc();
    echo "value of x in the class initially is : $obj3->x";
    echo "<br>";
    echo "After iterating preIncr function first time value of x is : ". $obj3->postIncr();
    echo "<br>";
    echo "After iterating preIncr function second time value of x is : ". $obj3->postIncr();

    
    echo "<br>";
    echo "<br>";
    echo "For OBJECT 4";
    echo "<br>";
    echo "<br>";

    $obj4 = new Abc();
    echo "value of x when multiplied by 5 is : ". 5*$obj4->x;
    echo "<br>";
    echo "After iterating preIncr function first time value of x is : ". 2 * $obj4->postIncr();
    echo "<br>";
    echo "After iterating preIncr function second time value of x is : ". 2 * $obj4->postIncr();

?>