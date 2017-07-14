
window.onload = function(){
    
    $("select[name='rol']").change(function () { /*agregar el evento de cambio*/
        location = '/register?tipo='+$(this).val();
    });

}