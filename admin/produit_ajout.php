<?php include 'header_admin.php';?>

<div class="container">


  <div class="container">
    <div class="row">
      <div class="col-md-12">
              <div class="center-block text-center">
                  <h1>Bienvenue sur la page de gestion des Machines Virtuelles.</h1>
                  <p class="lead">Vous pouvez ajouter des machines virtuelles</p>
              </div>
      </div>
    </div><!--/row-->
    <hr>
        <div class="row">
                <p class="lead">Provider</p>
                  <div class="col-sm-4 col-sm-offset-0">
                    <div class="radio">
                      <label><input type="radio" name="optradio1">VirtualBox</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio1">VMWare Fusion</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio1">Parallels Desktop</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio1">VMWare Workstation</label>
                      </div>
                  </div><!--/col-->
        </div><!--/row-->
  <hr>

    </div><!--/container-->

  <!--Distro-->
      <div class="row">
                <p class="lead">Distro</p>
                  <div class="col-sm-4 col-sm-offset-0">
                      <div class="radio">
                      <label><input type="radio" name="optradio">CentOS 6 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio">CentOS 7 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio">Ubuntu Trusty 14.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                      </div>
                      <div class="radio">
                      <label><input type="radio" name="optradio">  Ubuntu Xenial 16.04 LTS i386 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                      </div>
                      <div class="radio ">
                      <label><input type="radio" name="optradio">Ubuntu Xenial 16.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                      </div>
                  </div><!--/col-->
      </div><!--/row-->
  <hr>
  <!--Machine-->
  <p class="lead">Machines</p>
  <form>
  <div class="form-group">
    <label for="inputdefault">Version</label>
    <input class="form-control" name ="Version" id="inputdefault" type="text" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputdefault">Poids</label>
    <input class="form-control" name ="Poids" id="inputdefault" type="text" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputdefault">Prix</label>
    <input class="form-control" name ="Prix" id="inputdefault" type="text" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputdefault">Nom</label>
    <input class="form-control" name ="Nom" id="inputdefault" type="text" placeholder="">
  </div>
</div>
<?php include 'footer.php'; ?>
