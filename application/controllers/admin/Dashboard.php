<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends Templates_Controller
{
	protected $title = "Admin Control panel";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->template('element/body', $this->title);
	}
}
