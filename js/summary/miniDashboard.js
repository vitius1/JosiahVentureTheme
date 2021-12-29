CRM.$(function() {
  var cid=getCid();
  $.ajax({
    type: "GET",
    dataType: "json",
    url: prefix+"/civicrm/ajax/AddToMyContact",
    data: "cid="+cid+"&action=0",
    complete: function(data) {
      var status = JSON.stringify(data.responseJSON);
      if(status==0) {
        $('.dashboard-add-my-contact').show();
      } else if (status==1) {
        $('.dashboard-remove-my-contact').show();
      } else if (status==-1) {
        alert("api error 'Add to my contact'");
      } else {
        alert("unknown error 'Add to my contact'");
      }
    }
  });

  $('.dashboard-add-my-contact').click(function(){
    $.ajax({
      type: "GET",
      dataType: "json",
      url: prefix+"/civicrm/ajax/AddToMyContact",
      data: "cid="+cid+"&action=1",
      complete: function(data) {
        var status = JSON.stringify(data.responseJSON);
        if(status==0) {
          $('.dashboard-remove-my-contact').show();
          $('.dashboard-add-my-contact').hide();
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>already in My contact</span></div></div>');
        } else if (status==1) {
          $('.dashboard-remove-my-contact').show();
          $('.dashboard-add-my-contact').hide();
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>Added to My contact</span></div></div>');
        } else if (status==-1) {
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>api error "Add to my contact"</span></div></div>');
        } else {
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>unknown error "Add to my contact"</span></div></div>');
        }
      }
    });
  });

  $('.dashboard-remove-my-contact').click(function(){
    $.ajax({
      type: "GET",
      dataType: "json",
      url: prefix+"/civicrm/ajax/AddToMyContact",
      data: "cid="+cid+"&action=2",
      complete: function(data) {
        var status = JSON.stringify(data.responseJSON);
        if(status==0) {
          $('.dashboard-add-my-contact').show();
          $('.dashboard-remove-my-contact').hide();
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>already removed from My contact</span></div></div>');
        } else if (status==1) {
          $('.dashboard-add-my-contact').show();
          $('.dashboard-remove-my-contact').hide();
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>Removed from My contact</span></div></div>');
        } else if (status==-1) {
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>api error "Add to my contact"</span></div></div>');
        } else {
          $('html').append('<div class="lightbox-overlay"><div class="lightbox"><div class="lightbox-title">Add to my Contact</div><span>unknown error "Add to my contact"</span></div></div>');
        }
      }
    });
  });
  

  $(".dashboard-add-my-contact").hover(function(){
    $(".dashboard-add-my-contact span").show();
  }, function(){
    $(".dashboard-add-my-contact span").hide();
  });
  
  $(".dashboard-remove-my-contact").hover(function(){
    $(".dashboard-remove-my-contact .checkmark").hide();
    $(".dashboard-remove-my-contact span").show();
    $(".dashboard-remove-my-contact .circle").addClass("minus");
  }, function(){
    $(".dashboard-remove-my-contact .checkmark").show();
    $(".dashboard-remove-my-contact span").hide();
    $(".dashboard-remove-my-contact .circle").removeClass("minus");
  });
});