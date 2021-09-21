<?php 

class Car{
    private $name;
    public $color = 'red';
    private $year;
    private $availableColors = ['red', 'green', 'pink'];


    public function setYear($year)
    {
        $this->year = $year;
    }

    Public function getYear()
    {
        return $this->year;
    }


    public function setColor($color)
    {
        if(in_array($color, $this->availableColors)){
            $this->color = $color;
        }
        
    }

    Public function getColor()
    {
        return $this->color;
    }

}

$myCar = new Car();

// $myClass->name = 'BMW';
// echo $myClass->name;

$myCar->setColor('pink');
echo $myCar->getColor();
echo "<br>";

$myCar->setYear(1992);
echo $myCar->getYear();



?>
