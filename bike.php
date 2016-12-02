<?php

class Bike
{
	public $price;
	public $max_speed;
	public $miles;

	public function __construct($price, $max_speed)
	{
		$this->price = $price;
		$this->max_speed = $max_speed;
		$this->miles = 0;
	}

	function displayInfo()
	{
		echo "<br>Price: " . $this->price .
		"<br>Max Speed: " . $this->max_speed .
		"<br> Miles: " . $this->miles . "<br>";
	}

	function drive()
	{
		echo "<br>Driving!";
		$this->miles = $this->miles + 10;
	}

	function reverse()
	{
		echo "<br>Reversing!";
		$this->miles = $this->miles - 5;
	
		if($this->miles < 0)
		{
			return $this->miles = 0;
		}
	}
}


$bike1 = new Bike(200, "25mpg");
$bike2 = new Bike(400, "40mpg");
$bike3 = new Bike(800, "80mpg");

$bike1->drive();
$bike1->drive();
$bike1->drive();
$bike1->reverse();
$bike1->displayInfo();


$bike2->drive();
$bike2->drive();
$bike2->reverse();
$bike2->reverse();
$bike2->displayInfo();


$bike3->reverse();
$bike3->reverse();
$bike3->reverse();
$bike3->displayInfo();

?>
