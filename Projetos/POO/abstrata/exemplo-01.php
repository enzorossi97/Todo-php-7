<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{
		echo "O veiculo acelerou até ". $velocidade . " km/h";
	}

	public function frenar($velocidader)
	{
		echo "O veículo frenou até " . $velocidade . " km/h";
	}

	public function trocarMarcha($marcha)
	{
		echo "O veículo engatou a marcha ". $marcha;
	}
}


class DelRey extends Automovel {

	public function empurrar(){


	}

}

//$carro = new Automovel();  vai dar erro pois é abstract

$carro = new DelRey();

$carro->acelerar(200);