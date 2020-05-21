
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/css/main.css">
    <!-- SCRIPT SRC -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.js'></script>
    <script src="dist/js/main.js"></script>
</head>
<body>
     
    <div class="app">

        <header class="header__page">

            <div class=" header__container container">

                <img src="dist/assets/spotify-logo.png" alt="Spotify Logo">

                <div class="header__input-container">
                    <input class="header__input-text" type="text" placeholder="Cerca un artista">
                </div>

            </div>

        </header>

        <main>

            <div class="album__container container"></div>
        
        </main>

    </div>

    <!-- Template -->
    <script id="album__template" type="text/x-handlebars-template">
        <div class="album">
            <!-- ALBUM IMAGE -->
            <div class="album__image">
                <img class="poster" src="{{ urlImage }}" alt="">   
            </div>
            <!-- ALBUM INFO -->
            <div class="album__info">
                <h3>{{ title }}</h3>
                <small class="album__author">{{ author }}</small>
                <span class="album__year">{{ year }}</span>
            </div>      
        </div>
    </script>
      
</body>
</html>