var ua = navigator.userAgent;
$(document).ready(function(){
  if ((ua.indexOf('iPhone') > 0) || ua.indexOf('iPod') > 0 || (ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0)) {
    // スマホのとき
    $('head').prepend('<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />');
  }else{
    // PC・タブレットのとき
    $('head').prepend('<meta name="viewport" content="width=1300" />');
  }
});

  var fullpageEvent = function(index, nextIndex, direction){
  var $top = $('#top header');
  var $top2 = $('#top .menu-trigger');
  var $logo = $('#main-nav').find('li').eq(0),
      $li = $('#main-nav').find('li');
      $li.removeClass('current-menu-item');
  if(nextIndex != 1){
    $top.css({'opacity':'1','display':'block'}),
    $top2.css({'opacity':'1','display':'block'}),
    $li.eq(nextIndex - 1).addClass('current-menu-item');
  }else{
    $top.css({'opacity':'0','display':'none'}),
    $top2.css({'opacity':'0','display':'none'})
  }
}
// FULLPAGE
$(function(){
$('#fullpage').fullpage({
        anchors: ['home', 'skill', 'works', 'about', 'contact'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['TOP', 'SKILL', 'WORKS', 'ABOUT', 'CONTACT'],
        showActiveTooltip: true,
        responsiveWidth: 768,
        afterResponsive: function(isResponsive){},
        onLeave: fullpageEvent
        // afterResponsive: function(isResponsive){
        // }
        // normalScrollElements: '#mainImg',
    //     scrollOverflow: true,
    //     afterResponsive: function(isResponsive){
    //       var w = $(window).width();
    //       var x = 768;
    //         scrollOverflow: (x <= w) ? false : true;
    //       }
});
});

/*---------------------------------------------
	for Retina Display
  ---------------------------------------------*/

$(document).ready(function() {
	$("noscript[data-large][data-small]").each(function() {
		/* 解像度を判別し、高解像度であれば高解像度用画像のパスを変数に格納 */
		var src = (window.devicePixelRatio > 1) ?
			 $(this).data("large") :
			 $(this).data("small");
		/* img要素を書き込む */
		$("<img src='"+src+"' alt='"+$(this).data("alt")+"' />").insertAfter($(this));
	});
});



/*---------------------------------------------
	Check Windows
  ---------------------------------------------*/
/* Windowの場合は、htmlタグに「win」というclassを付ける */
var nut = navigator.userAgent.toLowerCase();
if(nut.indexOf("windows") != -1) $("html").addClass("win");


/*---------------------------------------------
  top Nav
  ---------------------------------------------*/
$(function() {
    $('.menu-trigger').click(function(){
        $('.menu-trigger').toggleClass('active');
        $('nav').toggleClass('fixed');
        $('nav').slideToggle();
    });
$(function() {
    $("nav a").on('click', function(){
        if (window.innerWidth <= 768) {
            $(".menu-trigger").click();
        }
    });
});
});
/*---------------------------------------------
  To Page Top
  ---------------------------------------------*/
$(document).ready(function() {
  var w = $(window).width();
    var x = 768;
    if (x <= w){
  var flag = false;
  var pagetop = $('.pagetop');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      if (flag == false) {
        flag = true;
        pagetop.stop().animate({
          'right': '30px',
          'bottom': '30px'
        }, 200);
      }
    } else {
      if (flag) {
        flag = false;
        pagetop.stop().animate({
          'right': '-100px'
        }, 200);
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
}else{
  var flag = false;
  var pagetop = $('.pagetop');
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      if (flag == false) {
        flag = true;
        pagetop.stop().animate({
          'right': '10px',
          'bottom': '5px'
        }, 200);
      }
    } else {
      if (flag) {
        flag = false;
        pagetop.stop().animate({
          'right': '-100px'
        }, 200);
      }
    }
  });
  pagetop.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });  
}
});

/*---------------------------------------------
	hover
  ---------------------------------------------*/
$(document).ready(function(){
  $("a img").hover(function(){
          $(this).stop();
    $(this).fadeTo("normal", 0.7);
  },function(){
          $(this).stop();
    $(this).fadeTo("normal", 1.0);
  });
});


