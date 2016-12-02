<?php

class Car
{
	private $price;
	private $speed;
	private $fuel;
	private $mileage;
	private $tax;
	public $car_details;

	public function __construct($price, $speed, $fuel, $mileage)
	{
		$this->price = $price;
		$this->speed = $speed;
		$this->fuel = $fuel;
		$this->mileage = $mileage;

		$this->tax = ($this->price > 10000) ? "0.15" : "0.12";
		// if this price is over 10,000 then tax is 0.15 else tax is 0.12

		$this->car_details = $this->displayAll();
		return $this->car_details;
	}

	public function displayAll()
	{
		$car_information = NULL; // must set null to begin
		foreach ($this as $key => $value)
		{
		
		if($key != "car_details")
		$car_information .= $key . ": " . $value . "<br>";
		}
		return $car_information . "<p>";
		
	}
}

// set variables for each car instance
$car1 = new Car(15000, "35mpg", "Full", "25mpg");
$car2 = new Car(10000, "55mpg", "Half Full", "35mpg");
$car3 = new Car(6000, "55mpg", "Half Full", "35mpg");
$car4 = new Car(20000, "65mpg", "Empty", "55mpg");
$car5 = new Car(30000, "85mpg", "Half Full", "85mpg");

//echo car details as defined as key => value
echo $car1->car_details;
echo $car2->car_details;
echo $car3->car_details;
echo $car4->car_details;
echo $car5->car_details;


?>
