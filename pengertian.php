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
      <div class="content-container d-flex flex-column align-items-center justify-content-center h-100">
        <div class="bg-white content-items d-flex flex-column align-items-center justify-content-start h-100 rounded rounded-4 overflow-y-scroll">
          <div class="d-flex flex-column align-items-center px-4 py-3">
            <h2 class="text-center fw-bold">Pengertian Koodinat Kartesius</h2>
            <img class="img-fluid content-img" src="./assets/img/1.1.png" alt="Sistem Koordinat Kartesius">
            <p><span class="fw-semibold">Koordinat Cartesius</span> adalah sistem koordinat yang memuat angka-angka tertentu di setiap bidangnya yang ditulis dalam bentuk (x,y). Koordinat ini ditemukan oleh seorang ahli Matematika asal Prancis, yaitu Rene Descartes. Ciri utama koordinat Cartesius adalah adanya dua garis tegak lurus yang saling berpotongan di suatu titik. Kedua garis tersebut dinamakan sebagai sumbu koordinat. Dua garis yang saling tegak lurus memiliki tanda panah pada ujung sumbu 𝑥 dan ujung sumbu 𝑦 yang menunjukkan bahwa sumbu 𝑥 dan sumbu 𝑦 memiliki nilai yang tak hingga.</p>
            <div class="mt-2 w-100 px-2 d-flex flex-sm-row flex-column align-items-sm-end align-items-center justify-content-sm-end justify-content-center">
              <a name="pengertianNext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="#" role="button">Lanjut >></a>
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