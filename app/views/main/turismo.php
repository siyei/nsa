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
            <div class="row">
                <!-- card -->
                <a href="/turismo-detalles/1" class="card-link">
                    <div class="col-md-3 mb-4">
                        <div class="card card1">
                            <img src="/img/lugares/thumbnail-mbatovi.jpg" class="img-fluid" />
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary-badge mb-3">Paraguay</span>
                                <h4>Encarnación</h4>
                                <p class="card-text">Desde: 280.000 Gs.</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <button class="btn btn-primary">Accedé a nuestra lista completa</button>
                </div>
            </div>
        </div>
    </section>

    <?php Template::load('/main/footer.php'); ?>
    <?php Template::load('/main/menuscript.php'); ?>
</body>
</html>