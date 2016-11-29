<?php include 'header.php';?>

<!-- <div class="container"> -->

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
                <p class="lead">Fournisseur</p>
                  <div class="col-sm-4 col-sm-offset-0">
                    <div class="radio">
                      <label><input type="radio" name="providChoice" id="providChoice1">VirtualBox</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="providChoice" id="providChoice2">VMWare Fusion</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="providChoice" id="providChoice3">Parallels Desktop</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="providChoice" id="providChoice4">VMWare Workstation</label>
                    </div>
                  </div><!--/col-->
      </div><!--/row-->
  <hr>
  <!--Distribution-->
      <div class="row">
                <p class="lead">Distribution</p>
                  <div class="col-sm-4 col-sm-offset-0">
                    <div class="radio">
                      <label><input type="radio" name="distroChoice" id="distroCHocie">CentOS 6 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="distroChoice">CentOS 7 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="distroChoice">Ubuntu Trusty 14.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="distroChoice">Ubuntu Xenial 16.04 LTS i386 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                    </div>
                    <div class="radio">
                      <label><input type="radio" name="distroChoice">Ubuntu Xenial 16.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label>
                    </div>
                  </div><!--/col-->
      </div><!--/row-->
  <hr>
  <!--Machine-->
  <p class="lead">Machines</p>
  <form>
  <div class="form-group">
    <label for="inputdefault">Identifiant interne</label>
    <input class="form-control" name ="Machine1" id="inputdefault" type="text" placeholder="Machine 1">
  </div>
  <div class="form-group">
    <label for="inputdefault">Nom d'hôte</label>
    <input class="form-control" name ="machine1.puphet" id="inputdefault" type="text" placeholder="machine1.puphet">
  </div>
  <div class="form-group">
    <label for="inputdefault">Adresse IP</label>
    <input class="form-control" name ="adresseIp" id="inputdefault" type="text" placeholder="192.168.56.101">
  </div>
  <div class="form-group">
    <label for="inputdefault">Memoire RAM</label>
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
    <a href="#collapseZero" data-toggle="collapse" data-parent="#accordion"> Cliquez ici ajouter d'autres ports pairs</a></h4>
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

  <ul class="list-group ticketView ">
           <a href="#modalRecap" data-toggle="modal" data-target="#modalRecap" class="btn btn-primary achat">Ajouter</a>
   </ul>
</div>
<!-- <li role="presentation"><a href="#myModal" data-toggle="modal" data-target="#myModal">Connexion</a></li> -->


<div class="modal fade" id="modalRecap">
  <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Récapitulatif</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Annuler</a>
          <a href="#" class="btn btn-primary">Valider</a>
        </div>
      </div>
    </div>
</div>



<?php include 'footer.php'; ?>



$('input[name="radio-choice-1"]').change(function(){
   var genderValue = this.value
})