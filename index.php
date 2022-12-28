<?php 
	class Animals 
	{
		public $food, $location, $animal, $noise;
		function __construct($food, $location, $animal, $noise)
		{
			$this->food = $food;
			$this->location = $location;
			$this->animal = $animal;
			$this->noise = $noise;
		}

		function makeNoise(){
			echo $this->animal." говорит: ".$this->noise."<br>";
		}
		function eat(){
			echo $this->animal." ест: ".$this->food."<br>";
		}
		function sleep(){
			echo $this->animal." спит в: ".$this->location."<br><br><br>";
		}
	}

	class Dog extends Animals
	{
		public $dogName, $weight;
		function __construct($dogName, $weight, $food, $location, $animal, $noise)
		{
			parent::__construct($food, $location, $animal, $noise);
			$this->dogName = $dogName;
			$this->weight = $weight;
		}
		function display() {
			echo "Животное ".$this->animal." зовут: ".$this->dogName."<br>";
			echo "Вес ".$this->animal.": ".$this->weight." кг<br>";
			parent::makeNoise();
			parent::eat();
			parent::sleep();
		}
	}

	class Cat extends Animals
	{
		public $catName, $color;
		function __construct($catName, $color, $food, $location, $animal, $noise)
		{
			parent::__construct($food, $location, $animal, $noise);
			$this->catName = $catName;
			$this->color = $color;
		}
		function display() {
			echo "Животное ".$this->animal." зовут: ".$this->catName."<br>";
			echo "Цвет ".$this->animal.": ".$this->color."<br>";
			parent::makeNoise();
			parent::eat();
			parent::sleep();
		}
	}

	class Horse extends Animals
	{
		public $horseName, $type;
		function __construct($horseName, $type, $food, $location, $animal, $noise)
		{
			parent::__construct($food, $location, $animal, $noise);
			$this->horseName = $horseName;
			$this->type = $type;
		}
		function display() {
			echo "Животное ".$this->animal." зовут: ".$this->horseName."<br>";
			echo "Вид ".$this->animal.": ".$this->type."<br>";
			parent::makeNoise();
			parent::eat();
			parent::sleep();
		}
	}

	$dog = new Dog("Мухтар","60","Мясо","Будка","Собака","Гав");
	$cat = new Cat("Марсель","Чёрно-белый","Корм","Коробка","Кошка", "Мяу");
	$horse = new Horse("Рожик","Пони","Трава","Стойло","Лошадь","Фр");
	$dog->Display();
	$cat->Display();
	$horse->Display();
?>