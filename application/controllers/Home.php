<?php 
	/**
	* The home controller
	*/
	class Home extends CI_Controller
	{
		
		function index()
		{
			$this->load->view('Templates/header');
			$this->load->view('compare');

			$this->load->view('Templates/footer');
		}
		function compare()
		{
			$this->load->view('Templates/header');
			$this->load->view('compare');

			$this->load->view('Templates/footer');
			
		}
	}

 ?>