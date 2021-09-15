<?php Template::load('/main/head.php'); ?>

<body>
    <?php Template::load('/main/menu.php'); ?>
    
    <!-- CONTENT -->
    <section class="section-color">

      <!-- Content -->
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-between gx-0 min-vh-100">
          <div class="col-12 col-md-5 align-self-stretch">

            <!-- Image (mobile) -->
            <img src="/img/bg-primary-ns.jpg" class="d-md-none img-cover" alt="...">

            <!-- Image -->
            <div class="d-none d-md-block vw-50 h-100 float-end bg-cover" style="background-image: url(/img/bg-primary-ns.jpg);"></div>

          </div>
          <div class="col-12 col-md-6 py-8 py-md-11">

            <!-- Heading -->
            <h2 class="fw-bold text-center mb-2">
              Contáctenos
            </h2>

            <!-- Text -->
            <p class="fs-lg text-center text-muted mb-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
            </p>

            <!-- Divider -->
            <hr class="hr-sm my-6 my-md-8 mx-auto bg-gray-300">

            <!-- Form -->
            <form>
              <div class="form-group mb-5">
                <!-- Label -->
                <label class="form-label" for="contactName">
                  Nombre completo
                </label>
                <!-- Input -->
                <input class="form-control" id="contactName" type="text" placeholder="Nombre completo">
              </div>
              <div class="form-group mb-5">
                <!-- Label -->
                <label class="form-label" for="contactEmail">
                  E-mail
                </label>
                <!-- Input -->
                <input class="form-control" id="contactEmail" type="email" placeholder="hola@domain.com">
              </div>
              <div class="form-group mb-5 d-none">

                <!-- Label -->
                <label for="contactMessage">
                  Mensaje
                </label>

                <!-- Input -->
                <textarea class="form-control" id="contactMessage" rows="5" placeholder="¡Cuéntanos en qué podemos ayudarte!"></textarea>

              </div>
              <div class="form-group mb-0">

                <!-- Submit -->
                <a href="#!" class="btn w-100 btn-primary lift">
                  Enviar mensaje
                </a>

              </div>
            </form>

          </div>
        </div> <!-- / .row -->
      </div>
    </section>
    

    <?php Template::load('/main/footer.php'); ?>
    <?php Template::load('/main/menuscript.php'); ?>
</body>

</html>