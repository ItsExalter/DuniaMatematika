<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Peta Konsep - Dunia Matematika</title>
</head>
<body>
    <header>
      <?php
        include './nav.php';
      ?>
    </header>
    <main class="blur">
      <div class="content-container d-flex flex-column align-items-center justify-content-center h-100">
        <div class="bg-white content-items d-flex flex-column align-items-center justify-content-start rounded rounded-4 overflow-y-scroll">
          <div class="d-flex flex-column align-items-center px-md-4 px-3 py-3">
            <h2 class="text-center fw-bold">Peta Konsep</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <img class="img-fluid peta" src="./assets/img/peta-konsep.png" alt="Peta Konsep">
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column-reverse align-items-center justify-content-sm-between justify-content-center">
              <a name="petaPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./ki.php" role="button"><< Kompetensi Inti</a>
              <a name="petaNext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3 mb-sm-0 mb-3" href="./profil.php" role="button">Profil >></a>
            </div>
          </div>
        </div>
      </div>
    </main> 
    <?php
      require './script-file.php';
    ?>
</body>
</html>