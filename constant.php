<?php
// class Goodbye {
//   const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
// }

// echo Goodbye::LEAVING_MESSAGE;
?>

<?php

class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;  // :: => scope resolution operator
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>