$(function(){

//  Header part
$(window).scroll(function(){
  if ($(this).scrollTop() > 50) {
     $('.mob_header').addClass('mobHeaderNewClass');
  } else {
     $('.mob_header').removeClass('mobHeaderNewClass');
  }
});

// Mobile  Header part
$(window).scroll(function(){
  if ($(this).scrollTop() > -100) {
     $('.headerPartTwo').addClass('headerPartTwoNewClass');
  } else {
     $('.headerPartTwo').removeClass('headerPartTwoNewClass');
  }
});

   // Back to Top 
   var btn = $('.backtotop');
   $(window).scroll(function() {
     if ($(window).scrollTop() > 300) {
       btn.addClass('show');
     } else {
       btn.removeClass('show');
     }
   });
   btn.on('click', function(e) {
     e.preventDefault();
     $('html, body').animate({scrollTop:0}, '300');
   });
 
   
// navbar off can list
var list = $('.js-dropdown-list');
var link = $('.js-link');
link.click(function(e) {
  e.preventDefault();
  list.slideToggle(200);
}); 

var list0 = $('.js-dropdown-list0');
var link0 = $('.js-link0');
link0.click(function(e) {
  e.preventDefault();
  list0.slideToggle(200);
}); 

var list1 = $('.js-dropdown-list1');
var link1 = $('.js-link1');
link1.click(function(e) {
  e.preventDefault();
  list1.slideToggle(200);
}); 
var list2 = $('.js-dropdown-list2');
var link2 = $('.js-link2');
link2.click(function(e) {
  e.preventDefault();
  list2.slideToggle(200);
}); 

var list3 = $('.js-dropdown-list3');
var link3 = $('.js-link3');
link3.click(function(e) {
  e.preventDefault();
  list3.slideToggle(200);
}); 

var list4 = $('.js-dropdown-list4');
var link4 = $('.js-link4');
link4.click(function(e) {
  e.preventDefault();
  list4.slideToggle(200);
}); 
var list5 = $('.js-dropdown-list5');
var link5 = $('.js-link5');
link5.click(function(e) {
  e.preventDefault();
  list5.slideToggle(200);
}); 
var list6 = $('.js-dropdown-list6');
var link6 = $('.js-link6');
link6.click(function(e) {
  e.preventDefault();
  list6.slideToggle(200);
}); 


});

function Utils() {}
  Utils.prototype = {
      constructor: Utils,
      isElementInView: function (element, fullyInView) {
          var pageTop = $(window).scrollTop();
          var pageBottom = pageTop + $(window).height();
          var elementTop = $(element).offset().top;
          var elementBottom = elementTop + $(element).height();

          if (fullyInView === true) {
              return ((pageTop < elementTop) && (pageBottom > elementBottom));
          } else {
              return ((elementTop <= pageBottom) && (elementBottom >= pageTop));
          }
      }
  };
