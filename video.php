<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Materi Video - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Materi Video</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <div class="mb-3 ratio ratio-16x9 youtube-video">
                <iframe class="rounded rounded-3" src="https://www.youtube-nocookie.com/embed/6ngNB0KKWiI" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="mb-3 ratio ratio-16x9 youtube-video">
                <iframe class="rounded rounded-3" src="https://www.youtube-nocookie.com/embed/z7F-9jQTHyQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="mb-3 ratio ratio-16x9 youtube-video">
                <iframe class="rounded rounded-3" src="https://www.youtube-nocookie.com/embed/jPSGkxQLDoA" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>    
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