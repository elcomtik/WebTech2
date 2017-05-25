/**
 * Created by Sabinka on 5/23/2017.
 */
function saveToDatabase(editableObj,column,id, db) {
    $(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
    var name = editableObj.innerHTML;
    name = name.replace(/<br>/g, '');
    if (name) {
        $.ajax({
            url: "intranet_update.php",
            type: "POST",
            data: 'column=' + column + '&editval=' + editableObj.innerHTML + '&id=' + id + '&db=' + db
        });
    } else {
        $.ajax({
            url: "intranet_delete.php",
            type: "POST",
            data: 'column=' + column + '&editval=' + editableObj.innerHTML + '&id=' + id + '&db=' + db
        });
    }
}

$('#personModal').on('show.bs.modal', function(e) {
    var id = $(e.relatedTarget).data('id');
    $(e.currentTarget).find('input[name="personId"]').val(id);
});

jQuery(function($){
    $('.table').footable();
});

function getModal(anno, dat) {
    alert(document.getElementById(dat).value + "\n" + document.getElementById(anno).value);
}