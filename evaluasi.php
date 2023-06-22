<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Evaluasi  - Dunia Matematika</title>
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
          <div class="d-flex flex-column align-items-center px-md-4 px-3 py-3">
            <h2 class="text-center fw-bold">Evaluasi Materi Koordinat Kartesius</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <div class="w-100 mb-4">
              <p class="text-center fs-5 fw-normal">Mari Kita Evaluasi Pembelajaran di Materi Koordinat Kartesius</p>
            </div>
            <form action="start-evaluasi.php" method="post">
                <div class="mb-3">
                    <label for="trainingName" class="form-label text-center w-100">Enter Your Name: </label>
                    <input name="training-name" type="text" class="form-control" id="trainingName" required>
                </div>
                <div class="w-100 px-2 d-flex align-items-center justify-content-center">
                    <button class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" type="submit" id="startEval">Mulai Evaluasi</a>
                </div> 
            </form>
          </div>
        </div>
      </div>
    </main> 
    <?php
      require './script-file.php';
    ?>
</body>
</html>