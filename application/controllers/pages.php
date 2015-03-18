<?php
// Pages Controller Class
// Used for the static pages (Home, About)

class Pages extends CI_Controller
{
	// View - the page that the user wants to view
	// Parameters: page-string, the page the user requested
	public function View($page = 'home')
	{
		// Title will be the page requested, first page capitialized
		$data['title'] = ucfirst($page);

		// Load the views
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer', $data);
	}
}