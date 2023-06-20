<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Unsur - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Unsur-Unsur Koodinat Kartesius</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article>
                <ol type="a">
                    <li class="fw-semibold">Titik Koordinat</li>
                    <p class="justify-text mb-2">Titik koordinat adalah gabungan dari koordinat 𝑥 dan 𝑦 dan dilambangkan dengan (𝑥, 𝑦). koordinat 𝑥 suatu titik adalah jarak tegak lurus dari sumbu 𝑦 dan koordinat 𝑦 suatu titik adalah jarak tegak lurusnya dari sumbu 𝑥. Misalnya, gambarlah titik koordinat A (3, 1). Maka, yang terlebih dahulu mencari koordinat 𝑥, yaitu 3 satuan dari titik 0. Setelah mendapat koordinat 𝑥, kemudian dapat mencari koordinat 𝑦 yaitu 1 satuan dari sumbu 𝑦 = 0.</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-3">
                        <img class="img-fluid content-img" src="./assets/img/1.2.png" alt="Titik Koordinat">
                    </section>
                </ol>
            </article>
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column-reverse align-items-center justify-content-sm-between justify-content-center">
              <a name="unsurPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./pengertian.php" role="button"><< Kembali</a>
              <a name="unsurNext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3 mb-sm-0 mb-3" href="./posisi-titik.php" role="button">Lanjut >></a>
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