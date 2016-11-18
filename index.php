<?php include 'header.php'; ?>

<head>
  <style>
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
      <div class="center-block text-center">
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
          <div class="body">
            <div class="form-group has-feedback">
              <label for="exampleInputEmail1">Adresse mail</label>
              <input class="form-control" id="exampleInputEmail1" placeholder="Adresse mail" type="email">
              <i class="glyphicon glyphicon-user form-control-feedback"></i>
            </div>
            <div class="form-group has-feedback">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" type="password">
              <i class="glyphicon glyphicon-lock form-control-feedback"></i>
              <p align="right" width="50%"><a href="#">Mot de passe oublié ?</a></p>
            </div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-primary">Me connecter</a>
          </div>
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
                <input class="form-control" id="exampleInputEmail1" placeholder="Adresse mail" type="email">
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mot de passe</label>
              <div class="controls">
                <input class="form-control" id="exampleInputPassword1" placeholder="Mot de passe" type="password">
              </div>
            </div>
            <div class="form-group">
              <label for="reenterpassword">Confirmation de mot de passe </label>
              <div class="controls">
                <input class="form-control" id="reenterpassword" placeholder="Mot de passe" type="password">
              </div>
            </div>
          </div>
          <div class="footer">
            <a href="#" class="btn btn-primary">Créer mon compte</a>
          </div>
        </div>
      </div>
    </div><!--/container-fluid blocRight-->
  </div>
</body>
<?php include 'footer.php'; ?>
