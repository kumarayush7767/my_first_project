$(document).ready(function() {
    $('#menu_bar > li').bind('mouseover', openSubMenu);
    $('#menu_bar > li').bind('mouseout', closeSubMenu);
    
    function openSubMenu() {
        $(this).find('ul').css('visibility', 'visible');
                    $(this).css('background', '#3f6eb3');
    };
    
    function closeSubMenu() {
        $(this).find('ul').css('visibility', 'hidden');	
                    $(this).css('background', 'transparent');
    };
               
});