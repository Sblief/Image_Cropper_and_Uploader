$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = label;

        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }

    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
        setTimeout(initCropper, 2000);
    });

    function initCropper() {
        $('#img-upload').cropper({
            aspectRatio: 16 / 9,
            crop: function(e) {
                // Output the result data for cropping image.
                console.log(e.x);
                console.log(e.y);
                console.log(e.width);
                console.log(e.height);
                console.log(e.rotate);
                console.log(e.scaleX);
                console.log(e.scaleY);
            }
        });
    }

    $("button#getData").click(function(e){
        e.preventDefault();
        var cropped = $('#img-upload').cropper("getCropBoxData");
        console.log(cropped);
        $.ajax({
            type: "POST",
            cache: false,
            url: "crop/getCropData",
            data: cropped,
            success: function(msg){
                console.log(msg);
               
            },
            error: function(){
                alert("failure");
            }
        });
    });
 

});