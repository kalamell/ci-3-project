<?php
class Main extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();


	}

	public function index()
	{
		echo 'main controllers';
	}

	public function detail($id = 0, $id2 = 0)
	{
		echo $id.' - '.$id2;
	}
}