<?php
class Cat {
    private $name;
    public $color;
    public $weight;

    
    function __construct(string $name, string $color, int $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }

    function setName(string $name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }
}


$cat1 = new Cat('murka', 'black', 3);
echo $cat1->getName();


var_dump($cat1);
?>
