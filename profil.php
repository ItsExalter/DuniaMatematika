<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Profil - Dunia Matematika</title>
</head>
<body>
    <header>
      <?php
        include './nav.php';
      ?>
    </header>
    <main class="blur">
      <div class="content-container d-flex flex-column align-items-center justify-content-center h-100">
        <div class="bg-white content-items scroll-style d-flex flex-column align-items-center justify-content-start rounded rounded-4 overflow-y-scroll">
          <div class="d-flex flex-column align-items-center px-md-4 px-2 py-3">
            <h2 class="text-center fw-bold">Profil</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <div class="d-flex flex-sm-row flex-column flex-wrap justify-content-center align-items-center">
              <img class="img-fluid profil mb-sm-0 mb-4" src="./assets/img/foto.png" alt="Profile Pict">
              <div class="ms-sm-4 ms-0 text-sm-start text-center">
                <p class="mb-2"><span class="fw-semibold">Nama: <br> </span>Nova Sonia Cantika</p>
                <p class="mb-2"><span class="fw-semibold">NIM: <br> </span>11210170000111</p>
                <p class="mb-2"><span class="fw-semibold">Tempat, Tanggal Lahir: <br> </span>Tangerang, 15 Maret 2003</p>
                <p class="mb-2"><span class="fw-semibold">Email: <br> </span>novacantika03@gmail.com</p>
                <p class="mb-2"><span class="fw-semibold">Whatsapp: <br> </span>089666032186</p>
                <p class="mb-2"><span class="fw-semibold">Instagram: <br> </span>@novactka</p>
              </div>
            </div>
            <div class="mt-4 w-100 px-sm-2 px-0 d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-sm-start justify-content-center">
              <a name="profilPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./peta-konsep.php" role="button"><< Peta Konsep</a>
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