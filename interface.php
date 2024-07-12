<?php
    /**
     * Interface makes multiple inheritance (of interfaces) possible
     * Interface can only have no body functions and cannot define variables
     * No constructor is here in Interface
     * All functions in the interface should be public
     * We cannnot make object of interfaces
     * We have to use "implements" keyword when using any interface with a class
     */

    interface Int1{
        function funOne();
    }
    
    interface Int2{
        function funTwo();
    }

    class classOne implements Int1, Int2{
        function funOne(){
            echo "Fun One Function Defined here.";
        }
        
        function funTwo(){
            echo "Fun Two Function Defined here.";
        }
    }

    $obj = new classOne();
    echo $obj->funOne();
    echo "<br>";
    echo $obj->funTwo();
?>