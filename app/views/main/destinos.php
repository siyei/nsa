<?php Template::load('/main/head.php'); ?>

<body>
    <?php Template::load('/main/menu.php'); ?>
    <section class="section section-color">
        <div class="container mt-5 pt-5">
            <div class="row d-flex align-items-center">
                <div class="col-md-2 text-center order-md-2">
                    <img src="/img/nsa-turismo-logo.svg" class="img-fluid"  />
                </div>
                <div class="col-md-10 order-md-1">
                    <h2 class="title-simple title-destino fw-bold">Un destino, mil recuerdos</h2>
                    <p class="fst-italic p-subtitle-italic">
                    Te ofrecemos los mejores paquetes a varios destinos que incluyen <br/>
                    translado, hospedaje y tours en los destinos elegidos.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- fin intro -->
    <section class="section section-color bottom-line margin-top-index">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">¿A dónde queres viajar?</h2>
                    <p class="text-center sub-title-p">Salidas diarias</p>
                </div>
            </div>
            <div class="row">
                <!-- card -->
                <?php foreach($this->allDestino as $destino) { ?>
                <div class="col-md-3 mb-4">
                    <a href="/destinos-detalles/<?=$destino->iddestino;?>" class="card-link">
                        <div class="card card1">
                            <img src="/img/destinos/<?=$destino->thumbnail;?>"" class="img-fluid" />
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary-badge mb-3"><?=$destino->pais;?></span>
                                <h4><?=$destino->destino;?></h4>
                                <p class="card-text">Desde: <?=toMil($destino->precio);?> Gs.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <button class="btn btn-primary">Cargar más destinos</button>
                </div>
            </div>
        </div>
    </section>
    <!-- fin destinos -->
    <section class="section section-color-strong bottom-line">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="text-center fw-bold text-title">Tipos de servicios</h2>
                    <div class="cont-servicios mt-5">
                        <img src="/img/tipo-servicios/1.png" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin tipo de servicios -->
    <section class="section section-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11">
                    <h2 class="text-center fw-bold text-title mb-5">Sobre tu viaje</h2>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Covid-19</h4>
                                    <p class="card-text text-grey">
                                        Conoce las medidas sanitarias que tomamos para tu cuidado.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Entretenimiento</h4>
                                    <p class="card-text text-grey">
                                        Baja nuestra app y disfruta de sus contenidos a bordo.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Salones VIP</h4>
                                    <p class="card-text text-grey">
                                        Te ofrecemos salones vip para que tu espera sea más placentera.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Velocidad controlada</h4>
                                    <p class="card-text text-grey">
                                        Cumplimos con los más altos estándares en seguridad en ruta.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Condiciones de viaje</h4>
                                    <p class="card-text text-grey">
                                        Enterate de los documentos necesarios para tu viaje.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="fw-bold fsx-sobre">Control Satelital</h4>
                                    <p class="card-text text-grey">
                                        Rastreo satelital de toda nuestra flota en tiempo real.
                                    </p>
                                    <a class="vermas mt-2" href="/">Ver más información <i class="zwicon-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php Template::load('/main/footer.php'); ?>
    <?php Template::load('/main/menuscript.php'); ?>
</body>

</html>