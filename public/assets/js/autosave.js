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

    if(content != ''){
        // AJAX request
        $.ajax({
            url: 'autosave.php',
            type: 'post',
            data: {content:content},
            success: function(response){
                $('#autosave-note').val(response);
            }
        });
    }
}