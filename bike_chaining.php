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

		return $this;
	}

	function reverse()
	{
		echo "<br>Reversing!";
		$this->miles = $this->miles - 5;
	
		if($this->miles < 0)
		{
			$this->miles = 0;
		}

		return $this;
	}
}


$bike1 = new Bike(200, "25mpg");
$bike2 = new Bike(400, "40mpg");
$bike3 = new Bike(800, "80mpg");

$bike1->drive()->drive()->drive()->reverse()->displayInfo();

$bike2->drive()->drive()->reverse()->reverse()->displayInfo();

$bike3->reverse()->reverse()->reverse()->displayInfo();

?>
