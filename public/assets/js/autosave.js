$(document).ready(function(){

    var ids = $('#event_table_ids').attr("data-ids").split(",");
    ids.forEach(iterativeFunction);
});


function iterativeFunction(item){
    var timer;
    var timeout = 1500; // Timout duration
    $('#autosave-note'+item).bind('input propertychange',function(){



        if(timer) {
            clearTimeout(timer);
        }
        $('#autosave-button'+item).val("Save changes")
        timer = setTimeout(function() {
            saveData(item);
            }, timeout);

    });

    $('#autosave-button'+item).click(function(){
        saveData(item);
    });
}


// Save data
function saveData(item){

    var content = $('#autosave-note'+item).val().trim();
    var id      = $('#autosave-note'+item).attr("data-id");

        // AJAX request
        $.ajax({
            url: 'https://blio.tech/Actions/autosave_event',
            type: 'post',
            data: {content:content, id:item},
            success: function(response){
                $('#autosave-button'+item).val("Saved!")
                //$('#autosave-note'+item).val(response);
            }
        });

}