<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './db-config.php';
    $name = $_POST['name'];
    $type = $_POST['question-type'];
    $total_score = 0;

    $query = "SELECT * FROM `question-bank` WHERE question_type = '$type' ORDER BY RAND()";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if ($_POST[''.$row['id'].''] == $row['true_answer']) {
                $total_score += 10;
            }
        }
    }
    
    if($type == "latihan"){
      $query = "INSERT INTO `leaderboard`(`name`, `score`) VALUES ('$name','$total_score')";
      $result = $conn->query($query);
    }


    $conn->close();
    require './head.php';
  ?>
  <title>Result - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Result</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            
            <div class="d-flex flex-column flex-wrap justify-content-center align-items-center">
                <?php
                    echo "<p class=\"mb-2\"><span class=\"fw-semibold\">Hai, $name</span>, Nilaimu Adalah:</p>";

                    echo "<h1 class=\"mb-2\">$total_score</h1>";
                    
                    if ($total_score >= 80) {
                        echo "<p class=\"fs-6\">Kamu Hebat! Pertahankan Terus ya</p>";
                    } else if ($total_score > 40 && $total_score < 80) {
                        echo "<p class=\"fs-6\">Tidak papa, kamu bisa mencobanya lagi nanti, semangat!</p>";
                    } else {
                        echo "<p class=\"fs-6\">Jangan Menyerah oke! Tetap Semangat 🔥</p>";
                    }
                ?>
            </div>
            <div class="w-100 px-2 d-flex align-items-center justify-content-center mt-4">
              <a name="backToHome" class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" href="./index.php" role="button">Kembali ke Home</a>
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