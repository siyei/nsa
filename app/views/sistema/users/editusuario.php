<?php Template::load('sistema/head.php');?>
<body>

<div class="wrapper">
    <?php Template::load('sistema/nav.php');?>

    <div class="sidebar" data-color="<?=TEMPLATEFX?>" >
        <?php Template::load('sistema/menu.php');?>
    </div>

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Editar usuarios</h4>
                            </div>
                            <div class="content">
                                <form id="perfilvalidate">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Nombre</label>
                                                <input type="text" class="form-control" id="snombre" name="snombre" value="<?=$this->user->nombre;?>" required="true">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control" id="sapellido" name="sapellido" value="<?=$this->user->apellido;?>" required="true">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input type="email" class="form-control" id="semail" name="semail" value="<?=$this->user->email;?>" required="true" email="true">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="alert alert-info" data-notify="container">
                                                <i class="fa fa-info"></i>
                                                <span data-notify="message">En el caso que desee modificar su contraseña de acceso actual, modifique los campos de abajo.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Contraseña</label>
                                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Contraseña">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Re ingresar contraseña</label>
                                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Re ingresar contraseña">
                                            </div>
                                        </div>
                                    </div>
                                    <div id="mjs"></div>

                                    <a href="/usuarios" class="btn btn-info btn-fill btn-wd pull-left"><i class="fa fa-reply"></i> Atrás</a>        
                                    <button type="submit" id="updateperfil" class="btn btn-success btn-fill btn-wd pull-right"><i class="fa fa-cloud"></i> Guardar</button>        
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
        $("#updateperfil").prop('disabled', true);
        var pass1 = $('#password1').val();
        var pass2 = $('#password2').val();
        if(pass1 != pass2){
            mfx(1, "Su contraseña debe coincidir", "#mjs");
            $("#updateperfil").prop('disabled', false);
        }else{
            mfx(2, "Aguarde por favor...", "#mjs");
            var nombre = $("#snombre").val();
            var apellido = $("#sapellido").val();
            $.post('/editusuario',
            {
                iduser      : <?=$this->params['get']['iduser'];?>,
                nombre      : nombre,
                apellido    : apellido,
                email       : $("#semail").val(),
                password    : pass2,
                avatar      : 'https://ui-avatars.com/api/?name='+nombre+'%20'+apellido+'&background=f5a325&color=fff&size=128'
            }, function(r){
                $("#updateperfil").prop('disabled', false);
                mfx(0, 'Usuario editado', "#mjs");
            }, 'json');
        }
    }
});
</script>
</html>
