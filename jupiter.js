 function addEvent(obj, evt, fn) {
    if (obj.addEventListener) {
        obj.addEventListener(evt, fn, false);
    } else if (obj.attachEvent) {
        obj.attachEvent("on" + evt, fn);
    }
}

addEvent(document, 'mouseout', function(evt) {
   if (evt.toElement == null && evt.relatedTarget == null && !sessionStorage.getItem('lightboxShown')) 
   {
        setTimeout(function() {
            $('.lightbox').slideDown();
           sessionStorage.setItem('lightboxShown', 'true');
         }, 500);
   };
 });


$('a.close').click(function() {
    $('.lightbox').slideUp();
});

$('body').click(function(evt) {
     if (!$(evt.target).closest('.lightbox').length) {
        $('.lightbox').slideUp();
     }
 });
