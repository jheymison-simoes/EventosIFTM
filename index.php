<?php
    include("inserts/menu.php");
    include("routes/routes.php");
?>


<!doctype html>
<html lang="pt">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Matrialize -->
<link rel="stylesheet" href="assets/materialize/css/materialize.css">
<link rel="stylesheet" href="assets/materialize/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- My Styles -->
<link rel="stylesheet" href="assets/styles/style.css">
<link rel="stylesheet" href="assets/styles/global.css">
<link rel="stylesheet" href="assets/styles/home.css">
<link rel="stylesheet" href="assets/styles/login.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">


<title>Event+</title>

</head>
<body>
    
    <!-- Menu -->
    <?php
        // menu();
        routes();
    ?>

<!-- Import JavaScript -->
<script src="assets/materialize/js/materialize.js"></script>
<script src="assets/materialize/js/materialize.min.js"></script>
</body>
</html>