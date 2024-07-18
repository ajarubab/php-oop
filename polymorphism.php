<?php
    /**
     * polymorphism means same function can do different work
     * based on different condition, parameters etc
     */

     // implementing polymorphism using Abstract class

    abstract class classA {
        abstract function abFun1();
    }

    class classB extends classA{
        public function abFun1(){
            echo "Abstarct function in class B";
        }
    }

    class classC extends classA{
        public function abFun1(){
            echo "Abstarct function in class C";
        }
    }

    $ob = new classB();
    // $ob = new classC();
    $ob->abFun1();
    echo "<br>--------------------------------<br>";


    // implementing polymorphism using Interface -------------------------

    interface intf1{
        function intFun1();
    }
    
    interface intf2{
        function intFun2();
    }

    class classD implements intf1{
        function intFun1(){
            echo "interface function 1 defined here in class D";
        }
    }

    class classE implements intf1,intf2{
        function intFun1(){
            echo "interface function 1 defined here in class E";
        }
        function intFun2(){
            echo "interface function 2 defined here in class E";
        }
    }

    // $ob1 = new classD();
    $ob1 = new classE();
    $ob1->intFun1();
    
    echo "<br>--------------------------------<br>";
    $ob2 = new classE();
    $ob2->intFun2();

?>