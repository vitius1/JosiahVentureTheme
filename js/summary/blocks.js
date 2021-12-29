function getBlock(th) {
  return "#"+$(th).parent().attr('id');
}
// show/hide tab
CRM.$(".title").click(function(){
  var block = getBlock(this);
  if($(this).hasClass("active")) {
    $(this).removeClass("active");
    $(block+"s").fadeOut("fast"); 
    $(block).attr('style','height: 70px');  
    $(block+" .description").attr('style','white-space: nowrap; overflow: hidden; text-overflow: ellipsis;');  
  } else {
    $(this).addClass("active");
    $(block+"s").fadeIn("slow");
    $(block).attr('style','');  
    $(block+" .description").attr('style','');  
  }
});

// hover show/hide tab
CRM.$(function() {
  var block = getBlock(this);
  $(block+' .title').hover(function() {
    $(block+' .title .light-blue').css('background-color', '#FF6600');
    $(block+' .title .arrow').css('border-color', 'white');  
  }, function() {
    // on mouseout, reset the background colour
    $(block+' .title .light-blue').css('background-color', '');
    $(block+' .title .arrow').css('border-color', 'black');
  });

  var block = getBlock(this);
  $(block+' .title .plus').hover(function() {
    $(block+' .title .light-blue').css('background-color', '');
    $(block+' .title .arrow').css('border-color', 'black');
  }, function() {
    // on mouseout, reset the background colour
    $(block+' .title .light-blue').css('background-color', '#FF6600');
    $(block+' .title .arrow').css('border-color', 'white');
  });
  
  $('.hover-desc').hover(function() {
    var id = this.id;
    $('#hover-'+id).show();
    $(this).addClass("hover-left-arrow");
  }, function() {
    var id = this.id;
    $('#hover-'+id).hide();
    $(this).removeClass("hover-left-arrow");
  });
  
  $.wait = function(ms) {
    var defer = $.Deferred();
    setTimeout(function() { defer.resolve(); }, ms);
    return defer;
  };
  
  // tile menu links
  $('.tile-menu a').click(function(){
    var id = this.id;
    if(id === "show-tile-menu") {
      $('.tile-menu-collapsed').fadeOut();
      $('.tile-menu-expanded').fadeIn();
    } else if (id === "hide-tile-menu") {
      $('.tile-menu-expanded').fadeOut();
      $('.tile-menu-collapsed').fadeIn();
    } else {
      var block = "#"+id.split('show-')[1];
        $(block+" .title").addClass("active");
        $(block+"s").fadeIn("slow");
        $(block).attr('style','');  
        $(block+" .description").attr('style','');  
        $.wait(300).then(function(){
          $(block).animate({ 'zoom': 1.1 }, 400);
          $(block).animate({ 'zoom': 1 }, 400);
        });
        
    }
  });
  

});



