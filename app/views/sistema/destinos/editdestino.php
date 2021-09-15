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
                                    <h4 class="title">Editar destino</h4>
                                </div>
                                <div class="content">
                                    <div class="alert alert-warning alert-dismissible" role="alert">
                                        <strong>Warning!</strong> Imágenes de tamaño máximo de 2 MB. 16:9 Ratio
                                    </div>
                                    <div class="vistaprevia" style="margin-bottom: 15px;">
                                        <img src="/img/destinos/<?=$this->data->thumbnail;?>" class="img-responsive img-rounded" />
                                    </div>
                                    <div id="upthumbnail" style="margin-bottom: 20px;">Upload</div>
                                    <div class="form-group">
                                        <label>País</label>
                                        <select class="form-control" id="idpais">
                                            <?php foreach ($this->pais as $pais) { ?>
                                                <?php if($pais->idpais == $this->data->idpais){ ?>
                                                    <option selected value="<?= $pais->idpais; ?>"><?= $pais->pais; ?></option>
                                                <?php }else{ ?>
                                                    <option value="<?= $pais->idpais; ?>"><?= $pais->pais; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Destino</label>
                                        <input type="text" class="form-control" id="destino" name="destino" required="true" placeholder="Ej.: Encarnación" value="<?=$this->data->destino;?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Precio</label>
                                        <input type="text" class="form-control" id="precio" name="precio" required="true" placeholder="Ej.: 280000" value="<?=$this->data->precio;?>" />
                                    </div>
                                    <div class="form-group">
                                        <label>Detalles</label>
                                        <textarea class="form-control" id="detalles" rows="6"><?=$this->data->detalles;?></textarea>
                                    </div>

                                    <div id="mjs"></div>

                                    <a href="/listdestinos" class="btn btn-info btn-fill btn-wd pull-left"><i class="fa fa-reply"></i> Atrás</a>
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
    let editor;
    ClassicEditor
        .create( document.querySelector( '#detalles' ) )
        .then( newEditor => {
            editor = newEditor;
        })
        .catch( error => {
            console.error( error );
        } );
    var iddestino = 0;
    var thumbnailSelected = false;
    var BannerImgSelect = false;
    $(document).ready(() => {
        var img1 = $('#upthumbnail').uploadFile({
            url: "/sabethumbnail",
            uploadStr: '<i class="fa fa-picture-o"></i> Cambiar imágen del destino',
            multiple: false,
            autoSubmit: true,
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
                    iddestino: <?=$this->params['get']['iddestino'];?>
                }
                return data;
            },
            afterUploadAll: function(obj) {
                mfx(3, "Procesando...", "#mjs");
                img1.reset();
                $('#destino').val('');
                $('#precio').val('');
                $('#btn-save').prop('disabled', false);
            }
        });

        $('#btn-save').on('click', function() {
            if ($('#destino').val() == '') {
                mfx(1, "Ingrese el destino", "#mjs");
            } else {
                $(this).prop('disabled', true);
                mfx(2, "Procesando fotos...", "#mjs");
                $.post('/editdestino', {
                    iddestino : <?=$this->params['get']['iddestino'];?>,
                    idpais: $('#idpais').val(),
                    destino: $('#destino').val(),
                    precio: $('#precio').val(),
                    detalles: editor.getData()
                }, function(r) {
                    $('#btn-save').prop('disabled', false);
                    mfx(0, "Datos editados.", "#mjs");
                }, 'json');
            }
        });

    });
</script>

</html>