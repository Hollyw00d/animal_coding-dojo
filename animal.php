<?php
class Animal
{
    public $name;
    public $health;

    public function __construct($name)
    {
        $this->name = $name;
        $this->health = 100;
    }

    public function walk()
    {
        $this->health -= 1;
        echo 'walk, ';
        return $this;
    }

    public function run()
    {
        $this->health -= 5;
        echo 'run, ';
        return $this;
    }

    public function displayHealth()
    {
        echo '<br /><strong>Animal Name:</strong> ' . $this->name . '<br />';
        echo '<strong>Animal Health:</strong> ' . $this->health . '<br />';
        echo '<br />';

        return $this;
    }
}

class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->health = 150;
    }

    public function pet()
    {
        $this->health += 5;
        echo 'pet, ';
        return $this;
    }
}

class Dragon extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
        $this->health = 170;
    }

    public function fly()
    {
        $this->health -= 10;
        echo 'fly, ';
        return $this;
    }

    public function displayHealth()
    {
        echo '<br /><strong>Dragon Message: </strong><em>This is a dragon!</em>';
        parent::displayHealth();
    }
}

echo '<h2>$animal Object Instance of the Animal Class with Various Invoked Methods</h2>';
$animal = new Animal("animal");
$animal->walk()->walk()->walk()->run()->run()->displayHealth();

echo '<h2>$black_lab Object Instance of the Dog Subclass (of the Animal Parent Class) with Various Invoked Methods</h2>';
$black_lab = new Dog("Bo");
$black_lab->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

echo '<h2>$crazy_dragon Object Instance of the Dragon Subclass (of the Animal Parent Class) with Various Invoked Methods</h2>';
$crazy_dragon = new Dragon("Crazy Dragon");
$crazy_dragon->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

echo '<h2>Calling the fly() and pet() Methods on the Animal Class Will Display an Error Message Per the Code Below</h2>';

$lizard = new Animal("Freddy");

$lizard->pet()->fly();
?>