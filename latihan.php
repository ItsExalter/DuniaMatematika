<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    require './head.php';
  ?>
  <title>Latihan  - Dunia Matematika</title>
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
            <h2 class="text-center fw-bold">Latihan Koordinat Kartesius</h2>
            <hr class="border border-dark border-2 opacity-75 w-75 mb-4">
            <div class="w-100 mb-4">
              <p class="text-center fs-4 fw-semibold">Leaderboard:</p>
              <table class="table table-hover text-center">
                <thead class="table-warning">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nilai</th>
                  </tr>
                </thead>
                <tbody class="table-striped">
                  <?php
                    require "./db-config.php";

                    $query = "SELECT * FROM `leaderboard` ORDER BY score DESC, id DESC LIMIT 5";
                    $result = $conn->query($query);

                    if ($result->num_rows > 0) {
                      $num = 1;
                      while($row = $result->fetch_assoc()) {
                        echo"
                        <tr>
                          <th scope=\"row\">$num</th>
                          <td>".$row["name"]."</td>
                          <td>".$row["score"]."</td>
                        </tr>
                        ";
                        ++$num;
                      }
                    } else {
                      for ($i=1; $i <= 5 ; $i++) { 
                        echo"
                        <tr>
                          <th scope=\"row\">$i</th>
                          <td> - </td>
                          <td> - </td>
                        </tr>
                        ";
                      }
                    }
                    $conn->close();
                  ?>
                </tbody>
              </table>
            </div>
            <form action="start-latihan.php" method="post">
              <div class="mb-3">
                <label for="trainingName" class="form-label text-center w-100">Enter Your Name: </label>
                <input name="training-name" type="text" class="form-control" id="trainingName" required>
              </div>
              <div class="w-100 px-2 d-flex align-items-center justify-content-center">
                <button class="btn py-1 px-3 fs-6 fw-bold border border-dark border-3" type="submit" id="startTraining">Mulai Latihan</a>
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