<?php
class Product extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('product_model', 'product');
	}

	public function index()
	{
		$data = array(
			'name' => 'Bundit',
			'surname' => 'Sankhumpha',
			'items' => array(
				'appble',
				'orange',
				'mango'
			)
		);

		$this->product->setname('bundit');

		echo $this->product->getname();

		echo $this->product->plus(10, 20);


		//$this->load->view('product/index', $data);
	}
}