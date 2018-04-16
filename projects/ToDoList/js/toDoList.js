$(document).ready(function(){
    $('button').click(function(){
        var item = $('input[name=additem]').val();
        $('ol').append('<li>'+ item +' &nbsp;<button class="remove">Retirer</button></li><br>');
    });
    $("#remove").click(function(){
       $(this).parent('li').remove();
    });
    
   });

$('#todolist').on('click', 'button', function(){
  $(this).closest('li').remove();
});

$("input:text").focus(function(){$(this).val("")

});