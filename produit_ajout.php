<?php include 'header.php';?>

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
  <form name="form_panier" id="form_panier" >
        <div class="row">
                  <p class="lead">Provider</p>
                    <div class="col-sm-4 col-sm-offset-0">
                      <div class="radio"><label><input type="radio" name="optradio1" id="providChoice">VirtualBox</label></div>
                        <div class="radio"><label><input type="radio" name="optradio1" id="providChoice">VMWare Fusion</label></div>
                        <div class="radio"><label><input type="radio" name="optradio1" id="providChoice">Parallels Desktop</label></div>
                        <div class="radio"><label><input type="radio" name="optradio1" id="providChoice">VMWare Workstation</label></div>
                    </div><!--/col-->
        </div><!--/row-->
    <hr>
    <!--Distro-->
        <div class="row">
                  <p class="lead">Distro</p>
                    <div class="col-sm-4 col-sm-offset-0">
                        <div class="radio">  <label><input type="radio" name="distroChoice" id ="distroChoice">CentOS 6 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
                        <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice">CentOS 7 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
                        <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice">Ubuntu Trusty 14.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
                        <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice">  Ubuntu Xenial 16.04 LTS i386 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
                        <div class="radio "><label><input type="radio" name="distroChoice" id ="distroChoice">Ubuntu Xenial 16.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
                    </div><!--/col-->
        </div><!--/row-->
    <hr>
    <!--Machine-->
        <p class="lead">Machines</p>
        <div class="form-group">
          <label for="inputdefault">Identifiant Interne</label>
          <input class="form-control" name ="Machine1" id="machine" type="text" placeholder="Machine 1">
        </div>
        <div class="form-group">
          <label for="inputdefault">Nom d'hôte</label>
          <input class="form-control" name ="machine1.puphet" id="machine1.puphet" type="text" placeholder="machine1.puphet">
        </div>
        <div class="form-group">
          <label for="inputdefault">Adresse Ip</label>
          <input class="form-control" name ="adresseIp" id="adresseIp" type="text" placeholder="192.168.56.101">
        </div>
        <div class="form-group">
          <label for="inputdefault">Mémoire Ram</label>
          <input class="form-control" name ="memory" id="memory" type="text" placeholder="512">
        </div>
        <div class="form-group">
          <label for="inputdefault">CPUs</label>
          <input class="form-control" name ="cpu" id="cpu" type="text" placeholder="1">
        </div>
    <hr>
    <!--Forwarded Ports-->
        <p class="lead">Forwarded Ports</p>
          <div class="form-group">
            <label for="inputdefault">Port Maître</label>
            <input class="form-control" name ="hostPort" id="host_Port" type="text" placeholder="8515">
          </div>
          <div class="form-group">
            <label for="inputdefault">VM Port</label>
            <input class="form-control" name ="vmPort"id="Vm_Port" type="text" placeholder="22">
          </div>
    <!--Acoordion-->
        <div id="accordion">
          <div id="headingZero" class="panel-heading">
            <a href="#collapseZero" data-toggle="collapse" data-parent="#accordion"> Cliquez ici ajouter un autre port</a></h4>
          </div>
          <div id="collapseZero" class="panel-collapse collapse">
            <div class="panel-body">
                <div class="form-group">
                  <label for="inputdefault">Port Maître</label>
                  <input class="form-control" id="Host_port_supp" type="text" placeholder="8515">
                </div>
                <div class="form-group">
                  <label for="inputdefault">VM Port</label>
                  <input class="form-control" id="Vm_port_supp" type="text" placeholder="22">
                </div>
            </div>
          </div>
        </div>
        <div class="footer" align ="right">
          <input type="submit" class="btn btn-primary" id="submit" value="Submit" ></input>
        </div>
  </form>
</div><!--/container-->
<?php include 'footer.php'; ?>
