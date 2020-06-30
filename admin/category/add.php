<?php
    include "../../connection.php";

    if(isset($_POST['name'])) {
        $query = "INSERT INTO categories (name)
            VALUES ('".$_POST['name']."')
        ";

        if($conn->query($query) === TRUE) {
            echo "Data berhasil disimpan";
        } else {
            echo $conn->error;
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library System</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Library System</a>
            </div>
            <ul class="nav navbar-nav">
                <li><a href="/library_system/admin/">Beranda</a></li>
                <li><a href="/library_system/admin/category">Kategori</a></li>
                <li><a href="/library_system/admin/staff/">Admin</a></li>
                <li><a href="/library_system/admin/user/">User</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="" required class="form-control">
            </div>
            <a href="/library_system/admin/category" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>