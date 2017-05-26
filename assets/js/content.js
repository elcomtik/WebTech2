$( document ).ready(function() {
    var liSelector = $(".content-menu ul li");
    var contentSel = $(".content");
    var prevClass;

    $( contentSel ).load( "assets/content/historia.php");

    $(liSelector).click(function () {
        $(liSelector).removeClass("active");
        $(this).addClass("active");

        var selectedClass = $(".content-menu ul").find( ".active" ).attr('id');
        //console.log(selectedClass);

        if(prevClass != selectedClass) {
            prevClass = selectedClass;
            switch(selectedClass) {
                case "historia":
                    $( contentSel ).load( "assets/content/historia.php");
                    break;
                case "vedenie":
                    $( contentSel ).load( "assets/content/vedenie.php");
                    break;
                case "oddelenia":
                    $( contentSel ).load( "assets/content/oddelenia.php");
                    break;
                default:

            }
        }
    });


});