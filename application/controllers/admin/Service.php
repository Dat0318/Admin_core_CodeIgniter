<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends Tables_Controller
{
	protected $title = "Admin Table panel - Services table";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template('pages/tables', $this->title);
	}
}
