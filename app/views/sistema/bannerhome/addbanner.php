<?php Template::load('/sistema/head.php'); ?>
<link href="/sistema/uploadimg/uploadfile.css" rel="stylesheet">
<body>

    <div class="wrapper">
        <?php Template::load('/sistema/nav.php'); ?>

        <div class="sidebar" data-color="<?= TEMPLATEFX ?>">
            <?php Template::load('/sistema/menu.php'); ?>
        </div>

        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Agregar Banner</h4>
                                </div>
                                <div class="content">
                                    
                                    <div id="uplogo" style="margin-bottom: 20px;">Upload</div>
                                    <div id="upbanner" style="margin-bottom: 20px;">Upload</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label>Texto <star>*</star></label>
                                                <textarea class="form-control" id="text"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="mjs"></div>
                                    <div style="margin-top: 20px;">
                                        <a href="/banner-home" class="btn btn-info"><i class="fa fa-reply"></i> Atrás</a>
                                        <button type="submit" id="btn-save" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Guardar</button>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>



</body>
<!--   Core JS Files and PerfectScrollbar library inside jquery.ui   -->
<script src="/sistema/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/sistema/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="/sistema/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/sistema/js/light-bootstrap-dashboard.js"></script>
<script src="/sistema/js/mfx.js"></script>
<script src="/sistema/js/jquery.validate.min.js"></script>
<script src="/sistema/js/jquery_validate_es.js"></script>
<script src="/sistema/js/jquery.mask.min.js"></script>

<!-- upload -->
<script src="/sistema/uploadimg/jquery.uploadfile.min.js"></script>

<script type="text/javascript">
    var idbanner = 0;
    var logoImgSelect = false;
    var BannerImgSelect = false;
    $(document).ready(() => {
        var img1 = $('#uplogo').uploadFile({
            url: "/sabeLogoBannerHome",
            uploadStr: '<i class="fa fa-picture-o"></i> Subir logo de marca',
            multiple: false,
            autoSubmit: false,
            showPreview: true,
            dragDrop: true,
            sequential: true,
            sequentialCount: 1,
            onSelect: function(files) {
                logoImgSelect = true;
                return true;
            },
            dynamicFormData: function(){
                var data = {
                    idbanner: idbanner
                }
                return data;
            },
            afterUploadAll: function(obj){
                mfx(3, "Procesando logo...", "#mjs");
                img1.reset();
            }
        });
        var img2 = $('#upbanner').uploadFile({
            url: "/sabeBannerBigHome",
            uploadStr: '<i class="fa fa-picture-o"></i> Subir banner de marca',
            multiple: false,
            autoSubmit: false,
            showPreview: true,
            dragDrop: true,
            sequential: true,
            sequentialCount: 1,
            onSelect: function(files) {
                BannerImgSelect = true;
                return true;
            },
            dynamicFormData: function() {
                var data = {
                    idbanner: idbanner
                }
                return data;
            },
            afterUploadAll: function(obj){
                img2.reset();
                mfx(0, "Carga completa", "#mjs");
                $('#text').val('');
                $('#btn-save').prop('disabled', false);
            }
        });
        $('#btn-save').on('click', function() {
            if(logoImgSelect == false || BannerImgSelect == false){
                mfx(1, "Ingrese el logo y banner", "#mjs");
            }else{
                if($('#text').val() == ''){
                    mfx(1, "Ingrese el texto", "#mjs");
                }else{
                    $(this).prop('disabled', true);
                    mfx(2, "Procesando fotos...", "#mjs");
                    $.post('/addbanner',{
                        text : $('#text').val()
                    }, function(r){
                        idbanner = r.idbannerhome;
                        img1.startUpload();
                        img2.startUpload();
                    }, 'json');
                }
            }
            
        });

    });
</script>

</html>