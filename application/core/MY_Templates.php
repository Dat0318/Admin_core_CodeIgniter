<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MY_Common extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
	}
}

class MY_Templates extends MY_Common
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function template($template_name, $vars = array(), $return = FALSE)
	{
		if ($return) :
			$content = $this->load->view('templates/header', $vars, $return);
			$content = $this->load->view('templates/menu', $vars, $return);
			$content .= $this->load->view($template_name, $vars, $return);
			$content .= $this->load->view('templates/sidebar', $vars, $return);
			$content .= $this->load->view('templates/footer', $vars, $return);

			return $content;
		else :
			$this->load->view('templates/header', $vars);
			$this->load->view('templates/menu', $vars);
			$this->load->view($template_name, $vars);
			$this->load->view('templates/sidebar', $vars);
			$this->load->view('templates/footer', $vars);
		endif;
	}
}
