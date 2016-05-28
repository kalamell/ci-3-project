<?php
class Product_model extends CI_Model
{
	private $name;
	public function __construct()
	{
		parent::__construct();
	}

	public function setname($name) {
		$this->name = $name;
	}

	public function getname()
	{
		return $this->name;
	}

	public function plus($num1 = 0, $num2 = 0)
	{
		return (int)$num1 + (int)$num2;
	}

	public function save()
	{
		echo 'xxxx'.$this->input->post('name');
	}

}