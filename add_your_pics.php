<?php include 'includes/header.php' ?>
<?php include 'includes/header_return.php' ?>

<div class="container">
	<div class="col-xs-12">
		<!--ligne pour ajouter notre photo-->
		<div class="row">

			<form class="" action="xxx.php?section=add" method="POST">
				<div class="input-field">
					<label for="addpics">Ajoutez votre photo!</label>

					<input type="hidden" name="MAX_FILE_SIZE" value="size à determiner" />

					<input id="addpics" type="file" name="addpics" required="">
				</div>
			</form>
		</div>
		
		<!--encart pour visualiser la photo que l'on veut soumettre-->
		<div class="row">

			<div id="visupics">
				<p style="text-align:center; margin-top:90px">visuel de la photo chargée</p>
			</div>
		</div>

		<!--zone de texte pour préciser des infos sur le lieux ou la photo que l'on soumet-->

		<div class="row">

			<form class="" action="xxx.php?section=add" method="POST">
				<label for="description">Précisez! (max. 255 caractères) :</label><br/>
     			<textarea name="description" id="description"></textarea><br/>
     			<input type="submit" name="submit" value="Envoyer" />
			</form>
		</div>
	</div>
</div>


































<?php include 'includes/footer.php' ?>
