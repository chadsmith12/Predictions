<?php
// TeamPredictions Controller Class
// Uses for the controller in the TeamPrediction pages
// View team predictions or submit team predictions

class TeamPredictions extends CI_Controller
{
	// constructor
	// call the base class constructor and load the predictions model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Prediction_model');
	}

	// Index -- controller that is used to display all the predictions for the team
	public function Index()
	{
		// get all the predictions from the database
		$data['predictions'] = $this->Prediction_model->GetPredictions('team_predictions');
		// set the title for this page
		$data['title'] = 'Team Predictions';

		// load the views associated with this controller action
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navigation', $data);
		$this->load->view('predictions/team_predictions', $data);
		$this->load->view('templates/footer');
	}

	// Insert -- Controller that is used for submitting a team prediction
	public function Submit()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Insert Team Prediction';

		// set the server side form validation rules
		$this->form_validation->set_rules('user', 'User', 'required');
		$this->form_validation->set_rules('wins', 'Wins', 'required');
		$this->form_validation->set_rules('finishPosition', 'Finishing Position', 'required');

		// if the user has not submitted the form or their were errors in submitting the form
		// then load the new team prediction views
		if($this->form_validation->run() === false)
		{
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navigation', $data);
			$this->load->view('predictions/new_team_prediction', $data);
			$this->load->view('templates/footer');
		}
		// form was submitted.  Insert prediction into database, and let the user know it was successful
		else
		{
			// grab the user from the form
			$user = $this->input->post('user');
			// check to see if we need to do an update or insert
			if(!$this->Prediction_model->IsInserted('team_predictions', $user))
			{
				$this->Prediction_model->InsertTeamPrediction();
			}
			else
			{
				$this->Prediction_model->UpdateTeamPrediction($user);
			}
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navigation', $data);
			$this->load->view('predictions/prediction_successful');
			$this->load->view('templates/footer');
		}
	}
}