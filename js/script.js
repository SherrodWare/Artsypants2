$(function (){
    var $nav = $('#nav');
    var $subMenu = $('#sub-menu');
    
    //hide sub-menu
   // $('#close').hide();
   // $subMenu.hide();
    
    //for mobile-only icons
    $('#mobile-only').on('click', function(){
        
            $('#burger').toggleClass("hidden");
            $('#ex').toggleClass("show");
    
    $nav.slideToggle();
    return false;
    });
 //when .expand clicked   
$('.dropdown').on('click', function() {
    $subMenu.slideToggle();
    return false;
});

if(window.innerWidth>640) {
    $('.dropdown').on('mouseenter', function() {
        $subMenu.slideDown();
        return false;
    });
    $nav.on('mouseleave', function(){
        $subMenu.slideUp();
    });
}
});