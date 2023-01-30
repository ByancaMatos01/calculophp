$('fieldset').hide();

$('.Central > p').click(function (e){
    proximo= $ (this).next();
 $(proximo).slideToggle();
});
