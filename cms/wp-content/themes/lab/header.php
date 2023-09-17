<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1">
<meta name="description" content="フリーランスwebデザイナーのIMAMURA　AKIKOのwebサイトです。IT企業にwebデザイナ－、コーダーとして5年勤務。SEO、ユーザビリティを考慮したデザインをお客様と一緒に作っていきたいです。" />
<meta name="keywords" content="webデザイナー,コーディング,サイト制作,フリーランス,CSS,HTML5,XHTML,photoshop" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>akiko imamura web site</title>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" /><!--iphone-->
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" /><!--favicon-->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/import.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fullpage.css">
<!-- jquery- -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fullpage.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<!--[if lt IE 9]>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<?php if(is_home()): ?>
<script type="text/javascript">
jQuery(document).ready(function($){
jQuery(window).load(function(){
jQuery('#sitename h1').delay(200).fadeIn(2000);
jQuery('#sitename p').delay(800).fadeIn(2000);
});
});
// jQuery(document).ready(function($){
// 　　$("#top nav ul li").click(function () {
// 　　　$("#top nav ul li").removeClass("current-menu-item");
// 　　　$(this).addClass("current-menu-item");
// 　　});
// 　})
</script>
<?php endif; ?>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-97380734-1', 'auto');
ga('send', 'pageview');

</script>
<?php wp_head(); ?>
</head>

<?php
$body_id ="";
if ( is_front_page() ) {
	$body_id = 'id="top"';
}  else if ( is_single() || is_page() ) {
	$body_id = 'id="'.$post->post_name.'"';
} else if ( is_category() ) {
	$category = get_the_category();
	$body_id = 'id="category_'.$category[0]->category_nicename.'"';
} else if ( is_post_type_archive() ) {
	$post_type = get_post_type();
	$body_id = 'id="'.$post_type->post_name.'"';
}
?>
<body <?php echo $body_id; ?> <?php body_class(); ?>>
<?php if(is_home()): ?>
<header>
<div id="headerInner">
<i class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</i>
<nav>
<?php wp_nav_menu( array(
        'theme_location'=>'mainmenu',
        'container'     =>'',
        'menu_class'    =>'',
        'items_wrap'    =>'<ul id="main-nav" class="global">%3$s</ul>'));
?>
</nav>
</div>
</header>
<?php else: ?>
<header>
<div id="headerInner">
<i class="menu-trigger">
  <span></span>
  <span></span>
  <span></span>
</i>
<ul>
  <li>
    <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a>
  </li>
  <li>
    <a href="/"><h1>Akiko Imamura</h1></a>
  </li>
</ul>
<nav>
<?php wp_nav_menu( array(
        'theme_location'=>'menu2nd',
        'container'     =>'',
        'menu_class'    =>'',
        'items_wrap'    =>'<ul id="main-nav" class="global">%3$s</ul>'));
?>
<!-- <ul>
  <li><a href="/">HOME</a></li>
  <li><a href="/workslist/">ALL</a></li>
  <li><a href="/workslist/cording/">コーディング</a></li>
  <li><a href="/workslist/wp/">Wordpress</a></li>
  <li><a href="/workslist/lp/">ランディングページ</a></li>
  <li><a href="/workslist/design/">デザイン</a></li>
</ul> -->
</nav>
</div>
</header>
<?php endif; ?>
