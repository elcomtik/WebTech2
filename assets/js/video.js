/**
 * Created by eentox on 5/11/17.
 */
$(document).ready(
    function () {
        var tag = document.createElement('script');

        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
        $('tr').on('click', play_video);

    }
);

var player;
function onYouTubeIframeAPIReady() {
    var id;
    id = $('tbody').find('tr:first').attr('video_link');
    player = new YT.Player('player', {
        height: '90%',
        width: '100%',
        videoId: id,
        events: {
            'onReady': onPlayerReady,
        }
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}


function play_video(e) {
    var id = $(this).attr('video_link');
    player.loadVideoById(id);
}