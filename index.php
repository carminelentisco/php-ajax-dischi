<?php include_once __DIR__ . '/php/database/database.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/main.css">
</head>
<body>

    <header class="header__page">
        <div class="container">
            <img src="dist/assets/spotify-logo.png" alt="Spotify Logo">
        </div>
    </header>

    <main>

        <div class="album__container container">
            <?php foreach ( $albums as $album ) {?>

            <div class="album">
                
                <div class="album__image">
                    <img class="poster" src=<?php echo $album['album_poster']?> alt="">   
                </div>
                
                <div class="album__info">
                    <h3><?php echo $album['album_title']; ?></h3>
                    <span class="album__author"><?php echo $album['album_author']; ?></span>
                    <span class="album__year"><?php echo $album['albumm_year']; ?></span>
                </div>
                
            </div>

            <?php } ?>
        </div>

    </main>
</body>
</html>