jQuery(document).ready( ($) => {

    // Reference
    var albumContainer = $('.album__container');

    // Handlebars init 
    var source = $('#album__template').html();
    var template = Handlebars.compile(source);

    $.ajax({
        url: 'http://localhost/php-ajax-dischi/php/script/json_encode.php',
        mathod: 'GET',
        success: function (res) {
            
            for ( key in res ) {
                var  item = res[key];
                var data = {
                    urlImage: item.album_poster,
                    title: item.album_title,
                    author: item.album_author,
                    year: item.album_year
                }

                var outputHtml = template(data);
                albumContainer.append(outputHtml); 
            }
        },
        error: () => {
            console.error('Non è stato possibile accedere ai dati del database')
        }
    });
});