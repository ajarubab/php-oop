<?php
    class Class1 {
        function __construct() {
            echo " Class1 Contructor";
        }
    }
    
    class Class2 extends Class1{
    }

    $obj = new Class2();
?>