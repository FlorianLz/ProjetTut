/* Fonctions effectuées au chargement de la page */
window.onload=function() {
  horloge('div_horloge');
  triauto();
  
};

/* Fonction permettant l'affichage de l'heure actuelle */
function horloge(el) {
  if(typeof el=="string") { el = document.getElementById(el); }
  function actualiser() {
    var date = new Date();
    var str = date.getHours();
    str += ':'+(date.getMinutes()<10?'0':'')+date.getMinutes();
    el.innerHTML = str;
  }
  actualiser();
  setInterval(actualiser,1000);
}
/* Fonction permettant de trier automatiquement les évènements en fonction de l'heure */
function triauto(){
    function actualisation(){
        var madate=new Date();
        var heures=madate.getHours();
        var minutes=madate.getMinutes();
        var jour=madate.getDay();
        if(jour == 6){
            $(".filterr").not('.samedi').hide('3000');
            $('.filterr').filter('.samedi').show('3000');
        }
        if(jour == 7){
            $(".filterr").not('.dimanche').hide('3000');
            $('.filterr').filter('.dimanche').show('3000');
        }
        if(jour !=6 && jour !=7){
            $(".filterr").not('.samedi').hide('3000');
            $('.filterr').filter('.samedi').show('3000');
        }
        if(heures>8 && heures<19){
            for (i=9;i<heures;i++){
                var x = document.getElementsByClassName("card h"+(i+1));
                for (j = 0; j < x.length; j++) {
                    x[j].style.display = "none";
               }
                for(m=1;m<60;m++){
                    if(minutes<=m && heures>i){
                        var x = document.getElementsByClassName("card h"+i+"m"+m);
                        for (j = 0; j < x.length; j++) {
                        x[j].style.display = "none";
                        }
                    }
                    if(minutes>m && heures>i){
                        var x = document.getElementsByClassName("card h"+(i+1)+"m"+m);
                        for (j = 0; j < x.length; j++) {
                        x[j].style.display = "none";
                        }

                    }
                }
            }
        }
    }
    actualisation();
    setInterval(actualisation,1000);
}

/* Fonction permettant le tri des stands par catégorie */
$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "tout")
        {
            $('.filter').show('1000');
        }
        else
        {
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

function refermer(val){
    var valeur=val.getAttribute('aria-expanded');
    if (valeur.toString() == 'false'){
        animation(val.id);
    }
    if (valeur.toString() == 'true'){
        desactivation();
        toutcacher();
    }
    
}

function animation(b){
    document.getElementById('recherchebtn').disabled=false;
    document.getElementById('recherchebtn').style.color='white';
    var a = b.substring(2);
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

function affichagecarte(id){
    var id=id.substring(1);
    $(".filter").not('.carte'+id).hide('3000');
    $('.filter').filter('.carte'+id).show('3000');
    $('.collapse'+id).collapse('toggle');
    activation();
}
function supprimer(){
    activation();
    if(document.form.texte.value =="") {
        activation();
    }else{
        activation();
    }
}

function toutcacher(){
    for(var i=1; i <38; i++){
            if(i == 37){
                for(var y=1; y <=8; y++){
                    document.getElementById('Anim_stand_'+i+"-"+y).style.display = "none";
                    $('.collapses'+i).collapse('hide');
                }
            }
            
            if(i == 8){
                for(var z=1; z <=10; z++){
                    document.getElementById('Anim_stand_'+i+"-"+z).style.display = "none";
                    $('.collapses'+i).collapse('hide');
                }
            }
            
            if(i == 10 || i == 12 || i == 100 || i == 101){
                for(var n=1; n <=4; n++){
                     document.getElementById('Anim_stand_'+i+"-"+n).style.display = "none";
                    $('.collapses'+i).collapse('hide');
                }
            }
            
            if(i != 37 && i != 8 && i != 10 && i !=12 && i != 100 && i != 101){
                for(var v=1; v <=5; v++){
                    document.getElementById('Anim_stand_'+i+"-"+v).style.display = "none";
                    $('.collapses'+i).collapse('hide');
                }
            }
    }
    
}
function activation(){
    document.getElementById('recherchebtn').disabled=false;
    document.getElementById('recherchebtn').style.color='white';
}
function desactivation(){
    document.getElementById('recherchebtn').disabled=true;
    document.getElementById('recherchebtn').style.color='red';
}
