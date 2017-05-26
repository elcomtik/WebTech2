/**
 * Created by eentox on 5/25/17.
 */


function DeleteVideo() {
    var video_url = $(event.target).parents('tr:first').find('td:eq(1)').text();
    console.log(video_url);
    $.ajax({
            url: 'video_managment.php',
            type: 'post',
            data: {
                action: 'delete_video',
                video_url: video_url
            },
            success: function (response) {
                response = JSON.parse(response);
                if (response == 'ok') {
                    location.reload();
                }
            }
        }
    )

}

function AddVideo() {
    $.ajax({
        url: 'video_managment.php',
        type: 'post',
        data: {
            action: 'add_video',
            video_id: $('#video_id').val(),
            name: $('#video_name').val(),
        },
        success: function (response) {
            response = JSON.parse(response);
            if (response[0] == true) {
                location.reload();
            }
        }
    });
}