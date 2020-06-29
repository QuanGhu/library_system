<?php
    include "../../connection.php";

    if(isset($_POST['name']) && isset($_POST['email'])
        && isset($_POST['phone']) && isset($_POST['address'])
        && isset($_POST['password'])) {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = md5($_POST['password']);

        $query = "INSERT INTO admins (email,password,name,phone,address)
            VALUES ('".$email."','".$password."','".$name."','".$phone."','".$address."')
        ";

        if($conn->query($query) === TRUE) {
            echo "Data berhasil disimpan";
            header('Location: index.php');
            exit;
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
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <input type="text" name="address" id="" required class="form-control">
            </div>
            <a href="/library_system/admin/staff" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>