<?php
include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <?php
    if (isset($_POST['go'])) :
        $img = 'upload/image' . time(). ".jpg";
        $name3 = htmlspecialchars($_POST['name3']);
        $pain = htmlspecialchars($_POST['pain']);
        $mysql ->query("INSERT INTO `img`(`id`, `img`, `name3`, `pain`) VALUES (null,'".$img."','".$name3."','".$pain."')");

        if (move_uploaded_file($_FILES['img'] ['tmp_name'] , $img )) :
            $sql = "SELECT * FROM `img`";
            $query = $mysql->query($sql);
            $row=$query->fetch_object();

            header("Location:view.php");
    ?>

            <img width="200px" height="200px" src="<?=$row->img ?>" alt="">
            <?php else:?>
                <h1>Rasm</h1>
                <?php endif?>
                <?php else:?>
                    <?php endif?>
        <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="img">
                <input placeholder="name3" type="text" name="name3">
                <input placeholder="pain" type="text" name="pain">
              <button name="go">Enter</button>
        </form>
</body>

</html>