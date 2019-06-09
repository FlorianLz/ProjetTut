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
    document.getElementById(id).src='images/'+id+'1.png';
    document.getElementById(id).style.width="100%";
}

function resetimage(id){
    document.getElementById(id).src='images/'+id+'0.png';
    document.getElementById(id).style.width="100%";
}