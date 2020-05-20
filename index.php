<?php include_once __DIR__ . '/php/database/database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>

    <main>
        <?php foreach ( $albums as $album ) {?>

        <div class="album">
            
            <div class="album__image">
                <img class="poster" src=<?php echo $album['album_poster']?> alt="">   
            </div>
            
            <div class="album__info">
                <h3><?php echo $album['album_title']; ?></h3>
                <span><?php echo $album['album_author']; ?></span>
                <span><?php echo $album['albumm_year']; ?></span>
            </div>
            
        </div>

        <?php } ?>
    </main>
</body>
</html>