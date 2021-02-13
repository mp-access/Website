/* --------------------------------- SCROLL TO --------------------------------- */

var SCROLL_SPEED = 600;
var HEADER_OFFSET = 0;

function scrollToAnchor(id){
  if(id === "") return;
    var target = getAnchor(id);
  
  if(target.length > 0){
    $('html, body').animate({scrollTop: target .offset().top - HEADER_OFFSET}, SCROLL_SPEED).promise().then(function() {
      window.location.hash = id;
    });
  }
}

function initScrollLink(){
  $(".scroll-link").click(function(e) {
    var root = window.location.href.split('#');
    var paths = $(this).attr('href').split("#");
    if(paths.length == 2 && getAnchor(paths[1]).length > 0 && root[0] === paths[0]){
      scrollToAnchor(paths[1]);
      e.preventDefault();
      return false;
    }
  });
}

function getAnchor(id){
  return $('[data-id="' + id + '"]');
}




/* --------------------------------- SLIDE NAV --------------------------------- */

function initSlideNav(){
  $('.hamburger').on('click', function(event) {
    event.preventDefault();
    $('#slide_content').toggleClass("open");
    $('header').toggleClass("open");
    $('#slide_nav').toggleClass("open");
    $('.hamburger').toggleClass("hamburger--arrow");
    return false;
  });
}






/* --------------------------------- SCROLL DOWN --------------------------------- */

function initScrollDown(){
  scrollCheck();
  
  $(window).scroll(function () {
    scrollCheck();
  });
}

var lastState = false;

function scrollCheck(){
  var scrolled = $(document).scrollTop() > 70;
  
  if(scrolled !== lastState)   {
    if(scrolled){
      $('header').addClass("scrolled");   
    }  else {
      $('header').removeClass("scrolled");
    }
  }
  
  lastState = scrolled;
}








/* ------------------- SCROLL REVEAL ------------------- */

var SCROLL_REVEAL_ELEMENTS;

function initScrollReveal(){
  SCROLL_REVEAL_ELEMENTS = $('.scroll-reveal').not('[data-reveal-done=true]');
  
  initAutoincrement();
  updateRevealElements();  
  
  $(window).bind("scroll.reveal",function () {
    if(SCROLL_REVEAL_ELEMENTS.length == 0) {
      $(window).unbind("scroll.reveal");
    }
    updateRevealElements();
  });  
}

function updateRevealElements(){
  for (i = 0; i < SCROLL_REVEAL_ELEMENTS.length; ++i) {
    if(SCROLL_REVEAL_ELEMENTS.eq(i).data("reveal-done") !== true && $(document).scrollTop() + ($(window).height() / 3 * 2) >= SCROLL_REVEAL_ELEMENTS.eq(i).offset().top)   {
      var groupeId = SCROLL_REVEAL_ELEMENTS.eq(i).data('reveal-id');
      
      if(groupeId !== undefined){
        var toReveal = $('.scroll-reveal[data-reveal-id=' + groupeId + ']');
        $('.scroll-reveal[data-reveal-id=' + groupeId + ']').each(function(index, el) {
          $(el).attr("data-reveal-done", true);
          setTimeout(function() {
            revealElement($(el)); 
          }, index * 100); 
        });  
      }else{
        revealElement(SCROLL_REVEAL_ELEMENTS.eq(i));  
      }
    }
  }
  SCROLL_REVEAL_ELEMENTS = $('.scroll-reveal').not('[data-reveal-done=true]');  
}

function revealElement(el){
  el.css({
    'transform': 'translate(0px)',
    'opacity': '1'
  });
  
  el.attr("data-reveal-done", true);
  el.trigger('reveal');
}


function initAutoincrement(){
  SCROLL_REVEAL_ELEMENTS.on('reveal', function (event) {
    
    var self = $(this).find('.autoincrement');
    if(self.length === 0) { return; }
    
    var target = self.text();
    self.text(0);
    $({someValue: 0}).animate({someValue: target }, {
      duration: 1000,
      step: function() {
        self.text(commaSeparateNumber(Math.round(this.someValue)));
      },
      complete:function(){
        self.text(commaSeparateNumber(Math.round(this.someValue)));
      }
    });
  });
}


function commaSeparateNumber(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1'");
  }
  return val;
}






/* --------------------------------- FILE-TREE --------------------------------- */

$(document).ready(function() {
  $(".file-tree").filetree();
});








/* --------------------------------- ON LOAD --------------------------------- */
$(window).on('load', function() {
  // init Scroll Link
  initScrollLink();
  
  // init Slide nav
  initSlideNav();
  
  initScrollDown();
  
  initScrollReveal();
  
  hljs.initHighlighting();
  
  // Scroll on load
  scrollToAnchor(window.location.hash.replace('#', ''));
});
























































































