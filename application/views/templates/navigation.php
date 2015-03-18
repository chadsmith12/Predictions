 <body>
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?=site_url('/')?>">Rounding 3rd Predictions</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?=site_url('/')?>">Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Predictions <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?=site_url('/teampredictions/')?>">Team Predictions</a></li>
                <li><a href="<?=site_url('/pitcherpredictions/')?>">Pitcher Predictions</a></li>
                <li><a href="<?=site_url('/hitterpredictions/')?>">Hitter Predictions</a></li>
              </ul>
            </li>
            <li><a href="<?=site_url('/about/')?>">About</a></li>
            <li><a href="http://www.rangersrounding3rd.com">Back to the Rounding 3rd</a></li>
          </ul>
          <!--
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search Player" />
            </div> <button type="submit" class="btn btn-default">Submit</button>
          </form>
          -->
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
