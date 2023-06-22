<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Dunia Matematika - Sistem Koordinat Kartesius</title>
</head>
<body>
    <header>
      <?php
        include './nav.php';
      ?>
    </header>
    <main class="blur">
      <div class="container d-flex flex-lg-row flex-column-reverse align-items-center justify-content-lg-between justify-content-center h-100 w-100">
        <div class="d-flex flex-column justify-content-center text-white title-container mt-lg-0 mt-4" data-aos="fade-right" data-aos-delay="200">
          <p class="fs-3 mb-0 fw-semibold drop-shadow-font">Halo! Selamat Datang di</p>
          <h1 class="drop-shadow-font">Dunia Matematika</h1>
          <h4 class="fw-normal fst-italic drop-shadow-font">"Sistem Koordinat Kartesius"</h4>
          <div class="mt-2">
            <a name="startClass" class="btn py-1 px-3 fs-5 fw-bold border border-dark border-3" href="./pengertian.php" role="button">Mulai Belajar!</a>
          </div>
        </div>
        <div class="img-container" data-aos="fade-down-left" data-aos-delay="200">
          <img class="welcome-img img-fluid" src="./assets/img/welcome-img.png" alt="Welcome Image">
        </div>
      </div>
    </main>
    <?php
      require './script-file.php';
    ?>
</body>
</html>