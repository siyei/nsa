<?php Template::load('/main/head.php'); ?>

<body>
    <?php Template::load('/main/menu.php'); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/img-banner-simple/turismo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block n-zindex">
                    <h5>Un destino, mil recuerdos</h5>
                    <p>Te ofrecemos los mejores paquetes a varios destinos</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="galeriaturismo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Galería de fotos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="/img/servicios/destino.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/servicios/envio-dinero.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/img/servicios/puntos-voy.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-color">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">Descubrí <?=$this->data[0]->pais;?></h2>
                    <p class="text-center italic">
                        Disponemos de paquetes de viajes que incluyen traslado,</br>
                        hospedaje y tours en los destinos elegidos.
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col">
                    <h1><?=$this->data[0]->destino;?></h1>
                    <p>
                        <?=$this->data[0]->detalles;?>
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body" data-bs-toggle="modal" data-bs-target="#galeriaturismo" style="cursor:pointer;">
                            <img src="/img/destinos/<?=$this->data[0]->thumbnail;?>" class="img-fluid cursor-pointer"/>
                            <p class="mt-2 mb-0 text-center">
                                <?=$this->data[0]->destino;?>, galería de fotos
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="section section-color">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">Descubrí otros puntos que tenemos para vos</h2>
                    <p class="text-center sub-title-p">Elegí la mejor opción para vos</p>
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
            <!-- <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <button class="btn btn-primary">Accedé a nuestra lista completa</button>
                </div>
            </div> -->
        </div>
    </section>

    <?php Template::load('/main/footer.php'); ?>
    <?php Template::load('/main/menuscript.php'); ?>
</body>

</html>