<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends MY_Tables
{

	public function index()
	{
		$this->template('element/tables');
	}
}
