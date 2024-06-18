<?php
/*
Template Name: 空白ページ
*/


the_post();
remove_filter('the_content','wpautop');
the_content();
?>
