/**
 * Created by rdanko on 26.5.2017.
 */

$(document).ready(function() {

    $('tr').click(nacitaj);
});

function nacitaj() {

    var filename = ($(this).attr('filename'));
    console.log(filename);

}