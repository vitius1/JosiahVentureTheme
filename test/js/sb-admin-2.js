(function($) { 
  "use strict"; // Start of use strict

  // Toggle the side navigation
  $("#sidebarToggle, #sidebarToggleTop").on('click', function(e) {
    $("body").toggleClass("sidebar-toggled");
    $(".sidebar").toggleClass("toggled");
    if ($(window).width() > 768) {
      $(".content").removeClass("toggled");
      $("#accordionSidebar .nav-item").show();
      $("#accordionSidebar .nav-item-collapse").hide();
      $("#accordionSidebar .sidebar-heading").show();
      $("#accordionSidebar .sidebar-heading-collapse").hide();
      $("#accordionSidebar .sidebar-brand-toggled").attr('style', 'display: none !important;');
      $("#accordionSidebar .sidebar-brand").attr('style', '');
    };
    
    if ($(".sidebar").hasClass("toggled")) {
      $(".content").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
      $("#accordionSidebar .nav-item").hide();
      $("#accordionSidebar .nav-item-collapse").show();
      $("#accordionSidebar .sidebar-heading").hide();
      $("#accordionSidebar .sidebar-heading-collapse").show();
      $("#accordionSidebar .sidebar-brand").attr('style', 'display: none !important;');
      $("#accordionSidebar .sidebar-brand-toggled").attr('style', '');
    };
  });

  // Close any open menu accordions when window is resized below 768px
  if ($(window).width() < 768) {
    $(".content").addClass("toggled");
    $('.sidebar .collapse').collapse('hide');
    $("#accordionSidebar .nav-item").hide();
    $("#accordionSidebar .nav-item-collapse").show();
    $("#accordionSidebar .sidebar-heading").hide();
    $("#accordionSidebar .sidebar-heading-collapse").show();
    $("#accordionSidebar .sidebar-brand").attr('style', 'display: none !important;');
    $("#accordionSidebar .sidebar-brand-toggled").attr('style', '');    
  };
  $(window).resize(function() {
    if ($(window).width() < 768) {
      $(".content").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');
      $("#accordionSidebar .nav-item").hide();
      $("#accordionSidebar .nav-item-collapse").show();
      $("#accordionSidebar .sidebar-heading").hide();
      $("#accordionSidebar .sidebar-heading-collapse").show();
      $("#accordionSidebar .sidebar-brand").attr('style', 'display: none !important;');
      $("#accordionSidebar .sidebar-brand-toggled").attr('style', '');    
    };
    
    // Toggle the side navigation when window is resized below 480px
    if ($(window).width() < 480 && !$(".sidebar").hasClass("toggled")) {
      $("body").addClass("sidebar-toggled");
      $(".sidebar").addClass("toggled");
      $('.sidebar .collapse').collapse('hide');         
    };
  });

  // Prevent the content wrapper from scrolling when the fixed side navigation hovered over
  $('body.fixed-nav .sidebar').on('mousewheel DOMMouseScroll wheel', function(e) {
    if ($(window).width() > 768) {
      var e0 = e.originalEvent,
        delta = e0.wheelDelta || -e0.detail;
      this.scrollTop += (delta < 0 ? 1 : -1) * 30;
      e.preventDefault();    
    }
  });

  // Scroll to top button appear
  $(document).on('scroll', function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Smooth scrolling using jQuery easing
  $(document).on('click', 'a.scroll-to-top', function(e) {
    var $anchor = $(this);
    $('html, body').stop().animate({scrollTop:$("#goTop").offset().top}, 1000, 'easeInOutExpo');
    e.preventDefault();
  });
  

  // hover menu link
  $(".bg-gradient-primary .nav-link").hover(function(){
    $(this).find("svg path").attr("fill", "#fff");
    $(this).find(".fa-fw").css("margin-left", "-11px");
  }, function(){
    if(!$(this).hasClass('active')) {
      $(this).find("svg path").attr("fill", "#bcb5d0");
      $(this).find(".fa-fw").css("margin-left", "0");
    }
  });


  // show/hide advanced search
  $("#filtered-search").click(function(){
    if($("#search-field").css("display")=="none") {
      $("#search-field").show();
    } else {
      $("#search-field").hide();
    }
    
    
  });
  
  

  // close lightbox
  $('html').on('click', '.lightbox-overlay', function(e){
    if (!$(e.target).is(".lightbox")) {
      //$('.lightbox-overlay').remove();
    }
  });
  
  // when you are in my_people active menu link
  if (window.location.href.indexOf("my_people") > -1) {
    $('.nav-link.link_my_people').find("svg path").attr("fill", "#fff");
    $('.nav-link.link_my_people').find(".fa-fw").css("margin-left", "-11px");
    $('.nav-link.link_my_people').addClass('active');
  }

})(jQuery); // End of use strict
