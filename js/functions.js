var menu = function()
{
  $('.nav-menu-button').click(function(){
        $('.menu-aside').css({
            left: '0px'
        });

        $('.menu-aside-bar').css({
            left: '0px'
        });

        $('.close-menu-button').css({
            display: 'block'
        });

        $('.container').css({
            overflow: 'hidden'
        });
  });

  $('.close-menu-button').click(function(){
        $('.menu-aside').css({
            left: '-300px'
        });

        $('.menu-aside-bar').css({
            left: '-50px'
        });

        $('.container').css({
            overflow: 'auto'
        });
  });
};

var help = function(){
    if($('.help-login').is(":hidden")){
        $('.btn-help').click(function(){
          $('.help-login').fadeIn(400);
        });
    };
};

var semestreSelection = function(){    
    var semestre = $( "#semester option:selected" ).val();
    var x = document.getElementById(semestre);
 
    $(x).css({
        display: 'block'        
    }); 
    
    $("#semester").bind("change", function(){

        $(x).css({
            display: 'none'        
        });
        
        var x2 = document.getElementById($(this).val());
        
        $(x2).css({
            display: 'block'        
        }); 
        
    });
    
};

$(document).ready(semestreSelection);
$(document).ready(menu);
$(document).ready(help);
