$('.a1').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').show();
 $('.divTemplates2').hide();
 $('.divTemplates3').hide();
 $('.divTemplates4').hide();
});

$('.a2').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').hide();
 $('.divTemplates2').show();
 $('.divTemplates3').hide();
 $('.divTemplates4').hide();
});

$('.a3').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').hide();
 $('.divTemplates2').hide();
 $('.divTemplates3').show();
 $('.divTemplates4').hide();
    
});

$('.a4').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').hide();
 $('.divTemplates2').hide();
 $('.divTemplates3').hide();
 $('.divTemplates4').show();
});
