<?php include 'header.php'; ?>

<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Supprimer des Machines Virtuelles</h1>
        </div>
    </div>
</div>

<hr>

<div class="container">
                <div class="row">
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <!-- Optional: clear the XS cols if their content doesn't match in height -->
                  <div class="clearfix visible-xs-block"></div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <!-- Optional: clear the XS cols if their content doesn't match in height -->
                  <div class="clearfix visible-xs-block"></div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <!-- Optional: clear the XS cols if their content doesn't match in height -->
                  <div class="clearfix visible-xs-block"></div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                </div>
                <div class="row">
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                  <!-- Optional: clear the XS cols if their content doesn't match in height -->
                  <div class="clearfix visible-xs-block"></div>
                  <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
                </div>
</div><!--/container-->

<div class="modal fade" id="myModal">
	<div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Connexion</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
    		<label for="exampleInputEmail1">Email address</label>
    		<input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
  		  </div>
		  <div class="form-group">
		  	<label for="exampleInputPassword1">Password</label>
			<input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
		  </div>
          <p class="text-right"><a href="#">Forgot password?</a></p>
        </div>
        <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
          <a href="#" class="btn btn-primary">Log-in</a>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h4 class="modal-title">Bonjour chèr(e) inconnu(e), on ne se connaît pas...</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
              <label for="nom">Nom</label>
              <div class="controls">
                  <input class="form-control" id="nom" placeholder="Nom" type="email">
              </div>
          </div>
          <div class="form-group">
              <label for="prenom">Prénom</label>
              <div class="controls">
                  <input class="form-control" id="prenom" placeholder="Prénom" type="email">
              </div>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Adresse mail</label>
              <div class="controls">
                  <input class="form-control" id="exampleInputEmail1" placeholder="Enter email" type="email">
              </div>
          </div>
          <div class="form-group">
               <label for="exampleInputPassword1">Mot de passe</label>
               <div class="controls">
                    <input class="form-control" id="exampleInputPassword1" placeholder="Password" type="password">
               </div>
          </div>
          <div class="form-group">
               <label for="reenterpassword">Confirmation de mot de passe </label>
               <div class="controls">
                    <input class="form-control" id="reenterpassword" placeholder="Password" type="password">
               </div>
          </div>
        </div>
          <div class="modal-footer">
          <a href="#" data-dismiss="modal" class="btn">Close</a>
          <a href="#" class="btn btn-primary">Log-in</a>
        </div>
      </div>
    </div>
</div>
<?php include 'footer.php'; ?>
