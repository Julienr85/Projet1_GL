<?php include 'header.php';?>

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
    <label for="inputdefault">Internal Identifier</label>
    <input class="form-control" name ="Machine1" id="inputdefault" type="text" placeholder="Machine 1">
  </div>
  <div class="form-group">
    <label for="inputdefault">Hostname</label>
    <input class="form-control" name ="machine1.puphet" id="inputdefault" type="text" placeholder="machine1.puphet">
  </div>
  <div class="form-group">
    <label for="inputdefault">IP Address</label>
    <input class="form-control" name ="adresseIp" id="inputdefault" type="text" placeholder="192.168.56.101">
  </div>
  <div class="form-group">
    <label for="inputdefault">Memory</label>
    <input class="form-control" name ="memory" id="inputdefault" type="text" placeholder="512">
  </div>
  <div class="form-group">
    <label for="inputdefault">CPUs</label>
    <input class="form-control" name ="cpu" id="inputdefault" type="text" placeholder="1">
  </div>
  </form>
  <hr>
  <!--Forwarded Ports-->
  <p class="lead">Forwarded Ports</p>
  <div class="form-group">
    <label for="inputdefault">Host Port</label>
    <input class="form-control" name ="hostPort" id="inputdefault" type="text" placeholder="8515">
  </div>
  <div class="form-group">
    <label for="inputdefault">VM Port</label>
    <input class="form-control" name ="vmPort"id="inputdefault" type="text" placeholder="22">
  </div>
  <!--Acoordion-->
  <div id="accordion">
  <div id="headingZero" class="panel-heading">
    <a href="#collapseZero" data-toggle="collapse" data-parent="#accordion"> Cliquez ici ajouter d'autre port</a></h4>
  </div>
  <div id="collapseZero" class="panel-collapse collapse">
    <div class="panel-body">
      <form>
        <div class="form-group">
          <label for="inputdefault">Host Port</label>
          <input class="form-control" id="inputdefault" type="text" placeholder="8515">
        </div>
        <div class="form-group">
          <label for="inputdefault">VM Port</label>
          <input class="form-control" id="inputdefault" type="text" placeholder="22">
        </div>
      </form>
    </div>
  </div>
  </div>
  <div class="footer" align="right">
    <a href="#" class="btn btn-primary">Submit</a>
  </div>


</div>
<?php include 'footer.php'; ?>
