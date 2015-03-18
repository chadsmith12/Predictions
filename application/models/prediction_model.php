<?php
// TeamPrediction Model Class
// This file/Class is used to query the database for the predictions for the entire team

class Prediction_model extends CI_Model 
{
	// Constructor -- Used to load the database and initialize everything
	public function __construct()
	{
		$this->load->database();
	}

	// GetPredictions -- Get all the predictions from the database
	// PredictionTable -- the table to get the predictions from, will also be the prediction type
	// Return Value - Returns an object array with the predictions
	public function GetPredictions($table)
	{
		$query = $this->db->get($table);
		return $query->result();
	}

	// InsertTeamPrediction -- inserts a team prediction into the database
	// Returns the insert into the database
	public function InsertTeamPrediction()
	{
		// insert the data from the form into an array to be inserted into the database
		$data = array(
				'user' 			  => $this->input->post('user'),
				'team_wins' 	  => $this->input->post('wins'),
				'finish_position' => $this->input->post('finishPosition')
		);

		return $this->db->insert('team_predictions', $data);
	}

	// InsertPitcherPrediction -- inserts a pitcher prediction into the database
	// Returns the insert into the database
	public function InsertPitcherPrediction()
	{
		// convert the era to an integer if it can be
		// if it can't just default to 0
		$era = (is_numeric($this->input->post('era')) ? (int)$this->input->post('era') : 0);
		// insert the data from the form into an array to be inserted into the database
		$data = array(
				'user' 		 => $this->input->post('user'),
				'player' 	 => $this->input->post('player'),
				'wins' 		 => $this->input->post('wins'),
				'strikeouts' => $this->input->post('strikeouts'),
				'era' 		 => $this->input->post('era')
		);

		return $this->db->insert('pitcher_predictions', $data);
	}

	// InsertHitterPrediction -- inserts a hitter prediction into the database
	// Returns the insert into the database
	public function InsertHitterPrediction()
	{
		// insert the data from the form into an array to be inserted into the database
		$data = array(
				'user'      => $this->input->post('user'),
				'player'    => $this->input->post('player'),
				'average'   => $this->input->post('avg'),
				'rbis'      => $this->input->post('rbis'),
				'home_runs' => $this->input->post('homeruns')
		);

		return $this->db->insert('hitter_predictions', $data);

	}

	// IsInserted -- Checks to see if a user has already submitted a prediction
	// table -- the table we are checking to see if a prediction is submitted
	// key -- if this key is in the row
	// player -- is this player also in the database, defaults to 0.
	// Returns true if the user has already submitted a prediction, false if not
	public function IsInserted($table, $key, $player = 0)
	{
		// if we don't need to check a player
		if($player === 0)
		{
			// is the user in the database, select it
			$this->db->where('user', $key);
			$query = $this->db->get($table);
		}
		else
		{
			// is the user in the database, select it
			$this->db->where('user', $key);
			$this->db->where('player', $player);
			$query = $this->db->get($table);
		}

		// if the number rows returned > 0, we know it has been submitted
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	// UpdateTeamPrediction -- updates a teams prediction for a user that is already in the database
	// User -- the user we are updating the prediction for
	public function UpdateTeamPrediction($user)
	{
		// data array for the update
		$data = array(
				'user' 			  => $this->input->post('user'),
				'team_wins' 	  => $this->input->post('wins'),
				'finish_position' => $this->input->post('finishPosition')
		);

		$this->db->where('user', $user);

		return $this->db->update('team_predictions', $data);
	}

	// UpdatePitcherPrediction -- updates a prediction for a pitcher by a user that is already in the database
	// user -- the user we are updating the prediction for
	// player -- the player we are updating the prediction for
	public function UpdatePitcherPrediction($user, $player)
	{
		// convert the era to an integer if it can be
		// if it can't just default to 0
		$era = (is_numeric($this->input->post('era')) ? (int)$this->input->post('era') : 0);
		// insert the data from the form into an array to be inserted into the database
		$data = array(
				'user' 		 => $this->input->post('user'),
				'player' 	 => $this->input->post('player'),
				'wins' 		 => $this->input->post('wins'),
				'strikeouts' => $this->input->post('strikeouts'),
				'era' 		 => $this->input->post('era')
		);

		$this->db->where('user', $user);
		$this->db->where('player', $player);

		return $this->db->update('pitcher_predictions', $data);
	}

	// UpdateHitterPrediction -- Updates a prediction fora hitter by a user that is already in the database
	// user -- the user we are updating the prediction for
	// player -- the player we are updating the prediction for
	public function UpdateHitterPrediction($user, $player)
	{
		$data = array(
				'user'      => $this->input->post('user'),
				'player'    => $this->input->post('player'),
				'average'   => $this->input->post('avg'),
				'rbis'      => $this->input->post('rbis'),
				'home_runs' => $this->input->post('homeruns')
		);

		$this->db->where('user', $user);
		$this->db->where('player', $player);

		return $this->db->update('hitter_predictions', $data);
	}
}