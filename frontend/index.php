<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
    <title>PHP-PostgreSQL</title>
</head>
<?php $m = $_GET['menu']; if (!isset($_GET['menu'])){header("location: index.php?menu=home");} ?>
<body style="background-color: #CCC;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">PHP-PgSQL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link <?php if ($m == 'home'){echo 'active';}else{echo '';} ?>" href="index.php?menu=home">Home</a>
                    <a class="nav-link <?php if ($m == 'add'){echo 'active';}else{echo '';} ?>" href="index.php?menu=add">Add</a>
                </div>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">Form Control</div>
                <div class="card-body">
                <?php
                    if ($m == 'home'){
                        include 'home.php';
                    }elseif($m == 'add'){
                        include 'add.php';
                    }
                ?>
                </div>
        </div>
    </div>
</body>

</html>