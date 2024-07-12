<?php
    class Class1 {
        public $x;
        function __construct() {
            $this->x = 5;
            // echo " Class1 Contructor<br>";
        }

        function fun1() {
            // echo "Class1 function.";
        }
    }
    
    class Class2 extends Class1{
        function __construct() {
            parent::__construct();  
            echo "abtak x value hai : $this->x <br>";
            $this->x = 90 ;
            echo "ab x ki value hai : $this->x";
            // echo "Class2 Contructor";
        }

        function fun1() {
            // echo "Class2 function.";
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
    echo "<br>";
    $obj->fun1();

    /**
     * if we put the parent class contructor calling statement before
     * the same child class variable name declaration statement
     * we will get the output of variable x of child class value i.e 90 here
     * but if we put our child class local vaiable name declaration above the
     * parant class contructor calling statement, we will get  the value of parent class variable i.e 5 here
     */
    echo $obj->x;
?>