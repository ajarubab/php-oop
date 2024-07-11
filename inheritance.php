<?php
    class Class1 {
        function __construct() {
            echo " Class1 Contructor";
        }
    }
    
    class Class2 extends Class1{
        function __construct() {
            echo " Class2 Contructor";
        }
    }

    $obj = new Class2();
    /**
     * if the child class has it's own contructor 
     * then on making object only the child class constructor will execute.
     */
?>