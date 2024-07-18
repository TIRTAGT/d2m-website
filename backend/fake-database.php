<?php

class D2M_Database {
	private $auto_increment = 1;

	function __construct() {
		// $this->db = new mysqli('localhost', 'root', '', 'd2m');
	}

	function SELECT_Product_Kostum() {
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
}

?>