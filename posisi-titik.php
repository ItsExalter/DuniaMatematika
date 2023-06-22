<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Posisi Titik - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Menentukan Posisi Suatu Titik Pada Sistem Koordinat</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article class="mb-4">
              <p class="justify-text mb-2">Koordinat kartesius merupakan kedudukan atau posisi titik baik terhadap sumbu-x maupun terhdap sumbu-y pada bidang atau diagram cartesius. Untuk penulisan koordinat titik digunakan menggunakan kurung biasa (𝑥, 𝑦), dimana nilai 𝑥 disebut dengan absis dan nilai 𝑦 disebut dengan ordinat. Contoh:</p>
                <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                    <img class="img-fluid content-img" src="./assets/img/1.5.jpg" alt="Titik Koordinat">
                </section>
              <p class="justify-text mb-2">Pada gambar diatas koordinat suatu titik dilambangkan dengan (𝑥, 𝑦) maka dari koordinat titik P diketahui bahwa 4 merupakan nilai-𝑥 dan 2 merupakan nilai-𝑦. Maka dari itu absis dari titik P adalah 4 dan ordinat titik P adalah 2.</p>
              <ol type="a">
                    <li class="fw-semibold">Posisi Titik Terhadap Sumbu-𝑥</li>
                    <p class="justify-text mb-2">Untuk menentukan posisi sebuah titik koordinat terhadap sumbu-𝑥 yang telah diketahui titik koordinat (𝑥, 𝑦) dapat dilakukan dengan mengambil nilai 𝑦 yang ada pada koordinat itu lalu nilai 𝑦 tersebut diubah menjadi positif. Jika yang diketahui hanya posisi atau letak titiknya saja dalam bidang cartesius, maka dapat dilakukan dengan menghitung satuan jarak tersebut terhadap sumbu-𝑥.</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                        <img class="img-fluid content-img" src="./assets/img/1.6.jpg" alt="Titik Koordinat">
                    </section>
                    <p class="justify-text mb-3">Dalam diagram cartesius tersebut hanya diketahui keberadaan titiknya saja. Maka untuk mengetahui jarak titik A terhadap sumbu-𝑥, hitung jarak titik tersebut dari sumbu-𝑥. Maka hasilnya adalah titik A berjarak 6 satuan dari sumbu-𝑥.</p>

                    <li class="fw-semibold">Posisi Titik Terhadap Sumbu-𝑦</li>
                    <p class="justify-text mb-2">Untuk menentukan posisi suatu titik terhadap sumbu-𝑦 sama seperti cara yang dilakukan untuk mencari jarak suatu titik terhdapat sumbu-𝑥 hanya saja berbeda di pengambilan nilai nya. Untuk menentukan jarak suatu titik terhadap sumbu-𝑦, nilai yang diambil adalah nilai 𝑥 kemudian nilai 𝑥 tersebut diubah menjadi positif. Jika didalam koordinat cartesius hanya diketahui titiknya saja maka dihitung satuan jarak terhadap sumbu-𝑦. Contoh:</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                        <img class="img-fluid content-img" src="./assets/img/1.7.jpg" alt="Titik Koordinat">
                    </section>
                    <p class="justify-text mb-3">Dalam diagram cartesius tersebut hanya diketahui keberadaan titiknya saja. Maka untuk mengetahui jarak titik A terhadap sumbu-𝑦 hitung jarak titik tersebut dari sumbu-𝑦. Maka hasilnya adalah titik D berjarak 6 satuan dari sumbu-𝑦.</p>

                    <li class="fw-semibold">Posisi Titik Terhadap Titik Asal (0,0)</li>
                    <p class="justify-text mb-2">Untuk menentukan letak suatu titik terhadap titik asal dapat dilakukan dengan mencari jarak sumbu-𝑥 terlebih dahulu dari titik pusat kekanan atau kekiri sesuai dengan titik yang ada. Jika bergerak menuju kanan maka bernilai positif sedangkan jika bergerak menuju kiri maka bernilai negatif. Selanjutnya dapat mencari jarak sumbu-𝑦 yang terletak dibagian atas atau bawah titik pusat. Jika bergerak keatas akan bernilai positif sedangkan jika bergerak kebawah bernilai negatif. Contoh:</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                        <img class="img-fluid content-img" src="./assets/img/1.8.jpg" alt="Titik Koordinat">
                    </section>
                    <p class="justify-text mb-3">Didalam bidang kartesius pada gambar terlihat bahwa diagram tersebut memiliki titik awal atau titik pusat di (0,0). Untuk menentukan koordinatnya cari terlebih dahulu jarak dari titik pusat ke kiri menuju koordinat titik A, sehingga mendapatkan hasil 3 satuan kearah kiri dan bernilai negatif (−3). Kemudian dapat dicari jarak dari titik pusat ke atas menuju koordinat titik A, sehingga mendapatkan 4 satuan kearah atas dan bernilai positif 3. Maka koordinat dari titik A terhadap titik awal adalah (−3, 4).</p>

                    <li class="fw-semibold">Posisi Suatu Titik Terhadap Titik Acuan(𝑎, 𝑏)</li>
                    <p class="justify-text mb-2">Untuk mencari posisi suatu titik terhadap titik tertentu sama hal nya dengan mencari posisi suatu titik terhadap titik awal. Hanya saja berbeda dengan titik yang dituju. Jarak yang dihitung dari titik yang dituju terlebih dahulu menuju titik awalnya. Jika yang diketahui hanya titik koordinatnya saja, maka dapat diselesaikan dengan rumus (𝑥 − 𝑎 , 𝑦 − 𝑏) dimana (𝑥, 𝑦) merupakan titik mula-mula dan (𝑎, 𝑏) merupakan titik acuan yang dituju. Contoh:</p>
                    <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                        <img class="img-fluid content-img" src="./assets/img/1.9.jpg" alt="Titik Koordinat">
                    </section>
                    <p class="justify-text mb-3">Untuk menentukan posisi titik A terhadap titik B dapat dilihat dari jarak titik B ke titik A. Dari titik B ke titik A bergeser ke kiri sebanyak 1 satuan dan memiliki nilai negatif (−1). Selanjutnya dari titik B ke titik A bergeser ke atas sebanyak 7 satuan dan bernilai positif 7. Sehingga posisi titik A terhadap titik B pada bidang cartesius tersebut adalah (−1, 7).</p>
                </ol>
            </article>

            <h3 class="text-center fw-bold">Menentukan Jarak Antar Suatu Titik Ke Titik Lainnya Dalam Koordinat Kartesius</h3>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article class="mb-4">
              <p class="justify-text mb-2">Untuk menentukan jarak suatu titik ke titik yang lainnya dapat digunakan rumus sebagai berikut:</p>
              <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                  <img class="img-fluid content-img soal" src="./assets/img/2.0.png" alt="Titik Koordinat">
              </section>
              <ul>
                <li>Contoh:</li>
                <section class="d-flex justify-content-start align-items-center w-100 mb-2">
                  <img class="img-fluid content-img" src="./assets/img/2.1.jpg" alt="Titik Koordinat">
                </section>
                <p class="text-start">Tentukan Jarak titik P ke Q?</p>
                <li>Pembahasan:</li>
                <p class="text-start">Diketahui titik P (−3, 4) adalah (𝑥1, 𝑦1) dan titik Q (2, 4) adalah (𝑥2, 𝑦2). Masukkan kedalam rumus,</p>
                <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                  <img class="img-fluid content-img" src="./assets/img/2.2.png" alt="Titik Koordinat">
                </section>
              </ul>
              <p class="text-start">Jadi jarak antara titik P dan titik Q adalah 5.</p>
            </article>

            <h3 class="text-center fw-bold">Menggambar Bangun Datar Pada Koordinat Kartesius</h3>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <article class="mb-4">
              <p class="justify-text mb-2">Bidang koordinat cartesius dapat digunakan sebagai tempat untuk membuat bangun datar. Didalam bidang koordinat pula memiliki banyak titik-titik yang berjarak. Dimana titik-titik yang terbentuk terebut dapat dihubungkan satu sama lainnya membentuk sebuah bangun  datar.</p>
              <ul>
                <li>Contoh:</li>
                <p class="justify-text mb-2">Terdapat titik koordinat P (−4, 2), Q (5, 2), R (3, −3), S (−6, 3) jika titik-titik tersebut dihubungkan satu sama lainnya, bangun datar apakah yang akan terbentuk.</p>
                <li>Pembahasan:</li>
                <p class="justify-text mb-2">Untuk mengetahui bangun datar apa yang terbentuk, hal pertama yang harus dilakukan adalah membuat diagram koordinat terlebih dahulu. Kemudian tempatkan titik koordinat sesuai yang diketahui, lalu dari titik-titik tersebut dihubungan garis yang tak terputus antara satu dan lainnya.</p>
                <section class="d-flex justify-content-center align-items-center w-100 mb-2">
                  <img class="img-fluid content-img" src="./assets/img/2.3.jpg" alt="Titik Koordinat">
                </section>
              </ul>
              <p class="text-start">Dalam gambar tersebut dapat disimpulkan bahwa dari koordinat titik PQRS membentuk bangun ruang jajargenjang.</p>
            </article>
            <div class="mt-4 w-100 px-2 d-flex flex-sm-row flex-column-reverse align-items-center justify-content-sm-between justify-content-center">
              <a name="posisiPrevious" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./unsur.php" role="button"><< Kembali</a>
              <a name="posisiNext" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3 mb-sm-0 mb-3" href="./kedudukan.php" role="button">Lanjut >></a>
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