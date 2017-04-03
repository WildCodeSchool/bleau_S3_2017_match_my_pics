<?php include 'includes/header.php' ?>
<?php include 'includes/header_return.php' ?>

<div class="container">
	<div class="col-xs-12">
		<!--ligne pour ajouter notre photo-->
		<div class="row">

			<form class="" action="xxx.php?section=add" method="POST">
				<div class="input-field">
					 
					<script type='text/javascript'>//<![CDATA[
						$(window).load(function(){
							function readURL(input) {
								if (input.files && input.files[0]) {
									var reader = new FileReader();reader.onload = function (e) {
										$('#blah').attr('src', e.target.result);
									}
            reader.readAsDataURL(input.files[0]);
}
}
			$("#imgInp").change(function(){
				readURL(this);
        });
	});//]]> 
 
					</script>

					<script type="text/javascript">
						function getfile(){
    						document.getElementById('hiddenfile').click();
    						document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value
							}
					</script>
					
					 <form id="form1" runat="server">
       					 <input type='file' id="imgInp" />
       					 <img id="blah" src="#" alt="your image" />    
				</div>
			</form>
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
