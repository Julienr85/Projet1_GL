<?php include 'header.php'; ?>

<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Mon panier</h1>
        </div>
    </div>
</div>

<hr>

<div class="container">
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
          <div class="form-group">
          <label for="Machine_puphet">Provider</label>
          <input class="form-control" type="text"><?php echo $_SESSION["ProvidChoice"] ?></input>
          </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
          <div class="form-group">
          <label for="Machine_puphet">Distro</label>
          <input class="form-control" type="text"><?php echo $_SESSION["DistroChoice"] ?></input>
          </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
          <div class="form-group">
          <label for="Machine_puphet">Machines</label>
          <input class="form-control" type="text"><?php echo $_SESSION["Machine"] ?></input>
          </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
      </div>
      <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
          <div class="form-group">
          <label for="Machine_puphet">Adresse IP</label>
          <input class="form-control" type="text"><?php echo $_SESSION["Adresseip"] ?></input>
          </div>
        </div>
        <div class="clearfix visible-xs-block"></div>
      </div>
</div><!--/container-->
<?php include 'footer.php'; ?>
