<?php get_header(); ?>
<!-- category.php -->



<div id="contents">
<div id="contentsInner">

<div id="" class="contBox">


<?php if (is_year()): ?><?php printf('%s', get_the_time('Y')); ?> <?php endif; ?>
<h2>実績一覧</h2>
<?php if(is_tax()): ?>
タクソノミーページの時のみ表示
<?php endif; ?>
</div>
</div>


<!-- category.php -->
<?php get_footer(); ?>