<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - MySQL - CRUD</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
            crossorigin="anonymous"></script>
</head>

<body>
    <section>
        <h1 style="text-align: center; margin: 50px 0;">Simple PHP CRUD with MySQL</h1>
        <div class="container">
            <form action="adddata.php" method="post">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="name">Nama Siswa</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="">Kelas</label>
                        <select name="kelas" id="kelas" class="form-control" required>
                            <option value="">Pilih Kelasmu</option>
                            <option value="kelas 10">Kelas 10</option>
                            <option value="kelas 11">Kelas 11</option>
                            <option value="kelas 12">Kelas 12</option>

                        </select>
                    </div>
                    <div class="form-group col-lg-3">
                        <label for="nilai">Nilai</label>
                        <input type="number" name="nilai" id="nilai" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-2" style="display: grid;align-items: flex-end;">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section style="margin: 50px 0;">
        <h4 style="text-align: center;margin: 50px 0;">Data Nilai Kelas 12</h4>
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Nilai</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "conn.php";
                        $sql_query = "SELECT * FROM results";
                        if ($result = $conn->query($sql_query)) {
                            while ($row = $result->fetch_assoc()) {
                                $id = $row['id'];
                                $name = $row['name'];
                                $kelas = $row['class'];
                                $nilai = $row['nilai'];
                    ?>

                    <tr class="trow">
                        <td><?php echo $id; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $kelas; ?></td>
                        <td><?php echo $nilai; ?></td>
                        <td><a href="updatedata.php?id=<?php echo $id; ?>" class="btn btn-primary">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>