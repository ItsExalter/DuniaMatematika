<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Kompetensi Dasar - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Kompetensi Dasar (KD)</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article>
                <ul>
                    <p><span class="fw-semibold">3.2 </span>Menjelaskan kedudukan titik dalam bidang koordinat Kartesius yang dihubungkan dengan masalah kontekstual</p>
                    <ul>
                        <p><span class="fw-semibold">3.2.1 </span>Memahami posisi titik terhadap sumbu-x dan sumbu-y</p>
                        <p><span class="fw-semibold">3.2.2 </span>Memahami posisi titik terhadap titik asal (0,0) dan titik tertentu (a,b).</p>
                    </ul>
                    <p><span class="fw-semibold">4.2 </span>Menyelesaikan masalah yang berkaitan dengan kedudukan titik dalam bidang koordinat Kartesius</p>
                    <ul>
                        <p><span class="fw-semibold">4.2.1 </span>Menyelesaikan kedudukan titik pada koordinat kartesius yang berkaitan dengan kehidupan sehari-hari.</p>
                    </ul>
                </ul>
            </article>
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column align-items-sm-end align-items-center justify-content-sm-end justify-content-center">
              <a name="KDNext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./ki.php" role="button">Kompetensi Inti >></a>
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