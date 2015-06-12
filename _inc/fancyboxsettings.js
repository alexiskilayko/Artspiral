jQuery(document).ready(function() {

  
    /* Apply fancybox to multiple items */
    
    $(".grid-item").fancybox({
        'hideOnContentClick': false,
    helpers:  { 
        title : {
        type : 'inside',
    }
    }
    });
});