<?php get_header(); ?>

<?php the_post(); ?>
<div id="contents">
<div id="contentsInner">

<div id="" class="contBox">
<h2><?php the_category(); ?></h2>
<ul>
<li>
<?php the_title(); ?>
<p class="date"><?php the_date(); ?></p>
</li>
</ul>

<?php the_content(); ?>
<br><br><br><br>
<?php comments_template(); ?>

</div>

</div>
</div>

<?php get_footer(); ?>
