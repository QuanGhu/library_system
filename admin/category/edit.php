<?php
    include "../../connection.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM categories where
        id = ".$id;
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    
    if(isset($_POST['name']) && isset($_POST['id'])) {
        $query = "UPDATE categories
            SET name='".$_POST['name']."'
            Where id =".$_POST['id'];

        if($conn->query($query) === TRUE) {
            echo "Data berhasil diperbarui";
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
            <input type="hidden" name="id" 
                value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="name" id="" required 
                    class="form-control" 
                    value="<?php echo $row['name']; ?>">
            </div>
            <a href="/library_system/admin/category" class="btn btn-default">Batal</a>
            <button type="submit" class="btn btn-primary">Perbarui</button>
        </form>
    </div>
</body>
</html>