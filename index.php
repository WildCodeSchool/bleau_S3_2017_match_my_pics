<?php include 'includes/header.php' ?>
<div class="container index">
	<div class="row">
		<div class="col-xs-offset-2 col-xs-8">
			<div>
				<img class="logo_index" src="assets/img/logo_small_blue.png" alt="logowcs">
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
<div id="fb-root"></div>
<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="100" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php include 'includes/footer.php' ?>