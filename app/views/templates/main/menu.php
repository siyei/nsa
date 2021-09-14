<?php
switch($GLOBALS['menu']){
    case 1 : $a = 'active'; break;
    case 2 : $b = 'active'; break;
    case 3 : $c = 'active'; break;
    case 4 : $d = 'active'; break;
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="/">
                    <img src="/img/logo-nsa.svg" width="318" height="47" alt="NSA"  />
                </a>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="/" class="nav-link <?=$a;?>">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="/envio-de-dinero" class="nav-link <?=$b;?>">Envio de Dinero</a>
                </li>
                <li class="nav-item">
                    <a href="/tracking" class="nav-link <?=$c;?>">Tracking</a>
                </li>
                <li class="nav-link i-menu">
                    <i class="zwicon-hamburger-menu"></i>
                    <div class="cont-menu-desk">
                        <div class="row">
                            <div class="col-md-4 mr-cero">
                                <div class="cont-voy-menu text-center">
                                    <h4 class="text-">Servicio VOY</h4>
                                    <p>Programa de fidelidad para nuestros clientes</p>
                                    <button class="btn btn-voy-menu">Conocer más</button>
                                </div>
                            </div>
                            <div class="col bg-white">
                                <div class="cont-menu-list">
                                    <a href="/destinos"><i class="zwicon-chevron-right"></i>Destinos</a>
                                    <a href="/parque-industrial"><i class="zwicon-chevron-right"></i>Parque industrial</a>
                                    <a href="/encomiendas"><i class="zwicon-chevron-right"></i>Encomiendas</a>
                                    <a href="/turismo"><i class="zwicon-chevron-right"></i>Turismo - Alquiler de buses</a>
                                    <a href="/envio-de-dinero"><i class="zwicon-chevron-right"></i>Envio de Dinero - Western Union</a>
                                    <a href="/nosotros"><i class="zwicon-chevron-right"></i>Acerca de NSA</a>
                                    <a href="/cargas-internacionales"><i class="zwicon-chevron-right"></i>Cargas internacionales</a>
                                    <a href="/operador-logistico"><i class="zwicon-chevron-right"></i>Operador Logístico</a>
                                    <a href="/contacto"><i class="zwicon-chevron-right"></i>Contacto</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>