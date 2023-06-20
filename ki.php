<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Kompetensi Inti - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Kompetensi Inti (KI)</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article>
                <ul>
                    <li><span class="fw-semibold">KI-1: </span>Menghargai dan menghayati ajaran agama yang dianutnya. </li>
                    <li><span class="fw-semibold">KI-2: </span>Menunjukkan perilaku jujur, disiplin, tanggung jawab, peduli (toleran, gotong royong), santun, dan percaya diri dalam berinteraksi secara efektif dengan lingkungan sosial dan alam dalam jangkauan pergaulan dan keberadaannya </li>
                    <li><span class="fw-semibold">KI-3: </span>Memahami pengetahuan (faktual, konseptual, dan prosedural) berdasarkan rasa ingin tahunya tentang ilmu pengetahuan, teknologi, seni, budaya terkait fenomena dan kejadian tampak mata </li>
                    <li><span class="fw-semibold">KI-4: </span>Mencoba, mengolah, dan menyaji dalam ranah konkret (menggunakan, mengurai, merangkai, memodifikasi, dan membuat) dan ranah abstrak (menulis, membaca, menghitung, menggambar, dan mengarang) sesuai dengan yang dipelajari di sekolah dan sumber lain yang sama dalam sudut pandang/teori</li>
                </ul>
            </article>
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column-reverse align-items-center justify-content-sm-between justify-content-center">
              <a name="KIPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./kd.php" role="button"><< Kompetensi Dasar</a>
              <a name="KINext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3 mb-sm-0 mb-3" href="./peta-konsep.php" role="button">Peta Konsep >></a>
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