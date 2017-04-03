<form class="" action="xxx.php?section=add" method="POST">
				<div class="input-field">
					<label for="addpics">Ajoutez votre photo!</label>
					<script type="text/javascript">
						function getfile(){
    						document.getElementById('hiddenfile').click();
    						document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value
							}
					</script>
					<input type="file" id="hiddenfile" style="display:none" />
					<input type="button" value="Ajoute ta photo !!!" onclick="getfile()" />
					 
<script type='text/javascript'>//<![CDATA[
$(window).load(function(){
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
             
            reader.onload = function (e) {
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







					
					 <form id="form1" runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" src="#" alt="your image" />
    </form>
				</div>
			</form>
		</div>