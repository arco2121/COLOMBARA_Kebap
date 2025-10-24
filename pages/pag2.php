<?php
require_once "../components/config.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
<div>
    <?php include "../components/navigation.php"; ?>
    <div>
        <h1><?=$title?></h1>
    </div>
    <?php
    if(!empty($_GET))
    {
        echo "<div>".$_GET['nome']."</div>";
    }
    ?>
</div>
<h2>Pagina 2</h2>
</body>
</html>