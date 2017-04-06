function previousPicture(){
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
}

function getfile(){
    document.getElementById('hiddenfile').click();
    document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value
}