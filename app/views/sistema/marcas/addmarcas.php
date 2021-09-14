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
                                    <h4 class="title">Agregar Marca</h4>
                                </div>
                                <div class="content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label>Categoría <star>*</star></label>
                                                <select class="form-control" id="categoria">
                                                    <?php foreach($this->categoria as $categoria){ ?>
                                                    <option value="<?=$categoria->idcategoria;?>"><?=$categoria->categoria;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label>Nombre de la marca <star>*</star></label>
                                                <input type="text" class="form-control" id="marca" name="marca" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div id="uplogo" style="margin-bottom: 20px;">Upload</div>

                                    <div id="mjs"></div>
                                    <div style="margin-top: 20px;">
                                        <a href="/marcas" class="btn btn-info"><i class="fa fa-reply"></i> Atrás</a>
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
    $(document).ready(() => {
        var uploadfiles = $('#uplogo').uploadFile({
            url: "/addmarcas",
            uploadStr: '<i class="fa fa-picture-o"></i> Subir logo de marca',
            multiple: false,
            autoSubmit: false,
            showPreview: true,
            dragDrop: true,
            sequential: true,
            sequentialCount: 1,
            onSelect: function(files) {
                fotoperfil = true;
                return true;
            },
            dynamicFormData: function() {
                var data = {
                    idcategoria: $('#categoria').val(),
                    marca: $('#marca').val(),
                }
                return data;
            },
            afterUploadAll: function(obj){
                $('#categoria').val(1).trigger('change');
                $('#marca').val('');
                $('#btn-save').prop('disabled', false);
                uploadfiles.reset();
            }
        });
        $('#btn-save').on('click', function() {
            $(this).prop('disabled', true);
            mfx(2, "Aguarde por favor...", "#mjs");
            uploadfiles.startUpload();
        });

    });
</script>

</html>