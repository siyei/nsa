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
                                    <h4 class="title">Editar Banner</h4>
                                </div>
                                <div class="content">
                                    <div style="width: 206px; margin:auto; border: 2px #b3b3b3 solid; border-radius: 5px; margin-bottom:20px;">
                                        <img src="/sistema/img/bannerhome/<?=$this->data->logo;?>" height="80" />
                                    </div>
                                    <div id="uplogo" style="margin-bottom: 20px;">Upload</div>
                                    <div style="width: 146px; margin:auto; border: 2px #b3b3b3 solid; border-radius: 5px; margin-bottom:20px;">
                                        <img src="/sistema/img/bannerhome/<?=$this->data->banner;?>" height="80" />
                                    </div>
                                    <div id="upbanner" style="margin-bottom: 20px;">Upload</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label>Texto <star>*</star></label>
                                                <textarea class="form-control" id="text"><?=$this->data->text;?></textarea>
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
            uploadStr: '<i class="fa fa-picture-o"></i> Cambiar logo de marca',
            multiple: false,
            autoSubmit: true,
            showPreview: true,
            dragDrop: true,
            sequential: true,
            sequentialCount: 1,
            dynamicFormData: function(){
                var data = {
                    idbanner: <?=$this->params['get']['idbannerhome'];?>
                }
                return data;
            },
            afterUploadAll: function(obj){
                mfx(0, "Logo cambiado...", "#mjs");
                location.reload();
            }
        });
        var img2 = $('#upbanner').uploadFile({
            url: "/sabeBannerBigHome",
            uploadStr: '<i class="fa fa-picture-o"></i> Cambiar banner de marca',
            multiple: false,
            autoSubmit: true,
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
                    idbanner: <?=$this->params['get']['idbannerhome'];?>
                }
                return data;
            },
            afterUploadAll: function(obj){
                mfx(0, "Banner cambiado...", "#mjs");
                location.reload();
            }
        });
        $('#btn-save').on('click', function() {
            if($('#text').val() == ''){
                mfx(1, "Ingrese el texto", "#mjs");
            }else{
                $(this).prop('disabled', true);
                mfx(2, "Aguarde...", "#mjs");
                $.post('/editbanner',{
                    idbannerhome : <?=$this->params['get']['idbannerhome'];?>,
                    text : $('#text').val()
                }, function(r){
                    $(this).prop('disabled', false);
                    mfx(0, "Banner editado...", "#mjs");
                }, 'json');
            }
        });

    });
</script>

</html>