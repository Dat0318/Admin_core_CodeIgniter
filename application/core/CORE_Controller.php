<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CORE_Controller extends CI_Controller
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

class Templates_Controller extends CORE_Controller
{
	protected $css = "";
	protected $js = "demo.js,pages/dashboard2.js,pages/dashboard3.js";
	protected $plugins_css = "";
	protected $plugins_js = "chart.js/Chart.min.js";
	protected $array = array();
	protected $script = '';

	public function __construct()
	{
		parent::__construct();
		$this->array["css"] =  $this->css;
		$this->array["js"] =  $this->js;
		$this->array["plugins_css"] =  $this->plugins_css;
		$this->array["plugins_js"] =  $this->plugins_js;
		$this->array["script"] =  $this->script;
	}

	public function template($template_name, $title)
	{
		$this->array["title"] =  $title;

		$this->load->view('templates/header', $this->array);
		$this->load->view('templates/menu', $this->array);
		$this->load->view($template_name, $this->array);
		$this->load->view('templates/sidebar', $this->array);
		$this->load->view('templates/footer', $this->array);
	}
}

class Tables_Controller extends CORE_Controller
{
	protected $css = "";
	protected $js = "demo.js";
	protected $plugins_css = "datatables-bs4/css/dataTables.bootstrap4.min.css,datatables-responsive/css/responsive.bootstrap4.min.css,datatables-buttons/css/buttons.bootstrap4.min.css";
	protected $plugins_js = "datatables/jquery.dataTables.min.js,datatables-bs4/js/dataTables.bootstrap4.min.js,datatables-responsive/js/dataTables.responsive.min.js,datatables-responsive/js/responsive.bootstrap4.min.js,datatables-buttons/js/dataTables.buttons.min.js,datatables-buttons/js/buttons.bootstrap4.min.js,jszip/jszip.min.js,pdfmake/pdfmake.min.js,pdfmake/vfs_fonts.js,datatables-buttons/js/buttons.html5.min.js,datatables-buttons/js/buttons.print.min.js,datatables-buttons/js/buttons.colVis.min.js";
	protected $script = '
						<script>
							$(function() {
								$("#tableData").DataTable({
									"paging": false,
									"lengthChange": false,
									"searching": false,
									"ordering": true,
									"info": false,
									"autoWidth": false,
									"responsive": true,
									"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
								}).buttons().container().appendTo("#tableData_wrapper .col-md-6:eq(0)");
							});
					</script>';
	// protected $script = '';
	protected $array = array();

	public function __construct()
	{
		parent::__construct();
		$this->array["css"] =  $this->css;
		$this->array["js"] =  $this->js;
		$this->array["plugins_css"] =  $this->plugins_css;
		$this->array["plugins_js"] =  $this->plugins_js;
		$this->array["script"] =  $this->script;
	}

	public function template($template_name, $title)
	{
		$this->array["title"] =  $title;
		$this->load->view('templates/header', $this->array);
		$this->load->view('templates/menu', $this->array);
		$this->load->view($template_name, $this->array);
		$this->load->view('templates/sidebar', $this->array);
		$this->load->view('templates/footer', $this->array);
	}
}
class Auth_Controller extends CORE_Controller
{
	protected $css = "";
	protected $js = "";
	protected $plugins_css = "";
	protected $plugins_js = "";
	protected $array = array();
	protected $script = '';

	public function __construct()
	{
		parent::__construct();
		$this->array["css"] =  $this->css;
		$this->array["js"] =  $this->js;
		$this->array["plugins_css"] =  $this->plugins_css;
		$this->array["plugins_js"] =  $this->plugins_js;
		$this->array["script"] =  $this->script;
	}

	public function template($template_name, $title)
	{
		$this->array["title"] =  $title;

		$this->load->view('templates/auth_header', $this->array);
		$this->load->view($template_name, $this->array);
		$this->load->view('templates/auth_footer', $this->array);
	}
}
