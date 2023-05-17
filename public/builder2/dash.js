$('.a1').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').show();
 $('.divTemplates2').hide();
});

$('.a2').click(function(event){
 
 event.preventDefault()
 
 $('.divTemplates').hide();
 $('.divTemplates2').show();
});
