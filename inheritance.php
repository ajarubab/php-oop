<?php
    class Class1 {
        function __construct() {
            echo " Class1 Contructor";
        }

        function fun1() {
            echo "Class1 function.";
        }
    }
    
    class Class2 extends Class1{
        function __construct() {
            echo " Class2 Contructor";
        }

        function fun1() {
            echo "Class2 function.";
        }
    }

    $obj = new Class2();
    /**
     * if the child class has it's own contructor 
     * then on making object only the child class constructor will execute.
     * similarly if both the parent and child class have same name of member function
     * then on making object of extended class2 will show the output of child class member function
     */

    echo "<br>";
    $obj->fun1();
?>