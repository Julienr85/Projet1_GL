<?php include 'header.php'; ?>

<head>
<style>
#blocFgtPwd{
	max-width:500px;
}
</style>
</head>

<body>
<div class="container-fluid" id="blocFgtPwd">
	<div class="dialog">
		<div class="content">
			<div class="header">
				<h4 class="title">Vous avez oublié votre mot de passe ?</h4>
			</div>
			<div class="body" width="50%">
				<div class="form-group has-feedback">
					<label for="inputEmail">Adresse mail</label>
					<input class="form-control" id="inputEmail" placeholder="@" type="email" width="50%">
				</div>
			</div>
          <div class="footer" align="right">
            <button type="button" class="btn btn-primary" onclick="getPwd();">Obtenir mon mot de passe</button>
		</div>
		<br/>
		<div class="alert alert-success" role="alert" hidden="true" id="validAddress">
  			<i class="glyphicon glyphicon-ok"></i>
  			Un mail vient de vous être envoyé avec votre mot de passe
		</div>
		<div class="alert alert-danger" role="alert" hidden="true" id="errorAddress">
  			<i class="glyphicon glyphicon-remove"></i>
  			Cette adresse mail n'est pas reconnue
		</div>
	</div>
</div>

<script>
	function getPwd(){
		// si adresse connue, envoyer mail à l'adresse avec mot de passe
		if (inputEmail.value == "toto@gmail.com")
		{
			errorAddress.setAttribute("hidden", "true");
			validAddress.removeAttribute("hidden");
		}else{ // sinon message d'erreur
			validAddress.setAttribute("hidden", "true");
			errorAddress.removeAttribute("hidden");
		}
	}
</script>
</body>
<?php include 'footer.php'; ?>