<?php 

class Car{
    private $color;
    private $year;
    private $weight;

    public function __construct($color, $weight) {
        $this->color= $color;
        $this->weight = $weight;
    }
    public function getColor() {
       return $this->color;
    }

    public function __destruct()
    {
        echo "i am destroyed".$this->color.PHP_EOL;
    }

}

$myCar = new Car('red', 2500);
$myCar1 = new Car('blue', 2100);

echo $myCar->getColor().PHP_EOL;
echo '<br>';
echo $myCar1->getColor().PHP_EOL;  

unset($myCar);
sleep(2);

?>