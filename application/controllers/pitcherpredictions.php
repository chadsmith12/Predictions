<?php
// PitcherPredictions Controller Class
// Uses for the controller in the PitcherPrediction pages
// View pitcher predictions or submit a pitcher prediction

class PitcherPredictions extends CI_Controller
{
	// constructor
	// call the base class constructor and load the predictions model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prediction_model');
	}

	// Index -- controller that is used to display all the predictions for pitchers
	public function Index()
	{
		// get all the predictions from the database
		$data['predictions'] = $this->Prediction_model->GetPredictions('pitcher_predictions');
		// set the title for this page
		$data['title'] = 'Pitcher Predictions';

		// load the views associated with this controller action
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('predictions/pitcher_predictions', $data);
		$this->load->view('templates/footer');
	}

	// Insert -- Controller that is used for submitting a pitcher prediction
	public function Submit()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Insert Pitcher Prediction';

		// set the server side form validation rules
		$this->form_validation->set_rules('user', 'User', 'required');
		$this->form_validation->set_rules('player', 'Player', 'required');
		$this->form_validation->set_rules('wins', 'Wins', 'required');
		$this->form_validation->set_rules('strikeouts', 'Strikeouts', 'required');
		$this->form_validation->set_rules('era', 'ERA', 'required|numeric');

		// if the user has not submitted the form or their were errors in submitting the form
		// then load the new pitcher prediction views
		if($this->form_validation->run() === false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navigation', $data);
			$this->load->view('predictions/new_pitcher_prediction', $data);
			$this->load->view('templates/footer');
		}
		// form was submitted.  Insert prediction into database, and let the user know it was successful
		else
		{
			$user = $this->input->post('user');
			$player = $this->input->post('player');
			// check to see if we need to do an update or insert
			if(!$this->Prediction_model->IsInserted('pitcher_predictions', $user, $player))
			{
				$this->Prediction_model->InsertPitcherPrediction();
			}
			else
			{
				$this->Prediction_model->UpdatePitcherPrediction($user, $player);
			}
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navigation', $data);
			$this->load->view('predictions/prediction_successful');
			$this->load->view('templates/footer');
		}
	}
}