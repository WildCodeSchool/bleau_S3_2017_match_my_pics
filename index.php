<?php include 'includes/header.php' ?>
<div class="container index">
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<div>
				<img class="logo_index" src="assets/img/logo_small_orange.png" alt="logowcs">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<h2>Identifiant :</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<input type="text" placeholder="Team cacahuette" name="identifiant">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<h2>Mot de passe :</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<input type="password" name="mdp">			
		</div>
	</div>	
	<div class="connexion">	
		<a href="rules_of_game.php">
			<i class="fa fa-power-off bouton_connect fa-5x" aria-hidden="true">
			</i>
			<span class="sr-only">Loading...</span>
		</a>
	</div>
</div>
<?php include 'includes/footer.php' ?>