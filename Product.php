<?php


class Product
{
	private int $id;
	private string $name;
	private float $price;

	public function __construct( int $id, string $name, float $price ){
		$this->id = $id;
		$this->name = $name;
		$this->price = $price;
	}

	public function display() : void {
		echo "<div>
			<p> ".$this->name." : {$this->price}

			 </p>
			 <form action='add.php' method='POST'>
			 	<label for='quantity'> quantity </label>
			 	<input type='number' name='quantity' id='quantity'>
			 	<input type='hidden' name='productId' value='{$this->id}'>
			 	<button> ajouter au panier </button>
			 </form>
		</div>";
	}

	public function getId() : int {
		return $this->id;
	}

	public function getName() : string {
		return $this->name;
	}

	public function getPrice() : float {
		return $this->price;
	}


}