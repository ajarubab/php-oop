<?php
    class ParentClass{
        public $x;
        protected $y;
        private $z;
        function __construct(){
            $this->x = 7;
            $this->y = 5;
            $this->z = 90;

        }

        
        public function addNumPublic() {
            echo "----------------------------------------------------------------";
            echo "<br>Parent class<br>";
            echo "<br>";
            echo "value of x in addnum function : 5 + $this->x = ".(5 + $this->x);
            echo "<br>";
            echo "value of y in addnum function : 5 + $this->y = ".(5 + $this->y);
            echo "<br>";
            echo "value of z in addnum function : 5 + $this->z = ".(5 + $this->z);
            echo "<br>";
            echo "----------------------------------------------------------------";
        }
        
        
        /*
        protected function addNumProtected() {
            echo "<br>";
            echo "value of x in addnum function : 5 + $this->x = ".(5 + $this->x);
            echo "<br>";
            echo "value of y in addnum function : 5 + $this->y = ".(5 + $this->y);
            echo "<br>";
            echo "value of z in addnum function : 5 + $this->z = ".(5 + $this->z);
            echo "<br>";
        }

        public function byPassProtectedFunction(){
            return $this->addNumProtected();
        }
        */
        
        /*
        private function addNumPrivate() {
            echo "<br>";
            echo "value of x in addnum function : 5 + $this->x = ".(5 + $this->x);
            echo "<br>";
            echo "value of y in addnum function : 5 + $this->y = ".(5 + $this->y);
            echo "<br>";
            echo "value of z in addnum function : 5 + $this->z = ".(5 + $this->z);
            echo "<br>";
        }

        public function byPassPrivateFunction(){
            return $this->addNumPrivate();
        }
        */
    }

    class ChildClass extends ParentClass {
        function setVal($x, $y){
            $this->x = $x;
            $this->y = $y;
        }
        
        function getVal(){
            return ($this->x + $this->y);
        }
        
        public function addNumPublic() {
            echo "<br>----------------------------------------------------------------";
            echo "<br>Child class<br>";
            echo "<br>";
            echo "value of x in addnum function : 15 + $this->x = ".(15 + $this->x);
            echo "<br>";
            echo "value of y in addnum function : 15 + $this->y = ".(15 + $this->y);
            echo "<br>";
            // echo "value of z in addnum function : 15 + $this->z = ".(5 + $this->z);
            // echo "<br>";
            echo "----------------------------------------------------------------<br>";
            parent::addNumPublic();
        }

        /*
        protected function addNumProtected() {
            echo "<br>";
            echo "value of x in addnum function : 5 + $this->x = ".(5 + $this->x);
            echo "<br>";
            echo "value of y in addnum function : 5 + $this->y = ".(5 + $this->y);
            echo "<br>";
            // echo "value of z in addnum function : 5 + $this->z = ".(5 + $this->z);      //Warning: Undefined property: ChildClass::$z
            // echo "<br>";
        }

        public function byPassProtectedFunction(){
            return $this->addNumProtected();
        }
        */
    }

    $obj = new ChildClass();
    // echo $obj->x;
    // echo $obj->y;    // can fetch vaue inside defining class or just child class of defining class
    // echo $obj->z;    // can fetch value only in defining class
    // echo "<br>";
    // echo $obj->y;       //Fatal error: Cannot access protected property directly
    // echo "<br>";
    // echo $obj->setVal(15,25);
    // echo "<br>";
    // echo $obj->getVal();
    // echo "<br>";
    
    
    echo $obj->addNumPublic();
    // echo $obj->addNumProtected();
    // echo $obj->byPassProtectedFunction();

    // echo $obj->addNumPrivate();     // Fatal error: Call to private method from global scope
    // echo $obj->byPassPrivateFunction(); // getting values
    
    // $obj1 = new ParentClass();
    // $obj1 ->addNumPrivate();            // Fatal error: Call to private method from global scope
    // echo $obj1->byPassPrivateFunction(); // getting values


?>