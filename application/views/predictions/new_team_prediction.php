<div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
		<h2>Team Prediction</h2>
		<h5 class="text-muted">Use the form below to submit your prediction for the team this season</h4>

			<?= validation_errors('<div class="alert alert-danger" role=alert">', '</div>'); ?>
			<?php echo form_open('teampredictions/submit', array('role' => 'form'));?>
				<div class="form-group">
					 <label for="user">Username</label>
					 <input type="input" name="user" class="form-control" placeholder="Username" />
				</div>
				<div class="form-group">
					 <label for="wins">Number of Wins</label>
					 <input type="number" name="wins" class="form-control" placeholder="Number of Wins" min="50" max="162"/>
				</div>
				<div class="form-group">
					 <label for="finishPosition">AL West Finish Position</label><br/>
					 <input type="radio" name="finishPosition" value="1" checked>1st
					<br>
					<input type="radio" name="finishPosition" value="2">2nd
					<br>
					<input type="radio" name="finishPosition" value="3">3rd
					<br>
					<input type="radio" name="finishPosition" value="4">4th
					<br>
					<input type="radio" name="finishPosition" value="5">5th
					<br>
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Insert Prediction</button>
			</form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
