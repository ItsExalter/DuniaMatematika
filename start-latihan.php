<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    $name = "User";
    if (isset($_POST['training-name'])) {
        $name = $_POST['training-name'];
    }
    require './db-config.php';
    require './head.php';
  ?>
  <title>Latihan  - Dunia Matematika</title>
</head>
<body>
    <header>
        <nav class="navbar bg-white fixed-top">
            <p class="fs-4 text-center w-100 fw-bold">Latihan Koordinat Kartesius</p>
        </nav>
    </header>
    <main class="blur">
    <div class="d-flex flex-column align-items-center justify-content-center h-100">
        <div class="bg-white scroll-style d-flex flex-column align-items-center justify-content-start rounded rounded-4 overflow-y-scroll w-100 h-75 latihan">
            <form class="py-4" action="result.php" method="post">
                <div class="d-flex flex-column align-items-start px-5">
                    <input type='hidden' name="name" value=" <?php echo $name;?>"/>  
                    <input type='hidden' name="question-type" value="latihan"/>  
                    <?php
                         $query = "SELECT * FROM `question-bank` WHERE question_type = 'latihan' ORDER BY RAND()";
                         $result = $conn->query($query);
     
                         if ($result->num_rows > 0) {
                           $num = 1;
                           while($row = $result->fetch_assoc()) {
                            echo"
                                <div class=\"d-flex flex-column justify-content-start mb-5\">
                                    <p class=\"mb-2 fs-5 fw-semibold\">Nomor ".$num.":</p>
                                    <section>";
                            if($row['img_path']){
                                echo "
                                <img class=\"img-fluid content-img mb-2\" src=\"".$row['img_path']."\" alt=\"Gambar Soal\">
                                ";
                            }
                            echo "
                                        <p class=\"justify-text mb-2\">".$row['question']."</p>
                                        <fieldset id=\"".$row['id']."\">
                                            <div class=\"form-check\">
                                              <input class=\"form-check-input\" type=\"radio\" name=\"".$row['id']."\" value=\"a\">
                                              <label class=\"form-check-label\" for=\"flexRadioDefault1\">
                                                ".$row['a']."
                                              </label>
                                            </div>
                                            <div class=\"form-check\">
                                              <input class=\"form-check-input\" type=\"radio\" name=\"".$row['id']."\" value=\"b\">
                                              <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                                ".$row['b']."
                                              </label>
                                            </div>
                                            <div class=\"form-check\">
                                              <input class=\"form-check-input\" type=\"radio\" name=\"".$row['id']."\" value=\"c\">
                                              <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                                ".$row['c']."
                                              </label>
                                            </div>
                                            <div class=\"form-check\">
                                              <input class=\"form-check-input\" type=\"radio\" name=\"".$row['id']."\" value=\"d\">
                                              <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                                ".$row['d']."
                                              </label>
                                            </div>
                                            <div class=\"form-check\">
                                              <input class=\"form-check-input\" type=\"radio\" name=\"".$row['id']."\" value=\"e\">
                                              <label class=\"form-check-label\" for=\"flexRadioDefault2\">
                                                ".$row['e']."
                                              </label>
                                            </div>
                                        </fieldset>
                                    </section>
                                </div>
                             ";
                             ++$num;
                           }
                         } 
                         $conn->close();
                    ?>
                <div class="w-100 px-2 d-flex align-items-center justify-content-center">
                    <button class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" type="submit" id="submitTraining">Kumpulkan Jawaban</a>
                </div>
                </div>
            </form>
        </div>
      </div>
    </main> 
    <?php
      require './script-file.php';
    ?>
</body>
</html>