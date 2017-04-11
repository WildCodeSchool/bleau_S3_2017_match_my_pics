function previousPicture(){
    $(window).load(function(){
        function readURL(label) {
            if (label.files && label.files[0]) {
                var reader = new FileReader();reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(label.files[0]);
            }
        }
        $("#file-input").change(function(){
            readURL(this);
        });
    });//]]> 
}

function getfile(){
    document.getElementById('hiddenfile').click();
    document.getElementById('selectedfile').value=document.getElementById('hiddenfile').value
}