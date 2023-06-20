<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Kedudukan Garis - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Kedudukan Garis</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article class="mb-4">
                <ol type="a">
                    <li class="fw-semibold">Garis Sejajar</li>
                    <p class="justify-text mb-2">Suatu garis dikatakan sejajar dengan garis lainnya, apabila garis-garis tersebut memiliki jarak dan kemiringan yang sama</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-3 flex-wrap">
                        <img class="img-fluid content-img contoh m-3" src="./assets/img/2.4.png" alt="Titik Koordinat">
                        <img class="img-fluid content-img contoh m-3" src="./assets/img/2.5.png" alt="Titik Koordinat">
                    </section>
                    <p class="justify-text mb-2">Garis AB dan garis CD merupakan garis yang sejajar, karena memiliki jarak yang sama. Ketika kedua garis tersebut diteruskan atau diperpanjang maka tidak akan pernah betemu atau berpotongan. Begitupun pada garis KL dan MN.</p>
                    
                    <li class="fw-semibold">Garis Berpotongan</li>
                    <p class="justify-text mb-2">Dua garis dikatakan berpotongan apabila garis-garis tersebut bertemu atau berpotongan di satu titik yang disebut sebagai titik potong. Garis berpotongan terdiri dari 2 yakni berpotongan tidak tegak lurus dan tegak lurus.</p>
                    <ul>
                        <li>Garis Berpotongan Tidak Tegak Lurus</li>
                        <section class="d-flex justify-content-center align-items-center w-100 mb-3 flex-wrap">
                            <img class="img-fluid content-img contoh m-3" src="./assets/img/2.6.png" alt="Titik Koordinat">
                            <img class="img-fluid content-img contoh m-3" src="./assets/img/2.7.png" alt="Titik Koordinat">
                        </section>
                        <p class="justify-text mb-2">Garis R dan S dikatakan garis yang berpotongan tidak tegak lurus, karena titik potongnya membentuk sudut kurang dari 90°</p>
                        <p class="justify-text mb-2">Garis T dan garis U dikatakan garis yang berpotongan tidak tegak lurus karena titik potongnya membentuk sudut lebih dari 90°.</p>
                        <li>Garis Berpotongan Tegak Lurus</li>
                        <section class="d-flex justify-content-center align-items-center w-100 mb-3">
                            <img class="img-fluid content-img contoh m-3" src="./assets/img/2.7.png" alt="Titik Koordinat">
                        </section>
                        <p class="justify-text mb-2">Garis P dan garis Q dikatakan garis yang berpotongan tegak lurus karena titik potongnya membentuk sudut 90° atau siku-siku.</p>
                    </ul>
                </ol>
            </article>
            
            <h3 class="text-center fw-bold">Kedudukan Garis/Posisi Garis Terhadap Sumbu-x dan Sumbu y</h3>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <p class="justify-text mb-2">Posisi garis merupakan suatu letak garis pada bidang koordinat Cartesius. Posisi garis pada bidang koordinat Cartesius dapat dilihat berdasarkan posisi garis terhadap sumbu X dan sumbu Y. Untuk lebih memahami posisi garis terhadap sumbu X dan sumbu Y, berikut posisi garis pada koordinat Cartesius:</p>
            <article>
                <ol type="a">
                    <li class="fw-semibold">Garis Sejajar</li>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-3">
                        <img class="img-fluid content-img" src="./assets/img/2.9.png" alt="Titik Koordinat">
                    </section>
                    <ul class="mb-2">
                        <li>Garis 𝑙1, 𝑙2, 𝑙3, 𝑙4 merupakan garis-garis yang tegak lurus dengan sumbu Y pada koordinat cartesius, karena garis 𝑙1, 𝑙2, 𝑙3, 𝑙4 memiliki titik potong dengan sumbu Y membentuk sudut 90° atau siku-siku.</li>
                        <li>Titik-Titik yang dilalui garis 𝑙1 antara lain (7,5), (6,5), (5,5),...</li>
                        <li>Titik-Titik yang dilalui garis 𝑙2 antara lain (7,3), (6,3), (5,3),...</li>
                        <li>Titik-Titik yang dilalui garis 𝑙3 antara lain (7,-4), (6,-4), (5,-4),...</li>
                        <li>Titik-Titik yang dilalui garis 𝑙4 antara lain (7,-7), (6,-7), (5,-7),....</li>
                    </ul>

                    <li class="fw-semibold">Garis Tegak Lurus</li>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-3">
                        <img class="img-fluid content-img" src="./assets/img/3.0.png" alt="Titik Koordinat">
                    </section>
                    <ul class="mb-2">
                        <li>Garis 𝑚1, 𝑚2, 𝑚3, 𝑚4 merupakan garis-garis yang sejajar dengan sumbu Y pada koordinat cartesius. Karena jika garis 𝑚1, 𝑚2, 𝑚3, 𝑚4 diperpanjang, tidak akan pernah memotong sumbu Y dan jarak garis 𝑚1, 𝑚2, 𝑚3, 𝑚4 dengan sumbu Y itu sama.</li>
                        <li>Garis 𝑚1, 𝑚2, 𝑚3, 𝑚4 merupakan garis-garis yang tegak lurus dengan sumbu X pada koordinat cartesius, karena garis 𝑚1, 𝑚2, 𝑚3, 𝑚4 memiliki titik potong dengan sumbu X membentuk sudut 90° atau siku-siku.</li>
                        <li>Titik-titik yang dilalui garis 𝑚1 antara lain (-5,5), (-5,4), (-5, 3), ...</li>
                        <li>Titik-titik yang dilalui garis 𝑚2 antara lain (-2,5), (-5,4), (-5, 3), ...</li>
                        <li>Titik-titik yang dilalui garis 𝑚3 antara lain (2,5), (2,4), (2, 3), ...</li>
                        <li>Titik-titik yang dilalui garis 𝑚4 antara lain (7,5), (7,4), (7, 3), ...</li>
                    </ul>

                    <li class="fw-semibold">Garis Memotong</li>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-3">
                        <img class="img-fluid content-img" src="./assets/img/3.1.png" alt="Titik Koordinat">
                    </section>
                    <ul class="mb-2">
                        <li>Garis 𝑛1, 𝑛2 merupakan garis-garis yang memotong sumbu X dan Sumbu Y.</li>
                        <li>Garis 𝑛1 memotong sumbu X di titik (1,0) dan memotong sumbu Y di titik (0,2)</li>
                        <li>Garis 𝑛2 memotong sumbu X di titik (−1,0) dan memoting sumbu Y di titik (0,2)</li>
                        <li>Titik potong garis 𝑛1, 𝑛2 pada sumbu Y yaitu di titik (0,2)</li>
                    </ul>
                </ol>
            </article>
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column align-items-sm-start align-items-center justify-content-sm-start justify-content-center">
              <a name="kedudukanPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./posisi-titik.php" role="button"><< Kembali</a>
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