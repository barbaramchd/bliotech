$(document).ready(function(){
    var timer;
    var timeout = 5000; // Timout duration
    $('#autosave-note').keyup(function(){

        if(timer) {
            clearTimeout(timer);
        }
        timer = setTimeout(saveData, timeout);

    });

    $('#autosave-button').click(function(){
        saveData();
    });
});

// Save data
function saveData(){

    var content = $('#autosave-note').val().trim();
    var id      = $('#autosave-note').attr("data-id")

    if(content != ''){
        // AJAX request
        $.ajax({
            url: 'https://blio.tech/Actions/autosave_event',
            type: 'post',
            data: {content:content, id:id},
            success: function(response){
                $('#autosave-note').val(response);
            }
        });
    }
}