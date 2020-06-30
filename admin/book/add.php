<?php
    include "../../connection.php";

    $query = "SELECT * FROM categories";
    $result = $conn->query($query);

    if(isset($_POST['name']) && isset($_POST['author'])
        && isset($_POST['category_id']) && isset($_POST['total']) ) {

        $namaFile = $_FILES['picture']['name'];
        $namaSementara = $_FILES['picture']['tmp_name'];
        
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../../uploads/";
        $terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

        $name = $_POST['name'];
        $author = $_POST['author'];
        $category_id = $_POST['category_id'];
        $total = $_POST['total'];
        $picture = $namaFile;

        $query = "INSERT INTO books (name,author,category_id,total,picture)
            VALUES ('".$name."','".$author."','".$category_id."','".$total."','".$picture."')
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
                <li><a href="/library_system/admin/user/">User</a></li>
                <li><a href="/library_system/admin/book/">Book</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<option value=".$row['id'].">".$row['name']."</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="number" name="total" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Picture</label>
                <input type="file" name="picture" class="form-control">
            </div>
            <a href="/library_system/admin/category" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</body>
</html>