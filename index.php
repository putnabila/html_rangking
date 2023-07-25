<?php

include_once('connect.php');

$sql = "SELECT * FROM score, students WHERE score.student_id = students.id";
$result = $conn->query($sql);
$data = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RANKING XI RPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <nav class="navbar bg-secondary">  
     <div class="container-fluid">
       <span class="navbar-brand mb-0 h1 text-light  text-center">WELCOME 11 RPL</span>
    </div>
</nav>
     <div class="container mt-3"></div>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">  
                <h2 class="text-center">Input Data</h2>
            </div>
                <div class="card-body">
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="nama">Nama</label>
                        <input id="nama" type="text" name="nama" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="nama">Nilai</label>
                        <input id="nilai" type="number" class="form-control">
                    </div>

                </form>
            </div>
                    <div clasas="card-footer">
                     <div class ="d-grip gap-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                 </div>
            </div>
        </div>
 
   </div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                <h2 class="text-center">Daftar Ranking</h2>
                </div>
                 <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nilai</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($data as $key => $d): ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $$d['score'] ?></td>
                        </tr>
                        <?php endforeach ?>
                        </tbody>
                        <tfoot>
                            <tr>
                            <td>1</td>
                            <td>Abdurrahman Faiz</td>
                            <td>80</td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Achmad Fauzan</td>
                        <td>80</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Adystya Anandita</td>
                    <td>77</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Aisyah Salsabila</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Aldo Ahmad</td>
                    <td>88</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ali Zainal Abidin</td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Allya Bunga Lestari</td>
                    <td>77</td>
                </tr>
                <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>

       <footer class="py-8 my-4 bg-secondary">
        <p class="text-center text-white"> 2023 Company, Inc</p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></script>
        <div class="row">
            <div class="col-16 py-4">
                <center>&copy; Happy bersama pak mujahid dan pak aroh</center>
            </div>
        </div>

       </footer>
</body>
</html>