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
            <div class="row mt-5 gap-5 justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <img src="/img/turismo/<?=$this->data[0]->thumbnail;?>" class="img-fluid rounded text-center"/>
                            <div class="row mt-3 align-items-center bottom-line">
                                <div class="col-md-6">
                                    <p class="mb-0 fw-bold text-color-primary">Precio por persona:</p>
                                    <p class="fw-bold fs-4 text-color-primary"><?=toMil($this->data[0]->precio);?> Gs.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="row align-items-center mb-2">
                                        <div class="col">
                                            <p class="mb-0 fw-bold">Operado por:</p>
                                        </div>
                                        <div class="col">
                                            <img src="/img/nsa-turismo-logo.svg" class="img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mt-3">
                                    <p>
                                        <?=$this->data[0]->detalles;?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="fw-bold fs-5">
                        Escribinos para tener más información del paquete <span class="text-color-primary"><?=$this->data[0]->destino;?> - <?=$this->data[0]->pais;?></span>
                    </p>
                    <form>
                        <div class="mb-3">
                            <label for="nombrecompleto" class="form-label">Nombre completo</label>
                            <input type="text" class="form-control" id="nombrecompleto" placeholder="Juan Carlos Rotela">
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label">Celular</label>
                            <input type="text" class="form-control" id="celular" placeholder="0981-123-123">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary px-5">Enviar</button>
                    </form>
                    
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
            <div class="row justify-content-center">
                <!-- card -->
                <?php foreach($this->allTurismo as $turismo) { ?>
                <div class="col-md-3 mb-4">
                    <a href="/turismo-detalles/<?=$turismo->idturismo;?>" class="card-link">
                        <div class="card card1">
                            <img src="/img/turismo/<?=$turismo->thumbnail;?>"" class="img-fluid" />
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary-badge mb-3"><?=$turismo->pais;?></span>
                                <h4><?=$turismo->destino;?></h4>
                                <p class="card-text">Desde: <?=toMil($turismo->precio);?> Gs.</p>
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