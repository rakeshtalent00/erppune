<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Base controller for webapp.
 *
 */
class MY_Controller extends CI_Controller {

	protected $data = array(); // parameters for view components
	protected $id;   // identifier for our content

	/**
	 * Constructor.
	 * Establish view parameters & set a couple up
	 */

	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->data['title'] = 'Welcome to Talentedge';
		$this->errors = array();

		$this->load->driver('cache');

		// Prevent some security threats, per Kevin
		// Turn on IE8-IE9 XSS prevention tools
		//$this->output->set_header('X-XSS-Protection: 1; mode=block');
		// Don't allow any pages to be framed - Defends against CSRF
		//$this->output->set_header('X-Frame-Options: DENY');
		// prevent mime based attacks
		//$this->output->set_header('X-Content-Type-Options: nosniff');		
	}

	/**
	 * Render this page
	 */
	public function layout()
	{
		$this->template['header'] = $this->load->view('theme/header',$this->data,TRUE);
		$this->template['footer'] = $this->load->view('theme/footer',$this->data,TRUE);
		$this->template['sidebar'] = $this->load->view('theme/sideNav',$this->data,TRUE);
		$this->template['page'] = $this->load->view($this->page,$this->data,TRUE);
		$this->template['title'] = $this->title;
		$this->load->view('theme/main',$this->template);
	}
	

}
