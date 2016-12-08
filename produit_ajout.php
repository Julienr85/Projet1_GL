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

<form name="form_panier" id="form_panier">
    <div class="row">
                  <p class="lead">Provider</p>
                    <div class="col-sm-4 col-sm-offset-0">
                        <div class="radio"><label><input type="radio" name="providChoice" id="providChoice" value="VirtualBox">VirtualBox</input></label></div>
                        <div class="radio"><label><input type="radio" name="providChoice" id="providChoice" value="VMWare Fusion">VMWare Fusion</input></label></div>
                        <div class="radio"><label><input type="radio" name="providChoice" id="providChoice" value="Parallels Desktop">Parallels Desktop</input></label></div>
                        <div class="radio"><label><input type="radio" name="providChoice" id="providChoice" value="VMWare Workstation">VMWare Workstation</input></label></div>
                    </div><!--/col-->
  </div><!--/row-->
<hr>
    <div class="row">
      <p class="lead">Distro</p>
      <div class="col-sm-4 col-sm-offset-0">
          <div class="radio">  <label><input type="radio" name="distroChoice" id ="distroChoice" value="CentOS 6 x64">CentOS 6 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
          <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice"   value="CentOS 7 x64">CentOS 7 x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
          <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice"   value="Ubuntu Trusty 14.04 LTS x64">Ubuntu Trusty 14.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
          <div class="radio"><label><input type="radio" name="distroChoice" id ="distroChoice"   value="Ubuntu Xenial 16.04 LTS i386">  Ubuntu Xenial 16.04 LTS i386 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
          <div class="radio "><label><input type="radio" name="distroChoice" id ="distroChoice"  value="Ubuntu Xenial 16.04 LTS x64">Ubuntu Xenial 16.04 LTS x64 (PHP 7.1, 7, 5.6, 5.5, HHVM)</label></div>
      </div><!--/col-->
    </div><!--/row-->
<hr>
  <!--Machine-->
    <p class="lead">Machines</p>
    <div class="form-group">
      <label for="machine_puphet">Internal Identifier</label>
      <input class="form-control" name ="machine_puphet" id="machine_puphet" type="text" placeholder="Machine_puphet"></input>
    </div>
    <div class="form-group">
            <label for="adresseIp">Adresse Ip</label>
            <input class="form-control" name ="adresseIp" id="adresseIp" type="text" placeholder="192.168.56.101"></input>
    </div>
    <div class="form-group">
            <label for="memory">Mémoire Ram</label>
            <input class="form-control" name ="memory" id="memory" type="text" placeholder="512">
        </div>
    <div class="form-group">
            <label for="cpu">CPUs</label>
            <input class="form-control" id="cpu" type="text" placeholder="22"></input>
    </div>
<hr>
      <!--Forwarded Ports-->
  <p class="lead">Forwarded Ports</p>
  <div class="form-group">
            <label for="host_Port">Port Maître</label>
            <input class="form-control" name ="hostPort" id="host_Port" type="text" placeholder="8515"></input>
   </div>
  <div class="form-group">
      <label for="vm_Port">VM Port</label>
      <input class="form-control" name ="vm_Port" id="vm_Port" type="text" placeholder="22"></input>
    </div>
  <!--Acoordion-->
  <div id="accordion">
    <div id="headingZero" class="panel-heading">
      <a href="#collapseZero" data-toggle="collapse" data-parent="#accordion"> Cliquez ici ajouter un autre port</a></h4>
    </div>
    <div id="collapseZero" class="panel-collapse collapse">
      <div class="panel-body">
          <div class="form-group">
            <label for="host_port_supp">Port Maître</label>
            <input class="form-control" id="host_port_supp" type="text" placeholder="8515">
          </div>
          <div class="form-group">
            <label for="vm_port_supp">VM Port</label>
            <input class="form-control" id="vm_port_supp" type="text" placeholder="22">
          </div>
      </div>
     </div>
    </div>
  <!--footer-->
  <div class="footer" align ="right">
      <a href="#modalRecap" data-toggle="modal" data-target="#modalRecap" class="btn btn-primary achat" id="btSubmit">Ajouter</a>
      <input type="reset" class="btn btn-warning" value="Reset" ></input>
    </div>
</form>

<div class="footer" align ="right">
      <ul class="list-group ticketView ">
      </ul>
    </div>
  </form>
</div><!--/container-->
<div class="modal fade" id="modalRecap"  method="post">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="form_panier_final" id="form_panier_final" action="produit_ajout_recup_donne.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title">Récapitulatif</h4>
      </div>
      <div class="modal-body">
          <div class="form-group" id="idModalElement">
          </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Annuler</a>
          <a href="produit_ajout_recup_donne.php" class="btn btn-primary">Valider</a>
        </div>
      </div>
    </div>
  </div><!--/modal-content-->
</div><!--/modal-dialog-->


<?php include 'footer.php'; ?>
