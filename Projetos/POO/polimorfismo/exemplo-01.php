<?php 

abstract class Animal {

	public function falar(){

		return "Som";
	}

	public function mover(){

		return "Andar";
	}
}

class Cachorro extends Animal 
{
	public function falar(){

		return "Late";
	}
}

class Gato extends Animal
{

	public function falar(){

		return "Mia";
	}

}



class Passaro extends Animal
{

	public function falar(){

		return "Cantar";
	}

	public function mover(){

		return "Voa e ". parent::mover();
	}
}


$dog = new Cachorro();

echo "______________________________________<br/>";

echo $dog->falar() . "<br/>";
echo $dog->mover() . "<br/>";

echo "______________________________________<br/>";

$cat = new Gato();
echo $cat->falar(). "<br/>";
echo $cat->mover(). "<br/>";

echo "______________________________________<br/>";

$cat = new Passaro();
echo $cat->falar(). "<br/>";
echo $cat->mover(). "<br/>";
 ?>