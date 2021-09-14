<?php Template::load('/main/head.php'); ?>

<body>
    <!-- Modal -->
    <div class="modal fade" id="destinomodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Destino / Encarnación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">C.I.:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Celular:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Mensajer:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Registrar</button>
                </div>
            </div>
        </div>
    </div>
    <?php Template::load('/main/menu.php'); ?>
    <section class="cd-hero js-cd-hero js-cd-autoplay">
		<ul class="cd-hero__slider">
            
            <li class="cd-hero__slide cd-hero__slide--selected js-cd-slide" style="background-image: url('/img/banner-home/bg_1.jpg');">
                <div class="cd-hero__content cd-hero__content--half-width">
					<h2>!Acá va una promo!</h2>
					<p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
					<a href="/" class="btn btn-danger">Conoce más</a>
				</div>
			</li>
            <li class="cd-hero__slide js-cd-slide" style="background-image: url('/img/banner-home/bg_2.jpg');">
                <div class="cd-hero__content cd-hero__content--half-width">
					<h2>!Acá va una promo! 2</h2>
					<p>
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry...
                    </p>
					<a href="/" class="btn btn-warning">Conoce más</a>
				</div>
			</li>
            
		</ul>
	</section>
    <!-- fin banner -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="cont-buscador">
                <div class="top-buscador">
                    <h3>Compra de pasajes</h3>
                    <p>*Pago de pasajes únicamente online</p>
                </div>
                <div class="col-md-12">
                    <div class="con-white-form">
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                                    <label class="form-check-label" htmlFor="flexRadioDefault1">
                                        Solo ida
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" defaultChecked />
                                    <label class="form-check-label" htmlFor="flexRadioDefault2">
                                        Ida y vuelta
                                    </label>
                                </div>
                            </div>
                        </div>
                        <form class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Lugar de partida</option>
                                    <option value={1}>One</option>
                                    <option value={2}>Two</option>
                                    <option value={3}>Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Lugar de destino</option>
                                    <option value={1}>One</option>
                                    <option value={2}>Two</option>
                                    <option value={3}>Three</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" aria-label="Default select example">
                                    <option>Fecha de destino</option>
                                    {/* <option value={1}>One</option>
                                    <option value={2}>Two</option>
                                    <option value={3}>Three</option> */}
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary btn-block">Buscar pasajes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
            
        </div>
    </div>
    <!-- fin buscador -->
    <section class="section section-white bottom-line margin-top-index">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">¿Listo para tu viaje?</h2>
                    <p class="text-center sub-title-p">Salidas diarias</p>
                </div>
            </div>
            <div class="row">
                <!-- card -->
                <div class="col-md-3 mb-4">
                    <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#destinomodal">
                        <div class="card card1">
                            <img src="/img/lugares/thumbnail-mbatovi.jpg" class="img-fluid" />
                            <div class="card-body">
                                <span class="badge rounded-pill bg-primary-badge mb-3">Paraguay</span>
                                <h4>Encarnación</h4>
                                <p class="card-text">Desde: 280.000 Gs.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <button class="btn btn-primary">Accedé a nuestra lista completa</button>
                </div>
            </div>
        </div>
    </section>
    <!-- fin salidas diarias -->
    <section class="section section-white bottom-line margin-top-index">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center fw-bold text-title">Líderes en calidad y servicios</h2>
                    <p class="text-center sub-title-p">Conocé todos nuestros servicios que tenemos para vos</p>
                </div>
            </div>
            <div class="row">
                <!-- card -->
                <div class="col-md-3 mb-4">
                    <div class="card card2">
                        <img src="/img/servicios/turismo.jpg" class="img-fluid" />
                        <div class="card-body">
                            <h4>Turismo</h4>
                            <a href="/turismo">Ver más información <i class="zwicon-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 text-center">
                    <button class="btn btn-primary">Accedé a nuestra lista completa</button>
                </div>
            </div>
        </div>
    </section>
    <!-- fin nuestros servicios -->
    <section class="section section-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 bottom-line-white pb-5">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3 ">
                            <img src="/img/nsa-voy.svg" class="voy-logo-ini img-fluid" />
                        </div>
                        <div class="col-md-9">
                            <h2 class="text-white fs-1 fw-bold">Premiamos tu Fidelidad</h2>
                            <p class="text-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever sinss</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-md-9 pb-5 mt-5">
                    <div class="row justify-content-between">
                        <div class="col-md-6 text-white">
                            <h4>
                                ¿Que es VOY?
                            </h4>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                            </p>
                            <Link href="/login-voy">
                                <a class="link-voy fw-bold">Quiero ser miembro VOY <span class="btn-fake"><i class="zwicon-chevron-right"></i></span></a>
                            </Link>
                        </div>
                        <!-- <div class="col-md-4 text-white">
                            <h4>Consulta de Puntos</h4>
                            <form action="/" class="consult-punto">
                                <div class="mb-3">
                                    <select class="form-select input-bg-transparent">
                                        <option>Tipo de documento</option>
                                        <option value="1">One</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Número de documento</label>
                                    <input type="email" class="form-control input-bg-transparent" />
                                </div>
                                <button class="btn btn-secondary">Consultar</button>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin nsa voy -->
    <?php Template::load('/main/footer.php');?>
<?php Template::load('/main/menuscript.php');?>
<script src="/js/banner-hero.js"></script>
</body>
</html>