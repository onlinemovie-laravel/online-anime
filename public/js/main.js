
$(document).ready(function (){
 
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    function load(){
        var num = $(this).attr('aria-details');
        var url = $(this).data('url');
        var list = $('#movie-last-movie').data('list');
        $.ajax({
            url: url,
            method:'POST',
            data:{num:num ,arr:list },
            success: function(result){
                
                $('#movie-last-movie').html(result);
            }
        })
    }
    $('a[class="load-flim"]').on('click', function(){
        var num = $(this).attr('aria-details');
        var url = $(this).data('url');
        var list = $('#movie-last-movie').data('list');
        $.ajax({
            url: url,
            method:'POST',
            data:{num:num ,arr:list },
            success: function(result){
                
                $('#movie-last-movie').html(result);
            }
        })
    });
});