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
                for(var y=1; y <=8; y++){
                    document.getElementById('Anim_stand_'+a+"-"+y).style.display = "block";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
            if(a == 8){
                for(var z=1; z <=10; z++){
                    document.getElementById('Anim_stand_'+a+"-"+z).style.display = "block";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
            if(a == 10 || a == 12 || a == 100 || a == 101){
                for(var n=1; n <=4; n++){
                     document.getElementById('Anim_stand_'+a+"-"+n).style.display = "block";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
            if(a != 37 && a != 8 && a != 10 && a !=12 && a != 100 && a != 101){
                for(var v=1; v <=5; v++){
                    document.getElementById('Anim_stand_'+a+"-"+v).style.display = "block";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
        }
        if(i != a){
            
            if(i == 37){
                for(var t=1; t <=8; t++){
                    document.getElementById('Anim_stand_'+i+"-"+t).style.display = "none";
                }
                $('.collapse'+a).collapse('toggle');
            } 
            
            if(i == 8){
                for(var o=1; o <=10; o++){
                    document.getElementById('Anim_stand_'+i+"-"+o).style.display = "none";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
            if(i == 10|| i == 12 || i == 100 || i == 101){
                for(var j=1; j <=4; j++){
                    document.getElementById('Anim_stand_'+i+"-"+j).style.display = "none";
                }
                $('.collapse'+a).collapse('toggle');
            }
            
            if(i != 37 && i != 8 && i != 10 && i != 12 && i != 100 && i != 101){
                for(var l=1; l <=5; l++){
                    document.getElementById('Anim_stand_'+i+"-"+l).style.display = "none";
                }
                $('.collapse'+a).collapse('toggle');

            }
                
        }
    }
    
}