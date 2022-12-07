$(document).scroll(function() {
    checkOffset();
});

function checkOffset() {
    if($('#accueil_sidebar').offset().top + $('#accueil_sidebar').height() 
                                           >= $('#footer').offset().top - 10)
        $('#accueil_sidebar').css('position', 'absolute');
       
    if($(document).scrollTop() + window.innerHeight < $('#footer').offset().top)
        $('#accueil_sidebar').css('position', 'fixed'); // restore when you scroll up
}