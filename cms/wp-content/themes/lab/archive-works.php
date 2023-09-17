<?php get_header(); ?>
<div id="contents">
<div id="contentsInner">
<h2>制作実績一覧aaa</h2>

<?php query_posts( array(
'post_type' => 'works',
'taxonomy' => 'works_cat',
'paged' => $paged,
'posts_per_page' => 12
)); ?>
<ul class="topworks">

<?php if (have_posts()): while(have_posts()): the_post(); ?>
<li>
<figure><?php if (has_post_thumbnail()) {
the_post_thumbnail('full');
} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/news/news_blank.jpg" alt="">
<?php } ?>
<figcaption>
<div class="tag">
<!-- <?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '">'. $term->name . '';} ?> -->
<?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '"><a href="'.get_term_link($term->slug, 'works_cat').'">'. $term->name . '</a></p>';} ?>
</div>
<h4><?php the_field('works_ttl'); ?></h4>
<a class="link" href="<?php the_field('works_url'); ?>" target="_blank"><?php the_field('works_url'); ?></a>
</figcaption>
<a href="<?php the_permalink(); ?>"></a>
</figure>
<div class="worksdet">
<p class="date"><?php the_time('Y.m.d'); ?></p>
<?php
$days = 7;
$today = date_i18n('U');
$entry = get_the_time('U');
$kiji = date('U',($today - $entry)) / 86400 ;
if( $days > $kiji ){
echo '<p class="new">NEW</p>';
}
?>
<div class="tag2">
<?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '"><a href="'.get_term_link($term->slug, 'works_cat').'">'. $term->name . '</a></p>';} ?>
</div>
<h4><?php the_title(); ?></h4>
</div>

</li>
<?php endwhile; endif; ?>
</ul>

<?php get_template_part('pager') ?>
<?php wp_reset_query(); ?>


</div>
</div>

<?php get_footer(); ?>
