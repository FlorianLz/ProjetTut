function validateForm() {
    document.getElementById('status').innerHTML = "Envoi en cours...";
    formData = {
        'name'     : $('input[name=name]').val(),
        'email'    : $('input[name=email]').val(),
        'subject'  : $('input[name=subject]').val(),
        'message'  : $('textarea[name=message]').val()
    };

   $.ajax({
    url : "mail.php",
    type: "POST",
    async : true,
    data : formData,
    success: function(data, textStatus, jqXHR)
    {

        $('#status').text(data.message);
        if (data.code) //Si le mail à bien été envoyé
        $('#contact-form').closest('form').find("input[type=text], textarea").val("");
               
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        document.getElementById('status').innerHTML = "L'envoi du mail a échoué !";

    }
});

}

$(window).on('load',function() {
    $(".loader").fadeOut(2000);
});

$(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
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


/*fonction pour menu page infos pratiques*/
$(function() {
  var $tabButtonItem = $('#tab-button li'),
      $tabSelect = $('#tab-select'),
      $tabContents = $('.tab-contents'),
      activeClass = 'is-active';

  $tabButtonItem.first().addClass(activeClass);
  $tabContents.not(':first').hide();

  $tabButtonItem.find('a').on('click', function(e) {
    var target = $(this).attr('href');

    $tabButtonItem.removeClass(activeClass);
    $(this).parent().addClass(activeClass);
    $tabSelect.val(target);
    $tabContents.hide();
    $(target).show();
    e.preventDefault();
  });

  $tabSelect.on('change', function() {
    var target = $(this).val(),
        targetSelectNum = $(this).prop('selectedIndex');

    $tabButtonItem.removeClass(activeClass);
    $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
    $tabContents.hide();
    $(target).show();
  });
});

function changement(id){
    var taille=window.innerWidth;
    document.getElementById(id).src='images/'+id+'1.png';
    if (taille>576){
        document.getElementById(id).style.width="100%";
    }else{
        document.getElementById(id).style.width="30vw";
    }
    
}

function resetimage(id){
    var taille=window.innerWidth;
    document.getElementById(id).src='images/'+id+'0.png';
    if (taille>576){
        document.getElementById(id).style.width="100%";
    }else{
        document.getElementById(id).style.width="30vw";
    }
}

/* fonctions pour la billetterie */

var total =0;
var totalP = 0
var totalD = 0;
var totalPD = 0;
var totalS = 0;
var totalPS = 0;
var totalDS = 0;
var totalPDS = 0;

var samplein = 0;
var prixsamplein = 0;

var samreduit = 0;
var prixsamreduit = 0;

var samgrat = 0;

var dimplein = 0;
var prixdimplein = 0;

var dimreduit = 0;
var prixdimreduit = 0;

var dimgrat = 0;

var dsp =0;
var prixdsp = 0;

var dsr=0;
var prixdsr = 0;

var dsg=0;

function calculDtarif(id,a){
    if(id == "dimgrat"){
        dimgrat = a*1;
    }
    if(id == "dimred"){
        dimreduit = a*1;
        prixdimreduit = a*10;
    }
    if(id == "dimplein"){
        dimplein = a*1;
        prixdimplein = a*15;
    }
}

function calculD(){
    totalD = dimplein +dimreduit + dimgrat;
    document.getElementById('nbBilletsDim').innerHTML = totalD;
    totalPD = prixdimplein + prixdimreduit;
    document.getElementById('prixBilletsDim').innerHTML = totalPD;
}

function calculStarif(id,a){
    if(id == "samgrat"){
        samgrat = a*1;
    }
    if(id == "samred"){
        samreduit = a*1;
        prixsamreduit = a*10;
    }
    if(id == "samplein"){
        samplein = a*1;
        prixsamplein = a*15;
    }
}

function calculS(){
    totalS = samplein +samreduit + samgrat;
    document.getElementById('nbBilletsSam').innerHTML = totalS;
    totalPS = prixsamplein + prixsamreduit;
    document.getElementById('prixBilletsSam').innerHTML = totalPS;
}

function calculSDtarif(id,a){
    if(id == "dsgrat"){
        dsg = a*1
    }
    if(id == "dsred"){
        dsr = a *1;
        prixdsr = a * 17;
    }
    if(id == "dsplein"){
        dsp = a*1;
        prixdsp = a*25;
    }
}

function calculDS(){
    totalDS = dsg + dsr + dsp;
    document.getElementById('nbBilletsDimSam').innerHTML = totalDS;
    totalPDS = prixdsr + prixdsp;
    document.getElementById('prixBilletsDimSam').innerHTML = totalPDS;
}

function totalBillets(){
    total = totalS + totalD + totalDS;
    document.getElementById('nbBilletsTotal').innerHTML = total;
    totalP = totalPS + totalPD + totalPDS;
    document.getElementById('prixBilletsTotal').innerHTML = totalP;
}