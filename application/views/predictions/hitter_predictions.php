<div class="container">
  <div class="row clearfix">
  <div class="col-md-12 text-right">
    <a class="btn btn-primary" href="<?=site_url('/hitterpredictions/submit/')?>">Submit Hitter Prediction</a>
  </div>
    <div class="col-sm-12 column">
      <table class="table table-striped table-bordered table-hover">
      <caption>Hitter Predictions</caption>
        <thead>
          <tr>
            <th>
              Submitted By
            </th>
            <th>
              Player
            </th>
            <th>
              AVG
            </th>
            <th>
              RBI's
            </th>
            <th>
              Home Runs
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($predictions as $prediction): ?>
          <tr>
            <td><?=$prediction->user?></td>
            <td><?=$prediction->player?></td>
            <td><?=$prediction->average?></td>
            <td><?=$prediction->rbis?></td>
            <td><?=$prediction->home_runs?></td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    </div>
  </div>
</div>