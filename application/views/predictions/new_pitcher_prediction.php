<div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
		<h2>Pitcher Prediction</h2>
		<h5 class="text-muted">Use the form below to submit your prediction for a pitcher this season</h4>

			<?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>'); ?>
			<?php echo form_open('pitcherpredictions/submit', array('role' => 'form'));?>
				<div class="form-group">
					 <label for="user">Username</label>
					 <input type="input" name="user" class="form-control" placeholder="Username" />
				</div>
				<div class="form-group">
					<label for="player">Player</label>
					<input type="input" name="player" class="form-control" placeholder="Players Name" />
				</div>
				<div class="form-group">
					 <label for="wins">Number of Wins</label>
					 <input type="number" name="wins" class="form-control" placeholder="Number of Wins" min="1" max="32"/>
				</div>
				<div class="form-group">
					 <label for="strikeouts">Strikeouts</label>
					 <input type="number" name="strikeouts" class="form-control" placeholder="Strikeouts" min="50" max="320">
				</div>
				<div class="form-group">
					<label for="era">ERA</label>
					<input type="input" name="era" class="form-control" placeholder="Earned Run Average" />
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Insert Prediction</button>
			</form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>