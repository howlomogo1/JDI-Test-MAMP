<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->home();
	}

	public function home(){

		// Load the model to get the sql results
		$this->load->model("get_db");

		$somedata['results'] = $this->get_db->getAll();
		//$this->load->view("view_db", $data);


		$somedata['theTitle'] = "JDI Interview Website";
		$somedata['theHeading'] = "Example Title";
		$somedata['theParagraph'] = "An example of a sub heading";
		// The active page
		$somedata['activelink'] = "home";

		$this->load->view("site_header", $somedata);
		$this->load->view("site_nav", $somedata);
		$this->load->view("site_content_home", $somedata);
	}

	public function getValues() {
		// This should be fine to pass into the hompage as far as sql goes.
		$this->load->model("get_db");
		$data['results'] = $this->get_db->getAll();
		//header('Content-type: application/json');
		//echo json_encode($this->get_db->getAll());
		$this->load->view("view_db", $data);
	}
}