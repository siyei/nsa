<?php Template::load('/main/head.php'); ?>

<body>
    <?php Template::load('/main/menu.php'); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/img-banner-simple/turismo.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block n-zindex">
                    <h5>Un destino, mil recuerdos</h5>
                    <p>Conocé nuestros paquetes de viajes</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <p class="text-center italic">
                        Disponemos de paquetes de viajes que incluyen traslado, hospedaje y tours en los destinos elegidos.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">Descubrí Paraguay</h2>
                    <p class="text-center sub-title-p">Elegí la mejor opción para vos</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- card -->
                <?php foreach ($this->allTurismo as $turismo) { ?>
                    <div class="col-md-3 mb-4">
                        <a href="/turismo-detalles/<?= $turismo->idturismo; ?>" class="card-link">
                            <div class="card card1">
                                <img src="/img/turismo/<?= $turismo->thumbnail; ?>"" class=" img-fluid" />
                                <div class="card-body">
                                    <span class="badge rounded-pill bg-primary-badge mb-3"><?= $turismo->pais; ?></span>
                                    <h4><?= $turismo->destino; ?></h4>
                                    <p class="card-text">Desde: <?= toMil($turismo->precio); ?> Gs.</p>
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

    <section class="section section-bg-primary-alquiler">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="text-white fw-bold text-center">Alquiler de buses</h3>
                    <p class="text-white">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    </p>
                    <form>
                        <div class="mb-3">
                            <label for="nombrecompleto" class="form-label text-white">Nombre completo</label>
                            <input type="text" class="form-control" id="nombrecompleto" placeholder="Juan Carlos Rotela">
                        </div>
                        <div class="mb-3">
                            <label for="celular" class="form-label text-white">Celular</label>
                            <input type="text" class="form-control" id="celular" placeholder="0981-123-123">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-white">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label text-white">Mensaje</label>
                            <textarea class="form-control" id="mensaje" rows="3"></textarea>
                        </div>
                    </form>
                    <button class="btn btn-info">Enviar petición</button>
                </div>
            </div>
        </div>
    </section>

    <?php Template::load('/main/footer.php'); ?>
    <?php Template::load('/main/menuscript.php'); ?>
</body>

</html>