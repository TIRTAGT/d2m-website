<?php

class D2M_Database {
	private $auto_increment = 1;

	function __construct() {
		// $this->db = new mysqli('localhost', 'root', '', 'd2m');
	}

	function SELECT_Product_Costume() {
		/**
		 * SCHEME:
		 * 		id: int
		 * 		name: string
		 * 		price: float
		 * 		star: int (1-5)
		 * 		image: string (path ke gambar)
		 */
		$products = array();
		

		$products[0] = array(
			'id' => 1,
			'name' => 'Chongyun Kostum',
			'description' => 'Kostum Chongyun',
			'price' => 120.00,
			'star' => 5,
			'image' => 'assets/images/Chongyun.jpg'
		);

		$products[1] = array(
			'id' => 2,
			'name' => 'Hu Tao Kostum',
			'description' => 'Kostum Hu Tao',
			'price' => 18000,
			'star' => 5,
			'image' => 'assets/images/Hu Tao.jfif'

		);

		$products[2] = array(
			'id' => 3,
			'name' => 'Bocchi Kostum',
			'description' => 'Kostum Bocchi',
			'price' => 90.00,
			'star' => 5,
			'image' => 'assets/images/Bocchi.jpg'
		);

		$products[3] = array(
			'id' => 4,
			'name' => 'Furina Kostum',
			'description' => 'Kostum Furina',
			'price' => 130.00,
			'star' => 5,
			'image' => 'assets/images/Furina.jfif'
		);

		$products[4] = array(
			'id' => 5,
			'name' => 'Nahidas',
			'description' => 'Kostum Nahidas',
			'price' => 69.00,
			'star' => 1,
			'image' => 'assets/images/Nahida.jpg'
		);

		return $products; 
	}

	function SELECT_Product_Wigs() {
		/**
		 * SCHEME:
		 * 		id: int
		 * 		name: string
		 * 		price: float
		 * 		star: int (1-5)
		 * 		image: string (path ke gambar)
		 */
		$products = array();
		
		$products[0] = array(
			'id' => 1,
			'name' => 'Kirara Wigs',
			'description' => 'Kirara Wigs',
			'price' => 55000,
			'star' => 5,
			'image' => 'assets/images/Kirara Wig.jfif'
		);

		$products[1] = array(
			'id' => 2,
			'name' => 'Kazuha Wigs',
			'description' => 'Kazuha Wigs',
			'price' => 65000,
			'star' => 5,
			'image' => 'assets/images/Kazha Wig.jpg'

		);

		$products[2] = array(
			'id' => 3,
			'name' => 'Miku Wigs Vampire Model',
			'description' => 'Miku Wigs Vampire Model Wigs',
			'price' => 60000,
			'star' => 5,
			'image' => 'assets/images/Miku Wig.webp'
		);

		$products[3] = array(
			'id' => 4,
			'name' => 'Mitaka Asa Wigs',
			'description' => 'Mitaka Asa Wigs',
			'price' => 50000,
			'star' => 5,
			'image' => 'assets/images/Wig Mitaka Asa.jpg'
		);

		return $products; 
	}
}

?>