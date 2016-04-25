$('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

// for Charming thumbnail
jQuery(function() {
  jQuery('#allinone_carousel_charming').allinone_carousel({
    skin: 'charming',
    width: 1100,
    height: 350,
    responsive:true,
    autoPlay: 5,
    resizeImages:true,
    autoHideBottomNav:true,
    showElementTitle:false,
    verticalAdjustment:50,
    showPreviewThumbs:false,
    //easing:'easeOutBounce',
    numberOfVisibleItems:8,
    nextPrevMarginTop:23,
    playMovieMarginTop:0,
    bottomNavMarginBottom:-10 
  });  
});


$(function()
{
    var $gallery = $('.gallery a').simpleLightbox();
    
    $gallery.on('show.simplelightbox', function(){
      console.log('Requested for showing');
    })
    .on('shown.simplelightbox', function(){
      console.log('Shown');
    })
    .on('close.simplelightbox', function(){
      console.log('Requested for closing');
    })
    .on('closed.simplelightbox', function(){
      console.log('Closed');
    })
    .on('change.simplelightbox', function(){
      console.log('Requested for change');
    })
    .on('next.simplelightbox', function(){
      console.log('Requested for next');
    })
    .on('prev.simplelightbox', function(){
      console.log('Requested for prev');
    })
    .on('nextImageLoaded.simplelightbox', function(){
      console.log('Next image loaded');
    })
    .on('prevImageLoaded.simplelightbox', function(){
      console.log('Prev image loaded');
    })
    .on('changed.simplelightbox', function(){
      console.log('Image changed');
    })
    .on('nextDone.simplelightbox', function(){
      console.log('Image changed to next');
    })
    .on('prevDone.simplelightbox', function(){
      console.log('Image changed to prev');
    })
    .on('error.simplelightbox', function(e){
      console.log('No image found, go to the next/prev');
      console.log(e);
    });
});