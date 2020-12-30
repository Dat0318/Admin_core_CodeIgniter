<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends Auth_Controller
{
	protected $title = "Admin Table panel - Login";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template('pages/login', $this->title);
	}
}
