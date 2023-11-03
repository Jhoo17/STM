<?php
declare(strict_types=1); // strict requirement

  #1. Comments
    // Ini single-line comment

    #ini juga adalah single-line comment

    /*
    Ini multiple-lines comment block
    */

  #2. Variabel
    $txt = "Hello world!";
    $a = 10;
    $b = 5;

    $txt = "Jhosua";
    echo "Nama saya $txt <BR>" ;

    echo $a + $b;


      #3. Echo/Print
    echo "<h2> Ayo Belajar PHP!</h2>";
    echo "Hello world!<br>";
    echo "Saya mau belajar PHP<br>";

    $txt1 = "Belajar PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Tempat Belajar PHP di " . $txt2 . "<br>";
    echo "<BR> $x + $y ";

    print "<h2>Kita juga bisa menggunakan 'print' untuk mengeluarkan output!</h2>";
    print "Hello world!<br>";
    print "Saya mau belajar PHP! <br>";


  #4. Data Types

    #1. Php String
    $string = ' <br> Hello world!';
    echo $string;
    #2. Php Integer 
    echo "<br>";
    $integer = 5985;
    var_dump($integer);
    #3. Php Float
    echo "<br>";
    $float = 10.365;
    var_dump($float);
    #4. Php Boolean
    echo "<br>";
    $boolean1 = true;
    $boolean2 = false;
    #5. Php Array
    echo "<br>";
    $cars = array("Volvo","BMW","Toyota");
    var_dump($cars);
    #6. Php Object
    echo "<br>";
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
          $this->color = $color;
          $this->model = $model;
        }
        public function message() {
          return "My car is a " . $this->color . " " . $this->model . "!";
        }
      }
      
      $myCar = new Car("black", "Volvo");
      echo $myCar -> message();
      echo "<br>";
      $myCar = new Car("red", "Toyota");
      echo $myCar -> message();
      #7. Php Null Value
      echo "<br>";
      $null = "Hello world!";
        $null = null;
        var_dump($null);

  #5. Php Strings
        echo "<br>";
        #1. strlen()
        echo strlen("Hello world!"); // outputs 12 
        echo "<br>";
        #2. str_word_count()
        echo str_word_count("Hello world!"); // outputs 2
        echo "<br>";
        #3. strrev()
        echo strrev("Hello world!"); // outputs !dlrow olleH
        echo "<br>";
        #4. strpos()
        echo strpos("Hello world!", "world"); // outputs 6
        echo "<br>";
        #5. str_replace()
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        echo "<br>";
    
  #6. Php Numbers
        echo "<br>";
        #1. Php Integers
        $integers = 5985;
        var_dump(is_int($integers));
        $integer = 59.85;
        var_dump(is_int($integers));
        #2. Php Float
        echo "<br>";
        $float = 10.365;
        var_dump(is_float($float));
        #3. Php Infinity
        echo "<br>";
        $x = 1.9e411;
        var_dump($x);
        #4. Php Nan
        echo "<br>";
        $x = acos(8);
        var_dump($x);
        #5. Php Numerical Strings
        echo "<br>";
        $x = 5985;
        var_dump(is_numeric($x));

        $x = "5985";
        var_dump(is_numeric($x));

        $x = "59.85" + 100;
        var_dump(is_numeric($x));

        $x = "Hello";
        var_dump(is_numeric($x));
        #6. PHP Casting Strings and Floats to Integers
        echo "<br>";
         // Cast float to int
        $x = 23465.768;
        $int_cast = (int)$x;
        echo $int_cast;
        echo "<br>";
        // Cast string to int
        $x = "23465.768";
        $int_cast = (int)$x;
        echo $int_cast;

  #7. Php Math
        echo "<br>";
        #1. PHP pi() Function
        echo(pi()); // returns 3.1415926535898
        #2. PHP min() and max() Functions
        echo "<br>";
        echo(min(0, 150, 30, 20, -8, -200));  // returns -200
        echo(max(0, 150, 30, 20, -8, -200));  // returns 150
        #3. PHP abs() Function
        echo "<br>";
        echo(abs(-6.7));  // returns 6.7
        #4. PHP sqrt() Function
        echo "<br>";
        echo(sqrt(64));  // returns 8
        #5. PHP round() Function
        echo(round(0.60));  // returns 1
        echo(round(0.49));  // returns 0
        #6. Random Numbers
        echo "<br>";
        echo(rand());
        echo "<br>";
        echo(rand(10, 100)); // angka random dengan range 10-100
    
  #8. Php Constants
        echo "<br>";
        #1. Create a PHP Constant
          //Syntax : define(name, value, case-insensitive)
          define("belajar", "Ayo Belajar PHP");
          echo belajar;
        #2. PHP const Keyword
        echo "<br>";
        const MYCAR = "Ford";
        echo MYCAR;
        #3. PHP Constant Arrays
        echo "<br>";
        define("cars", ["Ford","BMW","Supra"]);
        echo cars[1];
        #4. Constants are Global
        echo "<br>";
        define("hai", "Ayo Belajar PHP!");

        function myTest() {
        echo hai; }

        myTest();

  #9. PHP Magic Constants
        echo "<br>";
        /* 1. __CLASS__       : If used inside a class, the class name is returned.
           2. __DIR__         : The directory of the file.
           3. __FILE__        : The file name including the full path.
           4. __FUNCTION__    : If inside a function, the function name is returned.
           5. __LINE__        : The current line number.
           6. __METHOD__      : If used inside a function that belongs to a class, both class and function name is returned.
           7. __NAMESPACE__	  : If used inside a namespace, the name of the namespace is returned.
           8. __TRAIT__       : If used inside a trait, the trait name is returned.
           9.ClassName::class : Returns the name of the specified class and the name of the namespace, if any.
           */

  #10. PHP  Operators
        echo "<br>";
        #1. PHP Arithmetic Operators
        $x = 10;  
        $y = 6;
        echo $x * $y;
        #2. PHP Assignment Operators
        echo "<br>";
        $x = 10;
        $x /= 5;
        echo $x;
        #3. PHP Comparison Operators
        echo "<br>";
        $x = 100;  
        $y = "100";
        var_dump($x == $y); // returns true because values are equal 
        #4. PHP Increment / Decrement Operators
        echo "<br>";
        // Increment
        $x = 10;  
        echo ++$x;
        // Decrement
        $x = 10;  
        echo --$x;
        #5. PHP Logical Operators
        echo "<br>";
        $x = 100;  
        $y = 50;

        if ($x == 100 and $y == 50) {
        echo "Hello world!"; }
        #6. PHP String Operators
        echo "<br>";
        //Concatenation	
        $txt1 = "Hello";
        $txt2 = " world!";
        echo $txt1 . $txt2;
        echo "<br>";
        //Concatenation assignment
        $txt1 = "Hello";
        $txt2 = " world!";
        $txt1 .= $txt2;
        echo $txt1;
        #7. PHP Array Operators
        echo "<br>";
        $x = array("a" => "red", "b" => "green");  
        $y = array("c" => "blue", "d" => "yellow");  

        print_r($x + $y); // union of $x and $y
        #8. PHP Conditional Assignment Operators
        echo "<br>";
         // if empty($user) = TRUE, set $status = "anonymous"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
        echo("<br>");
        $user = "Jhosua";
         // if empty($user) = FALSE, set $status = "logged in"
        echo $status = (empty($user)) ? "anonymous" : "logged in";
  
  #11. PHP if...else...elseif Statements
        #1. PHP - The if Statement
        echo "<br>";
        /* Syntax :
        if (condition) {
        code to be executed if condition is true;
        }  */
        $t = date("H");

        if ($t < "20") {
        echo "Have a good day!";}
        #2. PHP - The if...else Statement
        echo "<br>";
        /* Syntax :
        if (condition) {
        code to be executed if condition is true;
        } else {
        code to be executed if condition is false;
        } */
        $t = date("21");

        if ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!"; }
        #3. PHP - The if...elseif...else Statement
        echo "<br>";
        /* Syntax :
        if (condition) {
        code to be executed if this condition is true;
        } elseif (condition) {
        code to be executed if first condition is false and this condition is true;
        } else {
        code to be executed if all conditions are false;
        } */
        $t = date("9");

        if ($t < "10") {
        echo "Have a good morning!";
        } elseif ($t < "20") {
        echo "Have a good day!";
        } else {
        echo "Have a good night!";}
        
  #12. PHP Switch Statement
        #1. The PHP switch Statement
        echo "<br>";
        /* Syntax :
        switch (n) {
        case label1:
        code to be executed if n=label1;
        break;
        case label2:
        code to be executed if n=label2;
        break;
        case label3:
        code to be executed if n=label3;
        break;
        ...
        default:
          code to be executed if n is different from all labels;
        } */
        $favcolor = "red";

        switch ($favcolor) {
          case "red":
        echo "Your favorite color is red!";
        break;
          case "blue":
        echo "Your favorite color is blue!";
        break;
          case "green":
        echo "Your favorite color is green!";
        break;
      default:
      echo "Your favorite color is neither red, blue, nor green!";
      }
  #13. PHP Loops
        echo "<br>";
        #1. while
        /* Syntax :
        while (condition is true) {
        code to be executed; */
        $x = 0;

        while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;}
        echo "<br>";
        $x = 0;

        while($x <= 100) {
        echo "The number is: $x <br>";
        $x+=10;} 
        #2. PHP do while Loop
        echo "<br>";
        /*Syntax : 
        do {code to be executed;
        } while (condition is true); */
        $x = 1;

        do {
        echo "The number is: $x <br>";
        $x++;
        } while ($x <= 10);
        $x = 6;
        echo "<br>";
        do {
        echo "The number is: $x <br>";
        $x++;
        } while ($x <= 5);
        #3. PHP for Loop
        echo "<br>";
        /*Syntax :
        for (init counter; test counter; increment counter) {
        code to be executed for each iteration;} */
        for ($x = 0; $x <= 10; $x++) {
          echo "The number is: $x <br>";
        }
        #4. PHP foreach Loop
        echo "<br>";
        /* Syntax :
        foreach ($array as $value) {
        code to be executed;} */
        $colors = array("red", "green", "blue", "yellow");

        foreach ($colors as $value) {
        echo "$value <br>";}
        echo "<br>";
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

        foreach($age as $x => $val) {
        echo "$x = $val<br>";}
        #5.PHP Break and Continue
        #1. PHP Break
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            break;
          }
          echo "The number is: $x <br>";
        }
        #2. PHP Continue
        echo "<br>";
        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            continue;
          }
          echo "The number is: $x <br>";
        }
        #3. Break and Continue in While Loop
        echo "<br>";
        $x = 0;

        while($x < 10) {
        if ($x == 4) {
        break; }
        echo "The number is: $x <br>";
        $x++; }
        echo "<br>";
        $x = 0;

        while($x < 10) {
        if ($x == 4) {
        $x++;
        continue; }
        echo "The number is: $x <br>";
        $x++; }
  #14. PHP Functions
        #1. Create a User Defined Function in PHP
        echo "<br>";
        function writeMsg() {
          echo "Hello Guys";
        }
        
        writeMsg(); // call the function
        #2. PHP Function Arguments
        echo "<br>";
        function familyName($fname) {
          echo "$fname Refsnes.<br>";
        }
        
        familyName("Jani");
        familyName("Hege");
        familyName("Stale");
        familyName("Kai Jim");
        familyName("Borge");

        echo "<br>";

        function namaKeluarga($namaK, $year) {
          echo "$namaK Refsnes. Born in $year <br>";
        }
        
        namaKeluarga("Hege", "1975");
        namaKeluarga("Stale", "1978");
        namaKeluarga("Kai Jim", "1983");
        #3. PHP Default Argument Value
        echo "<br>";
        function setHeight(int $minheight = 50) {
        echo "The height is : $minheight <br>"; }

        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);
        #4. PHP Functions - Returning values
        echo "<br>";
        function sum(int $x, int $y) {
        $z = $x + $y;
        return $z; }

        echo "5 + 10 = " . sum(5, 10) . "<br>";
        echo "7 + 13 = " . sum(7, 13) . "<br>";
        echo "2 + 4 = " . sum(2, 4);
        #5 PHP Return Type Declarations
        echo "<br>";
        function addNumbers(float $a, float $b) : float {
          return $a + $b;
        }
        echo addNumbers(1.2, 5.2);
        #6. Passing Arguments by Reference
        echo "<br>";
        function add_five(&$value) {
          $value += 5;
        }
        
        $num = 2;
        add_five($num);
        echo $num;
        
  #15. PHP Arrays
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        
        #1. Get The Length of an Array - The count() Function
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        echo count($cars);
        #2. PHP Indexed Arrays
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
        #3. Loop Through an Indexed Array
        echo "<br>";
        $cars = array("Volvo", "BMW", "Toyota");
        $arrlength = count($cars);
        echo "<br>";
        for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>"; }
        #4. PHP Associative Arrays
        echo "<br>";
        $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        echo "Peter is " . $age['Peter'] . " years old.";
        #5. PHP Multidimensional Arrays
        echo "<br>";
        $cars = array (
          array("Volvo",22,18),
          array("BMW",15,13),
          array("Saab",5,2),
          array("Land Rover",17,15)
        );
          
        echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

        $cars = array (
          array("Volvo",22,18),
          array("BMW",15,13),
          array("Saab",5,2),
          array("Land Rover",17,15)
        );
            
        for ($row = 0; $row < 4; $row++) {
          echo "<p><b>Row number $row</b></p>";
          echo "<ul>";
          for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
          }
          echo "</ul>";
        }
        
  #16. PHP Global Variables - Superglobals
        #1. PHP $GLOBALS
        echo "<br>";
        $x = 75;
        $y = 25; 

        function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        addition();
        echo $z;
        #2. PHP Superglobal - $_SERVER
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
