
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crop Image</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url() ?>assets/css/crop.css">
    <link  href="<?=base_url() ?>assets/cropper/cropper.css" rel="stylesheet">

</head>
<body>
<div class="container text-center">
<button class="btn btn-success" data-toggle="modal" data-target="#crop_image" >Upload Image</button>
</div>
<div id="crop_image" class="modal fade" role="dialog" style="display:none">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Image Crop</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Load Image</label>
                            <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Browse… <input type="file" id="imgInp">
                                </span>
                            </span>
                                <input type="text" class="form-control" readonly>
                            </div>
                            <img id='img-upload'/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
                <button class="btn btn-info" id="getData">Crop</button>
            </div>
        </div>
</body>
</html>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script  src="<?=base_url() ?>assets/cropper/cropper.js" ></script>

<script src="<?=base_url() ?>assets/js/crop.js"></script>
