<?php include 'header_default.php'; ?>

<head>
  <style>
    #blocTopLeft{
      float:left;
      width:auto;
      height:118px;
      content:url(assets/image/VMM_logo.png);
    }
    #blocTopRight{
      float:left;
      width:auto;
    }
    #blocGeneral{
      height:100%;
      width:100%;
      margin:auto;
      border-bottom:1px solid #ccc;
      border-left:1px solid #ccc;
      border-right:1px solid #ccc;
      padding:20px;
    }
    #blocLeft{
      float:left;
      width:50%;
      height:100%;
      padding:20px;
    }
    #blocRight{
      float:right;
      width:50%;
      height:100%;
      padding:20px;
      border-left:1px solid #CCC;
    }
    #passwordLeft{
      text-align:left;
      width:50%;
    }
    #passwordRight{
      text-align:right;
      width:50%;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="col-md-12">
      <div class="image" id="blocTopLeft"></div>
      <div class="container-fluid text-left" align="right" id="blocTopRight">
        <h1>Acheter des machines virtuelles en s'amusant</h1>
        <p class="lead">Windows, Mac OS, Ubuntu, on a tout</p>
      </div>
    </div>
  </div>

  <hr>
  <div class="container-fluid" id="blocGeneral">
    <div class="container-fluid" id="blocLeft">
      <div class="dialog">
        <div class="content">
          <div class="header">
            <h4 class="title">Connexion</h4>
          </div>
          <form class="form-signin" action="authentification.php" method="post">
            <div class="body">
              <div class="form-group has-feedback">
                <label for="exampleInputEmail1">Adresse mail</label>
                <input class="form-control" id="inputUser" placeholder="Adresse mail" type="email">
                <i class="glyphicon glyphicon-user form-control-feedback"></i>
              </div>
              <div class="form-group has-feedback">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input class="form-control" id="inputPassword" placeholder="Mot de passe" type="password">
                <i class="glyphicon glyphicon-lock form-control-feedback"></i>
              </div>
            </div>
            <div class="footer" align="right">
              <p width="50%" style="font-size:small"><a href="forgot_passwd.php">Mot de passe oublié ?</a></p>
              <input type="submit" class="btn btn-primary" id="submit" value="Me connecter"></input>
            </div>
          </form>
        </div>
      </div>
      <hr>
    </div><!--/container-fluid blocLeft-->

    <div class="container-fluid" id="blocRight">
      <div class="dialog">
        <div class="content">
          <div class="header">
            <h4 class="title">Première visite ?</h4>
          </div>
          <div class="body">
            <form name="form_compte" id="form_compte">
              <div class="form-group"><label for="nom">Nom</label>
                <div class="controls"><input typ="form-control" class="form-control" name="nom_compte" placeholder="Nom" type="text"></div>
              </div>
              <div class="form-group"><label for="prenom">Prénom</label>
                <div class="controls"><input type="form-control" class="form-control" name="prenom_compte" placeholder="Prénom" type="text"></div>
              </div>
              <div class="form-group"><label for="exampleInputEmail1">Adresse mail</label>
                <div class="controls"><input type="form-control" class="form-control" id="inputEmail_compte" placeholder="Adresse mail" type="email"></div>
              </div>
              <div class="form-group"><label for="exampleInputPassword1">Mot de passe</label>
                <div class="controls"><input type="form-control" class="form-control" id="inputPassword_compte" placeholder="Mot de passe" type="password"></div>
              </div>
              <div class="footer" align="left">
                <input type="submit" value="Créer mon compte" class="btn btn-primary" id="creationCompte"></input>
                <a href="#modalCompte" data-toggle="modal" data-target="#modalCompte" class="btn btn-primary achat">Récap infos</a>
              </div>
            </form>
          </div><!--/div class="body"-->
        </div>
      </div>
    </div><!--/container-fluid blocRight-->
  </div>
  <div class="modal fade" id="modalCompte">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Infos du compte</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
          <div class="modal-footer">
            <a href="#" data-dismiss="modal" class="btn">Annuler</a>
            <a href="#" class="btn btn-primary">Valider</a>
          </div>
        </div>
      </div>
    </div>
  </div>




</body>
<?php include 'footer.php'; ?>
