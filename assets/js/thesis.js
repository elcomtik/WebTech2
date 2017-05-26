/**
 * Created by Adam on 6.4.2017.
 */
var pole = [];
//var pole2 = [];

function vypis () {

    pole = [];
    //$("#tbody").empty();
    $.post({
        url:"assets/functions/functions_free_thesis.php",
        data:{
            "ustav":$("#ustav").val(),
            "typ":$("#typ").val()
        },
        success: function (data) {
            console.log(data);
            $("#tabulka").empty();
            data = JSON.parse(data);

            $("#tabulka").append('<thead> <tr> <th>Názov</th> <th>Vedúci</th> <th>Odbor</th> </tr> </thead> <tbody>');

            $.each(data, function (index, item) {
                var eachrow = "<tr onclick='abstrakt(this)'>"
                    + "<td>" + item[0] + "</td>"
                    + "<td>" + item[1] + "</td>"
                    + "<td>" + item[2] + "</td>"
                //+ "<td>" + item[3] + "</td>"
                pole.push(item[3]);
                //pole2.push(item[2])
                + "</tr>";
                //$('#tbody').append(eachrow);
                $("#tabulka").append(eachrow);
                //document.getElementById("tabulka").innerHTML+=eachrow;
            });
            $("#tabulka").append('</tbody>');
            $("#tabulka").tablesorter();
            $("#tabulka").trigger("update");
            //$('#tabulka').trigger('sorton');


        },

    });


}

function abstrakt(x) {

    col = x.rowIndex;
    console.log(col);
    console.log(pole[col]);
    console.log(pole[col-1]);
    window.alert(pole[col-1])
}

function filtruj() {

    $("#tabulka tr").each(function () {
        $(this).show();
        if(($(this).children().eq(1).html().search($("#vstup").val()))==-1)
        {
            $(this).hide();
        }
    })
}

function filtruj2() {

    $("#tabulka tr").each(function () {
        $(this).show();
        if(($(this).children().eq(2).html().search($("#odbor").val()))==-1)
        {
            $(this).hide();
        }
    })
}

function zozbraz_prispevky() {

    $.post({
        url:"assets/functions/functions_free_thesis.php",
        data:{
            "login":$("#login").val()

        },
        success: function (data) {
            //$("#vysledok").append(data);
            data1 = null;
            data1 = JSON.parse(data);
            console.log(data);

            $header = "<thead> <tr> <th>Názov</th> <th>Typ</th> <th>Rok</th> </tr> </thead> <tbody>";

            var tables = $("#tabulka1,#tabulka2,#tabulka3");

            tables.empty();
            $("#tabulka1").empty();
            $("#tabulka2").empty();
            $("#tabulka3").empty();

            tables.html($header);

            $check1 = 0;
            $check2 = 0;
            $check3 = 0;

            var a1 = $header;
            var a2 = $header;
            var a3 = $header;

            //for (i = 0; i < cars.length; i++) {
            $.each(data1, function (index, item) {
                var row = "<tr>"
                    + "<td>" + item[0] + "</td>"
                    + "<td>" + item[1] + "</td>"
                    + "<td>" + item[2] + "</td>"
                    + "</tr>";

                switch(item[1]) {
                    case "monografie, učebnice, skriptá, príručky, normy, patenty, výskumné správy, iné neperiodické publikácie":
                        //$("#tabulka1").html += row;
                        a1 += row;
                        $check1 = 1;
                        break;
                    case "články v časopisoch":
                        //$("#tabulka2").html += row;
                        a2 += row;
                        $check2 = 1;
                        break;
                    case "príspevky v zborníkoch, kapitoly v monografiách/učebniciach, abstrakty":
                        //$("#tabulka3").html += row;
                        a3 += row;
                        $check3 = 1;
                        break;
                    default:
                }

            });

            tables.append('</tbody>');


            console.log($check1 + " " + $check2 + " " + $check3);

            if($check1) {
                console.log("here1");
                $("#tabulka1").html(a1);
                $("#tabulka1").tablesorter({
                    sortList: [[2,1]]
                })
            }
            if($check2) {
                console.log("here2");
                $("#tabulka2").html(a2);
                $("#tabulka2").tablesorter({
                    sortList: [[2,1]]
                })
            }
            if($check3) {
                console.log("here3");
                $("#tabulka3").html(a3);
                $("#tabulka3").tablesorter({
                    sortList: [[2,1]]
                })
            }

            data = null;
            /*
             var recursionFlag = false;

             // bind to table sort end event on ALL tables
             $("table").bind("sortEnd",function(e, table) {

             // ignore if the flag is set
             if (!recursionFlag) {
             recursionFlag = true;

             // find other tables to resort (but not the current one)
             // the current sort is stored in "table.config.sortList"
             $('table').not(this).trigger("sorton", [[2, 1]]);

             // reset recursion flag after 1 second... so you can't sort faster
             // than that or it won't trigger the other tables
             // you can adjust this value; it all depends on how much data needs
             // to be sorted in the tables. Run the tablesorter with "debug:true"
             // to find out the times needed to sort (but do it in IE as it is
             // the slowest browser)
             setTimeout(function(){ recursionFlag = false; }, 1000);

             }
             });
             */









        },
    });
}

