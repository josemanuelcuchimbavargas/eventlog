/*-- Se ejecutara solo cuando todo el html haya cargado. --*/
$(document).ready(function(){
     $('#btnRegistro').click(function () {    
        var datos = $('#sign_up').serialize();
        $('#resultado').html('<img src="../img/5.gif">');
        $.ajax({
                url:'../controlador/controlRegistro.php',
                type:'POST',
                dataType:'json',
                data:datos
                }).done(function(data) 
                {
                    $('#resultado').text('Ajax dice: ' + JSON.stringify(data));
                });
        });
 });