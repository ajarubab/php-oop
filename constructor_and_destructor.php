<?php
    class Abc{
        function __construct()
        {
            echo "Contructor here<br>";
        }

        function show() {
            return "<br>Hello Everyone.<br>";
        }

        function __destruct()
        {
            echo "<br>Destructor here.";
        }
    }

    /**
     * if we are not making object of above two functions
     * yet the program will run but those echo messages will not appear
     */
    
    
    /**
      * if we run program now after making an object, both the function will execute
      * even without calling we can see their echo messages.
    */
     $obj = new Abc();

    /**
     * Now if we want to call the show function we will need to call it using object created.
     * In this case also these contructor and destructor function will call automatically.
     */

    echo $obj->show();

    // the contructor function is always the first member function to be executed automatically
    // and the destructor function is always the last member function to be executed automatically
     

?>