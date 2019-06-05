$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "tout")
        {
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });
    
    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

function filtrage(id){
    for(i=1;i<6;i++){
        document.getElementById('bouton-'+i).style.backgroundColor="#224191";
    }
    document.getElementById(id).style.backgroundColor="#1d765a";
}

function animation(a){
    console.log(a);
    for(var i=1; i <38; i++){
        if(i == a){
            
            if(a == 37){
                document.getElementById('Anim_stand_'+a+"-1").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-2").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-3").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-4").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-5").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-6").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-7").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-8").style.display = "block";
            }
            
            if(a == 8){
                document.getElementById('Anim_stand_'+a+"-1").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-2").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-3").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-4").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-5").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-6").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-7").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-8").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-9").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-10").style.display = "block";
            }
            
            if(a == 10 || a == 12 || a == 100 || a == 101){
                document.getElementById('Anim_stand_'+a+"-1").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-2").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-3").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-4").style.display = "block";
            }
            
            if(a != 37 && a != 8 && a != 10 && a !=12 && a != 100 && a != 101){
                document.getElementById('Anim_stand_'+a+"-1").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-2").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-3").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-4").style.display = "block";
                document.getElementById('Anim_stand_'+a+"-5").style.display = "block";
            }
            
        }
        if(i != a){
            
            if(i == 37){
                document.getElementById('Anim_stand_'+i+"-1").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-2").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-3").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-4").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-5").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-6").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-7").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-8").style.display = "none";
            } 
            
            if(i == 8){
                document.getElementById('Anim_stand_'+i+"-1").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-2").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-3").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-4").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-5").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-6").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-7").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-8").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-9").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-10").style.display = "none";
            }
            
            if(i == 10|| i == 12 || i == 100 || i == 101){
                document.getElementById('Anim_stand_'+i+"-1").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-2").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-3").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-4").style.display = "none";
            }
            
            if(i != 37 && i != 8 && i != 10 && i != 12 && i != 100 && i != 101){
                document.getElementById('Anim_stand_'+i+"-1").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-2").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-3").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-4").style.display = "none";
                document.getElementById('Anim_stand_'+i+"-5").style.display = "none";
            }
                
        }
    }
    
}