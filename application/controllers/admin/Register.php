<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends Auth_Controller
{
	protected $title = "Admin Table panel - Register";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template('pages/register', $this->title);
	}
}
