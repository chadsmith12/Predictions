<div class="container">
 <div class="row clearfix">
 <div class="col-md-12 text-right">
    <a class="btn btn-primary" href="<?=site_url('/teampredictions/submit/')?>">Submit Team Prediction</a>
  </div>
    <div class="col-sm-12 column">
      <table class="table table-striped table-bordered table-hover">
      <caption>Team Predictions</caption>
        <thead>
          <tr>
            <th>
              Submitted By
            </th>
            <th>
              Wins
            </th>
            <th>
              AL West Finishing Position
            </th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($predictions as $prediction): ?>
          <tr>
            <td><?=$prediction->user?></td>
            <td><?=$prediction->team_wins?></td>
            <td><?=$prediction->finish_position?></td>
          </tr>
          <?php endforeach?>
        </tbody>
      </table>
    <div class="row clearfix">
  <div class="col-md-12 column">
</div>
