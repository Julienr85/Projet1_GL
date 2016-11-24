<?php include 'header.php'; ?>

<div class="container">
    <div class="col-md-12">
        <div class="center-block text-center">
            <h1>Acheter des machines virtuelles en s'amusant</h1>
            <p class="lead">Windows, Mac OS, Ubuntu, on a tout</p>
        </div>
    </div>
</div>

<hr>

<div class="container">

             <div class="row">

               <div class="col-sm-3">
                 <a href="#">
                   <br>
                   <img class="img-responsive" src="assets/image/windows_logo.png" data-alt="" data-title="">
                 </a>
                 <br>

                </div>
                <div class="col-sm-9">

                  <h2><a class="url" href="#"> Windows 10</a></h2>

                  <ul class="list-group ticketView">
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Version</span>
                          10.1.2.24
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Poids</span>
                          10 Go
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Prix</span>
                          <label> 1000€ </label>
                      </li>
                      <li class="list-group-item ticketView">
                          <a href="produit_ajout.php" id="32_bit_Windows"  class="btn btn-primary achat">VM Windows</a>
                      </li>
                  </ul>

                </div><!--/col-->
            </div><!--/row-->

            <div class="row">

               <div class="col-sm-3">
                 <a href="#">
                   <br>
                   <img class="img-responsive" src="assets/image/macos_logo.png" data-alt="" data-title="">
                 </a>
                 <br>

                </div>
                <div class="col-sm-9">

                  <h2><a class="url" href="#"> Mac OS Sierra</a></h2>

                 <ul class="list-group ticketView">
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Version</span>
                          10.1.2.24
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Poids</span>
                          10 Go
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Prix</span>
                          <label> 1000€ </label>
                      </li>
                      <li class="list-group-item ticketView">
                          <a href="produit_ajout.php" id="32_bit_Mac"  class="btn btn-primary achat">VM Mac</a>
                      </li>
                  </ul>

                </div><!--/col-->
            </div><!--/row-->

            <div class="row">

               <div class="col-sm-3">
                 <a href="#">
                   <br>
                   <img class="img-responsive" src="assets/image/ubuntu_logo.png" data-alt="" data-title="">
                 </a>
                 <br>

                </div>
                <div class="col-sm-9">

                  <h2><a class="url" href="#"> Ubuntu</a></h2>

                  <ul class="list-group ticketView">
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Version</span>
                          10.1.2.24
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Poids</span>
                          10 Go
                      </li>
                      <li class="list-group-item ticketView">
                          <span class="label label-default">Prix</span>
                          <label> 1000€ </label>
                      </li>
                      <li class="list-group-item ticketView">
                        <a href="produit_ajout.php" id="32_bit_Ubuntu"  class="btn btn-primary achat">VM Ubuntu</a>
                      </li>
                  </ul>

                </div><!--/col-->
            </div><!--/row-->

            <hr>
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
