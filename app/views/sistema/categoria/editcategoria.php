<?php Template::load('/sistema/head.php');?>
<body>

<div class="wrapper">
    <?php Template::load('/sistema/nav.php');?>

    <div class="sidebar" data-color="<?=TEMPLATEFX?>" >
        <?php Template::load('/sistema/menu.php');?>
    </div>

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar categoría</h4>
                            </div>
                            <div class="content">
                                <form id="perfilvalidate">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-success">
                                                <label>Nombre de la categoría <star>*</star></label>
                                                <input type="text" class="form-control" id="categoria" name="categoria" value="<?=$this->data[0]->categoria;?>" required="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mjs"></div>

                                    <a href="/categoria" class="btn btn-info"><i class="fa fa-reply"></i> Atrás</a>
                                    <button type="submit" id="savecliente" class="btn btn-success"><i class="fa fa-cloud-upload"></i> Guardar</button>       
                                    <div class="clearfix"></div>
                                </form>
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

<script type="text/javascript">
$('#perfilvalidate').validate({
    submitHandler: function(form) {
        $("#savecliente").prop('disabled', true);
        mfx(2, "Aguarde por favor...", "#mjs");
        $.post('/editcategoria',
        {
            idcategoria : <?=$this->data[0]->idcategoria;?>,
            categoria   : $("#categoria").val()
        }, function(r){
            $("#savecliente").prop('disabled', false);
            mfx(r.codigo, r.mensaje, "#mjs");
        }, 'json');
    }
});
</script>
</html>
