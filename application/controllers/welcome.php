<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($page = 'home')
	{
		// Title will be the page requested, first page capitialized
		$data['title'] = ucfirst($page);

		// Load the views
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer', $data);
		$this->load->view('welcome_message');
	}

	// View - the page that the user wants to view
	// Parameters: page-string, the page the user requested
	/*public function view($page = 'home')
	{
		// when trying to load the page, first check that the file atually exists
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		// Title will be the page requested, first page capitialized
		$data['title'] = ucfirst($page);

		// Load the views
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('pages/'.$page);
		$this->load->view('templates/footer', $data);
	}*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */