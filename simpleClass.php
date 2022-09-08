<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Fruit {
        // Properties
        public $name;
        public $color;
        public $weight;

        // Methods
        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }

        function set_color($color) {
            $this->color = $color;
        }

        function get_color() {
            return $this->color;
        }

        function setWeight($weight){
            $this->weight = $weight;
        }

        function getWeight(){
            return $this->weight;
        }

    }

    $apple = new Fruit();
    $apple->set_name('Apple');
    $apple->set_color('Red');
    $apple->setWeight(10);

    echo "Name: " . $apple->get_name();
    echo "<br>";
    echo "Color: " . $apple->get_color();
    echo "<br>";
    echo "Weight: " . $apple->getWeight() . ' kg.';
?>
</body>
</html>