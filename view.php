<?php
include_once("config.php");
$sql = "SELECT * FROM `img`";
$query = $mysql->query($sql);

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <?php while($row=$query->fetch_object()):?>
        <img width="200px" height="200px" src="<?=$row->img?>" alt="">
        <h1><?=$row->name3?></h1>
        <h2><?=$row->pain?></h2>
    <?php endwhile?>
</body>
</html>
<style>
    .btn11{
        width: 200px;
        height: 50px;
        border: none;
        border-radius: 50px;
        background-color: azure;
    }
    .btn12{
        width: 200px;
        height: 50px;
        border: none;
        border-radius: 50px;
        background-color: azu;
    }
</style>