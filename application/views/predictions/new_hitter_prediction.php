<div class="container">
	<div class="row clearfix">
		<div class="col-md-4 column">
		</div>
		<div class="col-md-4 column">
		<h2>Hitter Prediction</h2>
		<h5 class="text-muted">Use the form below to submit your prediction for a hitter this season</h4>

			<?= validation_errors('<div class="alert alert-danger" data-dismiss="alert" role="alert">', '</div>'); ?>
			<?php echo form_open('hitterpredictions/submit', array('role' => 'form'));?>
				<div class="form-group">
					 <label for="user">Username</label>
					 <input type="input" name="user" class="form-control" placeholder="Username" />
				</div>
				<div class="form-group">
					<label for="player">Player</label>
					<input type="input" name="player" class="form-control" placeholder="Players Name" />
				</div>
				<div class="form-group">
					 <label for="avg">AVG</label>
					 <input type="input" name="avg" class="form-control" placeholder="Hitters Batting Average"/>
				</div>
				<div class="form-group">
					 <label for="rbis">RBI's</label>
					 <input type="number" name="rbis" class="form-control" placeholder="Runs Batted In" min="50" max="320">
				</div>
				<div class="form-group">
					<label for="era">Home Runs</label>
					<input type="number" name="homeruns" min="0" max="75" class="form-control" placeholder="Homeruns" />
				</div>
				<button type="submit" name="submit" class="btn btn-primary">Insert Prediction</button>
			</form>
		</div>
		<div class="col-md-4 column">
		</div>
	</div>
</div>
