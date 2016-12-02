<?php

Class Animals 
{
	public $health;
	public $name;

	function __construct($animal)
	{
		$this->health = 100;
		$this->name = $animal;
	}

	function displayHealth()
	{
		echo "<br />Name: " . $this->name;
      echo "<br />Health: " . $this->health ."<br />";
	}

	function walk()
	{
		$this->health = $this->health -1;
	}

	function run()
	{
		$this->health = $this->health -5;
	}

}

class Dog extends Animals
{
 function __construct($name)
 {
 	parent::__construct($name);
 	$this->health = 150;
 }

 function pet()
 {
 	$this->health += 5;
 }

}

class Dragon extends Animals
{
	function __construct($abc)
	{
		parent::__construct($abc);
		$this->health = 170;
	}

	function fly()
	{
		$this->health -= 10;
	}
}

$animal1 = new Animals("Bear") ;
$animal1->walk();
$animal1->walk();
$animal1->walk();
$animal1->run();
$animal1->run();
$animal1->displayHealth();

$Dog1 = new Dog("Puppy");
$Dog1->walk();
$Dog1->walk();
$Dog1->walk();
$Dog1->run();
$Dog1->run();
$Dog1->pet();
$Dog1->displayHealth();

$Dog2 = new Dog("Rover");
$Dog2->displayHealth();

$Dragon = new Dragon("Toothless");
$Dragon->walk();
$Dragon->walk();
$Dragon->walk();
$Dragon->run();
$Dragon->run();
$Dragon->fly();
$Dragon->fly();
$Dragon->displayHealth();



?>