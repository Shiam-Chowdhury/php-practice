<?php
// class greeting {
//   public static function welcome() {
//     echo "Hello World!";
//   }
// }

// Call static method
// greeting::welcome();

// class greeting {
//     public static function welcome() {
//         echo "Hello World!";
//     }

//     public function __construct() {
//         self::welcome();
//     }
// }

// new greeting();

// class greeting {
//     public static function welcome() {
//       echo "Hello World!";
//     }

//     protected static function myName(){
//         echo "Shiam chowdhury";
//     }
//   }
  
//   class SomeOtherClass {
//     public function message() {
//       greeting::welcome();
//     }
//   }

//   $obj = new SomeOtherClass();
//   $obj->message();

  class greeting {
    public static function welcome() {
      echo "Hello World! ";
    }

    protected static function myName(){
        echo "Shiam chowdhury";
    }
  }
  
  class SomeOtherClass extends greeting{
    public function message() {
      greeting::welcome();
      parent::myName();
    }
  }

  $obj = new SomeOtherClass();
  $obj->message();
?>