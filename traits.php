<?php
    // class A{
    trait t1 {
        function funAlpha(){
            echo  "Function Alpha<br>";
        }
        function funBeta(){
            echo  "Function Beta<br>";
        }
    }
    class A{
        use t1;
        function funcA(){
            echo  "Function A<br>";
        }
    }
    class B extends A{
        function funcB(){
            echo  "Function B<br>";
        }
    }

    class C extends B{
        function funcC(){
            echo  "Function C<br>";
        }
    }

    $obj = new C;
    $obj->funAlpha();
    $obj->funBeta();
    $obj->funcA();
    $obj->funcB();
    $obj->funcC();

    trait t2 {
        function funGamma(){
            echo  "Function Gamma<br>";
        }
    }

    class D extends C{
        use t1,t2;
        function funcD(){
            echo  "Function D<br>";
        }
    }

    class E extends D{
        function funcE(){
            echo  "Function E<br>";
        }
    }

    echo "<br>----------------------------------------<br>";
    $obj1 = new E;
    $obj1->funAlpha();
    $obj1->funBeta();
    $obj1->funcA();
    $obj1->funcB();
    $obj1->funcC();
    $obj1->funcD();
    $obj1->funGamma();
    $obj1->funcE();

    /**
     * But i want that Class C doesn't carry on funcA as inherited function as
     * it is wasting the memory as well as i don't want anyone from C use funcA()
     * so we change class A as trait A and call it using keyword 'use'
     * the trait allows us its function only in the use called class only
     * even if that use called class is inherited further, the trait will not get inherited
     */

    trait t3 {
        public function Delta(){
            echo "t3 : Function Delta<br>";
        }
    }

    trait t4 {
        public function Delta(){
            echo "t4 : Function Delta<br>";
        }
        public function Epsilon(){
            echo "Function Epsilon<br>";
        }
    }

    class F {
        use t3,t4{
            t4::delta insteadOf t3;
            t3::Delta as delta1;
        }
        /**
         * if same function name is present in class too
         * then the member function will be executed only not the trait function
         */
        public function Epsilon(){
            echo "Class Function Epsilon<br>";
        }
    }

    $obj2 = new F();
    echo "<br>-----------------------------------<br>";
    $obj2->delta();     // function name are not case sensetive
    $obj2->delta1();     // function name are not case sensetive
    $obj2->Epsilon();

?>