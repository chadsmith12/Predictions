<div class="container">
  <div class="row clearfix">
  <div class="col-md-12 text-right">
    <a class="btn btn-primary" href="<?=site_url('/pitcherpredictions/submit/')?>">Submit Pitcher Prediction</a>
  </div>
    <div class="col-sm-12 column">
      <table class="table table-striped table-bordered table-hover">
      <caption>Pitcher Predictions</caption>
        <thead>
          <tr>
            <th>
              Submitted By
            </th>
            <th>
              Player
            </th>
            <th>
              Wins
            </th>
            <th>
              Strikeouts
            </th>
            <th>
              ERA
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($predictions as $prediction): ?>
          <tr>
            <td><?=$prediction->user?></td>
            <td><?=$prediction->player?></td>
            <td><?=$prediction->wins?></td>
            <td><?=$prediction->strikeouts?></td>
            <td><?=$prediction->era?></td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    </div>
  </div>
</div>