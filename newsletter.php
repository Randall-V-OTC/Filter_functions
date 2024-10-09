<?php
    if ($_GET['login'] == "false") {
        header('Location:index.php');
        exit;
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link href="css/styles.css" rel="stylesheet">
        <?php include "includes/cdnlinks.php" ?>
    </head>
<body class="d-flex flex-column min-vh-100">
    <?php include "includes/navbar.php" ?>

    <h1 class="text-center">Newsletter</h1>
    
    <div class="page-contents text-center">

        <?php 
         print_r($_POST);
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                include "submitted-form.php";
            } else {
                include "subscribe-form.php";
            }
            //include "subscribe-form.php" 
        ?>

    </div>

    <?php include "includes/foot.php" ?>
</body>
</html>