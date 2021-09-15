<?php Template::load('sistema/head.php'); ?>
<link href="/sistema/uploadimg/uploadfile.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
<body>

    <div class="wrapper">
        <?php Template::load('sistema/nav.php'); ?>

        <div class="sidebar" data-color="<?= TEMPLATEFX ?>">
            <?php Template::load('sistema/menu.php'); ?>
        </div>

        <div class="main-panel">

            <div class="content">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Agregar turismo</h4>
                                </div>
                                <div class="content">
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <strong>Warning!</strong> Imágenes de tamaño máximo de 2 MB. 16:9 Ratio
                                    </div>

                                    <div id="upthumbnail" style="margin-bottom: 20px;">Upload</div>
                                    <div class="form-group">
                                        <label>País</label>
                                        <select class="form-control" id="idpais">
                                            <?php foreach ($this->pais as $pais) { ?>
                                                <option value="<?= $pais->idpais; ?>"><?= $pais->pais; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Destino</label>
                                        <input type="text" class="form-control" id="destino" name="destino" required="true" placeholder="Ej.: Encarnación" />
                                    </div>
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" id="precio" name="precio" required="true" placeholder="Ej.: 280000">
                                    </div>
                                    <div class="form-group">
                                        <label>Detalles</label>
                                        <textarea class="form-control" id="detalles" rows="6"></textarea>
                                    </div>

                                    <div id="mjs"></div>

                                    <a href="/listturismo" class="btn btn-info btn-fill btn-wd pull-left"><i class="fa fa-reply"></i> Atrás</a>
                                    <button id="btn-save" class="btn btn-success btn-fill btn-wd pull-right"><i class="fa fa-cloud"></i> Guardar</button>
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
    var iddestino = 0;
    var thumbnailSelected = false;
    var BannerImgSelect = false;
    let editor;
    ClassicEditor
        .create( document.querySelector( '#detalles' ) )
        .then( newEditor => {
            editor = newEditor;
        })
        .catch( error => {
            console.error( error );
        } );
    $(document).ready(() => {
        var img1 = $('#upthumbnail').uploadFile({
            url: "/sabethumbnailturismo",
            uploadStr: '<i class="fa fa-picture-o"></i> Subir imágen del destino',
            multiple: false,
            autoSubmit: false,
            showPreview: true,
            dragDrop: true,
            sequential: true,
            sequentialCount: 1,
            onSelect: function(files) {
                thumbnailSelected = true;
                return true;
            },
            dynamicFormData: function() {
                var data = {
                    idturismo: idturismo
                }
                return data;
            },
            afterUploadAll: function(obj) {
                mfx(3, "Procesando...", "#mjs");
                img1.reset();
                $('#destino').val('');
                $('#precio').val('');
                $('#detalles').val('');
                $('#btn-save').prop('disabled', false);
            }
        });

        $('#btn-save').on('click', function() {
            if (thumbnailSelected == false) {
                mfx(1, "Ingrese una imágen", "#mjs");
            } else {
                if ($('#destino').val() == '') {
                    mfx(1, "Ingrese el destino", "#mjs");
                } else {
                    $(this).prop('disabled', true);
                    mfx(2, "Procesando fotos...", "#mjs");
                    $.post('/addturismo', {
                        idpais: $('#idpais').val(),
                        destino: $('#destino').val(),
                        precio: $('#precio').val(),
                        detalles: editor.getData()
                    }, function(r) {
                        idturismo = r.idturismo;
                        img1.startUpload();
                    }, 'json');
                }
            }

        });

    });
</script>

</html>