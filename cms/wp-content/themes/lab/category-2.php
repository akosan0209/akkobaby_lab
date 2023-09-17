<?php get_header(); ?>

<?php the_post(); ?>
<div id="contents">
<div id="contentsInner">

<div id="" class="contBox">
<h2><?php the_category(); ?></h2>
<ul>
<li>
<?php the_title(); ?>
<?php the_date(); ?>


<h3>カテゴリー一覧</h3>
</li>
</ul>

<?php the_content(); ?>


<?php comments_template(); ?>
</div>

</div>
</div>

<?php get_footer(); ?>
