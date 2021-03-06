/**
 * Created by rdanko on 26.5.2017.
 */

$(document).ready(function() {

    $('tr').click(nacitajObrazky);
});

function nacitajObrazky() {

    var folder = ($(this).attr('folder'));

    // console.log(folder);

    $.get( "gallery_functions.php", {action: "loadGallery", dir: folder})

        .done(function(response) {
            console.log( "Successful AJAX" );
            console.log(response);
            $('#lightgallery').html(response);
            $("#lightgallery").lightGallery({
                width: '100%',
                height: '100%',
                mode: 'lg-fade',
                addClass: 'fixed-size',
                thumbnail: true,
                counter: false,
                download: false,
                startClass: '',
                enableSwipe: false,
                enableDrag: false,
                speed: 500
            });
        })
        .fail(function() {
            console.log( "Error in AJAX" );
        });
}