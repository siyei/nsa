<?php Template::load('/main/head.php'); ?>

<body>
    <?php Template::load('/main/menu.php'); ?>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/img-banner-simple/parque-industrial.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block n-zindex">
                    <h5>Operador logístico</h5>
                    <p>Todo en un mismo lugar</p>
                </div>
            </div>
        </div>
    </div>
    <section class="section section-color">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card card1">
                        <img src="/img/parque-1.jpg" class="img-fluid" />
                        <div class="card-body">
                            <span class="badge rounded-pill bg-primary-badge mb-3">Paraguay</span>
                            <h4>
                                En Nuestra Señora de la Asunción 
                                te ofrecemos un lugar donde:
                            </h4>
                            <ul class="lista-nsa">
                                <li><i class="zwicon-checkmark"></i> Desarrollar tu industria o empresa con la mayor seguridad</li>
                                <li><i class="zwicon-checkmark"></i> Servicios integrales y funcionales de parques.</li>
                                <li><i class="zwicon-checkmark"></i> Un desarrollo con mas de 150.000 m² de superficie estratégicamente ubicados.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card card1">
                        <img src="/img/parque-2.jpg" class="img-fluid" />
                        <div class="card-body">
                            <span class="badge rounded-pill bg-primary-badge mb-3">¿Porqué elegirnos?</span>
                            <h4>Ubicación estrategica infraestructura / Servicios internacionales / Tecnología seguridad y permisos</h4>
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