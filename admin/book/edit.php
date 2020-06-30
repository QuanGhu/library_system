<?php
    include "../../connection.php";

    $id = $_GET['id'];

    $query = "SELECT * FROM books where
        id = ".$id;
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    
    $queryCategory = "SELECT * FROM categories";
    $resultCategory = $conn->query($queryCategory);

    if(isset($_POST['name']) && isset($_POST['author'])
        && isset($_POST['category_id']) && isset($_POST['total'])) {
        $query = "UPDATE books
            SET name='".$_POST['name']."',
                author='".$_POST['author']."',
                category_id='".$_POST['category_id']."',
                total='".$_POST['total']."'

            Where id =".$_POST['id'];

        if($conn->query($query) === TRUE) {
            echo "Data berhasil diperbarui";
            header('Location: index.php');
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
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" id="" required class="form-control" 
                    value="<?php echo $row['name']; ?>">
            </div>
            <div class="form-group">
                <label for="">Author</label>
                <input type="text" name="author" id="" required class="form-control"
                value="<?php echo $row['author']; ?>">
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                    <?php
                        if($resultCategory->num_rows > 0) {
                            while($row = $resultCategory->fetch_assoc()) {
                                echo "<option value=".$row['id'].">".$row['name']."</option>";
                            }
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Total</label>
                <input type="number" name="total" id="" required class="form-control"
                value="<?php echo $row['total']; ?>">
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