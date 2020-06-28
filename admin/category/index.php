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
            </ul>
        </div>
    </nav>

    <div class="container">
        <a href="add.php" class="btn btn-primary">Tambah Kategori</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            
            </tbody>
        </table>
    </div>
</body>
</html>