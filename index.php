<?php
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        echo $email;
    }

    if(isset($_POST['password'])){
        $email = $_POST['password'];
        echo $email;
    }

    $result = null;
    if(isset($_POST['bil_1']) && isset($_POST['bil_2'])){
        $result = $_POST['bil_1'] + $_POST['bil_2'];
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
    <link rel="stylesheet" href="assets/style.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="login">
        <h1>Selamat Datang</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" id="" required class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="" required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"> Masuk </button>
        </form>
    </div>

    <div class="container">
        <h3>Math</h3>
        <form action="" method="post">
            <div class="form-group">
                <label for="">Bilangan 1</label>
                <input type="text" name="bil_1" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Bilangan 2</label>
                <input type="text" name="bil_2" id="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary"> Proses </button>
        </form>
        <p>Hasil nya : <?php echo $result; ?> </p>
    </div>
</body>
</html>