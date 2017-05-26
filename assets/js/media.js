/**
 * Created by rdanko on 26.5.2017.
 */

$(document).ready(function() {

    $('tr').click(nacitaj);
});

function nacitaj() {

    var filename = ($(this).attr('filename'));
    console.log(filename);
    var url = ($(this).attr('url'));
    console.log(url);
    // $("#frame").attr("src", url);
    if(filename != ""){
        window.open("uploads/media/" + filename);
    }else{
        window.open(url);

    }

}