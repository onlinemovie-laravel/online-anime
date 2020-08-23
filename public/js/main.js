
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
    
    setInterval(function(){
        var num = $('#box-comment').attr('data');
        var url = $('#box-comment').data('url');
        $.ajax({
            url: url,
            method:'POST',
            data:{flim_id:num },
            success: function(result){
                //console.log("run");
                 $('#box-comment').html(result);
            }
        })
    },3000);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).on('click','button[name="dbtn"]', function(){
        var num = $(this).attr('id');
        var flimid = $(this).attr('data');
        var url = $(this).data('url');
        console.log(num);
        $.ajax({
            url: url,
            method:'POST',
            data:{idcm:num , flim_id:flimid},
            success: function(result){
               
                 $('#box-comment').html(result);
            }
        })
        
    });
    $("#formaddchat").submit(function(e) {

        e.preventDefault(); // avoid to execute the actual submit of the form.
    
        var form = $(this);
        var url = form.attr('action');
        
        $.ajax({
               method: "POST",
               url: url,
               data: form.serialize(), // serializes the form's elements.
               success: function(result){
                $('#contenttext').val('');
                $('#box-comment').html(result);
                }
             });
    
        
    });
});