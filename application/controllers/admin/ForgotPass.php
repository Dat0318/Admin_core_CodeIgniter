<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ForgotPass extends Auth_Controller
{
	protected $title = "Admin Table panel - Forgot password";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template('pages/forgotPass', $this->title);
	}
}
