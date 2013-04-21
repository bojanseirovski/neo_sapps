$(document).ready(function() {
    
    
    //  format viewpoint type
    if ($("#Findings_viewpoint_type option:selected").val() == 'observatory') {
        $('#observatory').show();
    }
    if ($("#Findings_viewpoint_type option:selected").val() == 'coord') {
        $('#view_coord').show();
    }

    $("#Findings_viewpoint_type").change(function() {

        $('#observatory').hide();
        $('#view_coord').hide();

        if ($("#Findings_viewpoint_type option:selected").val() == 'observatory') {
            $('#observatory').show();
        }
        if ($("#Findings_viewpoint_type option:selected").val() == 'coord') {
            $('#view_coord').show();
        }
    });


    // make a comment on a finding
    $('form#new_comment').submit(function(e) {
        e.preventDefault();
        var url = $('form#new_comment').attr('action');
        var user_id = $('#user_id').val();
        var finding_id = $('#finding_id').val();
        var comment = $('#finding_comment').val();
        $.post(url,
                {
                    user_id: user_id,
                    finding_id: finding_id,
                    comment: comment
                },
        function(response) {
            console.log(response);
            if (response.error !== 'no_error') {
                alert(response.error);
            }
            else{
                var html ='<div id="single_comment">'+
                          '<p id="text">'+comment+'</p>' +
                          '<span id="comment_by"> By '+response.user+'</span> - '
                          '<span id="date">On '+response.date+'</span>'
                          '</div>';
                $('#comments').prepend(html);
            }
        },
        "json");
    });
    
    // rank/rate a finding
    $('#vote_up').click(function(e) {
        e.preventDefault();
        var rank_points = $('#rank_points').html();
        var url = $('#rank_url').val();
        var user_id = $('#user_id').val();
        var finding_id = $('#finding_id').val();
        $.post(url,
                {
                    user_id: user_id,
                    finding_id: finding_id,
                    rank:'up'
                },
        function(response) {
            console.log(response);
            if (response.error !== 'no_error') {
                alert(response.error);
            }
            else{
                rank_points++;
                $('#rank_points').html(rank_points);
                $('#vote_down').show();
                $('#vote_up').hide();
                alert('Thank you!');
            }
        },
        "json");
    });
    
    
    $('#vote_down').click(function(e) {
        e.preventDefault();
        var rank_points = $('#rank_points').html();
        var url = $('#rank_url').val();
        var user_id = $('#user_id').val();
        var finding_id = $('#finding_id').val();
        $.post(url,
                {
                    user_id: user_id,
                    finding_id: finding_id,
                    rank:'down'
                },
        function(response) {
            console.log(response);
            if (response.error !== 'no_error') {
                alert(response.error);
            }
            else{
                rank_points--;
                $('#rank_points').html(rank_points);
                $('#vote_down').hide();
                $('#vote_up').show();
                alert('Thank you!');
            }
        },
        "json");
    });

});