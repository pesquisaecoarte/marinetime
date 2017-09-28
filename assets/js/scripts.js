$(document).ready(function(){
    $('.menu-toggle').on('click touchstart', function(e){
        $('html').toggleClass('menu-active');
        e.preventDefault();
    });
})