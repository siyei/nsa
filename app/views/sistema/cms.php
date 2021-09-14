<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="/sistema/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?=$GLOBALS['title']?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
    <meta name="viewport" content="width=device-width">
    
    <link href="/sistema/css/bootstrap.min.css" rel="stylesheet">
    <link href="/sistema/css/light-bootstrap-dashboard.css" rel="stylesheet">
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body> 


<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="blue" data-image="/sistema/img/login_bg.jpg">
            <div class="content">
                <div class="container">
                    <div class="row">                   
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form id="loginform">
                                <div class="card card-hidden">
                                    <h3 class="text-center" style="padding-top: 0px; margin-top: 0px;">
                                        NSA / CMS
                                    </h3>
                                    <div class="content">
                                        <div class="form-group">
                                            <label>Correo: <star>*</star></label>
                                            <input type="email" placeholder="Ingrese su correo" id="email" name="email" class="form-control" email="true" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label>Contraseña <star>*</star></label>
                                            <input type="password" placeholder="Ingrese su contraseña" id="password" name="password" class="form-control" required="true">
                                        </div>
                                        
                                        <div id="msj"></div>
                                    </div>

                                    <div class="footer text-center">
                                        <button type="submit" id="login" class="btn btn-fill btn-success btn-block btn-flg"><i class="fa fa-sign-in"></i> Ingresar</button>
                                    </div>

                                </div>
                            </form>
                        </div>                    
                    </div>
                </div>
            </div>
    </div>                             
</div>

</body>

<script src="/sistema/js/jquery.min.js" type="text/javascript"></script>
<script src="/sistema/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/sistema/js/jquery-ui.min.js"></script>

<script src="/sistema/js/jquery.validate.min.js"></script>
<script src="/sistema/js/jquery_validate_es.js"></script>
<script src="/sistema/js/sweetalert2.js"></script>
<script src="/sistema/js/light-bootstrap-dashboard.js"></script>
<script src="/sistema/js/mfx.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    lbd.checkFullPageBackgroundImage();
    
    setTimeout(function(){
        $('.card').removeClass('card-hidden');
    }, 500)
    $('#loginform').validate({
        submitHandler: function(form) {
            $("#login").prop('disabled', true);
            mfx(2, "Aguarde por favor...", "#msj");
            $.post('/cms',
            {
                email    : $("#email").val(),
                password : $("#password").val()
            }, function(r){
                console.log(r);
                if(r.error == 0){
                    location.href=r.href;
                }else{
                    $("#login").prop('disabled', false);
                    mfx(r.codigo, r.mensaje, "#msj");
                }
            }, 'json');
        }
    });
});
</script>
</html>