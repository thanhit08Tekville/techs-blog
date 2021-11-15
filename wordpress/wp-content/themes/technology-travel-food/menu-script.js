var technologytravelfood_theme_mobile_menu = document.querySelector( '#menu-mobile' );

if( document.querySelector( '.menu' ) ){
    var technologytravelfood_theme_menu= document.querySelector( '.menu' );
    technologytravelfood_theme_mobile_menu.addEventListener("click",function(){
    if( technologytravelfood_theme_menu.style.display === "block" ){
        technologytravelfood_theme_menu.style.display = "none"
    }
    else{
        technologytravelfood_theme_menu.style.display = "block"
    }
   });



if( document.querySelector( '.post-title:first-of-type' ) ){
    var technologytravelfood_theme_first_a= document.querySelector( '.post-title:first-of-type' );
    technologytravelfood_theme_first_a.addEventListener("focus",function(){
    if(technologytravelfood_theme_menu.style.display==='block'){
        technologytravelfood_theme_menu.style.display='none';
        technologytravelfood_theme_first_a.blur();
        technologytravelfood_theme_first_a.focus();
    }

    });
}

if( document.querySelector( '.widget-advertisement:first-of-type a' ) ){
    var technologytravelfood_theme_widget_a = document.querySelector( '.widget-advertisement:first-of-type a' );
    technologytravelfood_theme_widget_a.addEventListener( 'focus', function(){
        if(technologytravelfood_theme_menu.style.display==='block'){
            technologytravelfood_theme_menu.style.display = 'none';
            technologytravelfood_theme_widget_a.blur();
            technologytravelfood_theme_widget_a.focus();
        }
    } )

}
}