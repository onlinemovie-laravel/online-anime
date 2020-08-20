
$(document).ready(function (){
    $('.noneactive').first().addClass('active');
    $('#pagi').each(function() {
        $($(this)).on('click', 'li', function(e){
            e.preventDefault();
            $(this).addClass('active').siblings().removeClass('active');
        });
        
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
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