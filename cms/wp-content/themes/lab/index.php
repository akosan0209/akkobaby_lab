<?php get_header(); ?>
<div id="fullpage">
<article id="contents">
<div id="mainImg" class="section">
<div id="mainImgInner">
<div id="triangle1"></div>
<div id="triangle2"></div>
<div id="sitename">
<h1>AKIKO IMAMURA</h1>
<p>web designer & markup engineer</p>
</div>
<p class="scroll"><a href="#skill">CLICK HERE</a></p>
</div>
</div>
<!-- Service & Skills -->
<div id="contBox0" class="contBox section">
<div class="contBoxInner">
<h2>Service & Skills</h2>
<ul>
<li>
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/contBox0_fig01.png" alt="Wordpress"></figure>
<dl>
<dt>Wordpress</dt>
<dd>ブログのようにサイトを簡単に更新できる、CMS導入サービス</dd>
</dl>
</li>
<li>
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/contBox0_fig02.png" alt="スマートフォンサイト化"></figure>
<dl>
<dt>スマートフォンサイト化</dt>
<dd>現状のPCサイトをスマートフォン、タブレット対応にします。</dd>
</dl>
</li>
<li>
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/contBox0_fig03.png" alt="JQuery"></figure>
<dl>
<dt>JQuery</dt>
<dd>JQueryを利用したインタラクティブなサイト構築</dd>
</dl>
</li>
<li>
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/contBox0_fig04.png" alt="HTML5 & CSS3"></figure>
<dl>
<dt>HTML5 & CSS3</dt>
<dd>HTML5、CSS3を使用し、SEOを考慮したコーディングでのサイト構築</dd>
</dl>
</li>
</ul>
</div>
</div>
<!-- Works -->
<div id="contBox1" class="contBox section">
<div class="contBoxInner">
<h2>Works</h2>
<ul class="topworks">
<?php query_posts( array(
'post_type' => 'works',
// 'taxonomy' => 'works_cat',
// 'terms' => 'wtop',
'meta_key' => 'top_add',
'meta_value' => '1',
'meta_compare' => '=',
'posts_per_page' => 3
)); ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>
<li>
<figure><?php if (has_post_thumbnail()) {
the_post_thumbnail('full');
} else { ?>
<img src="<?php echo get_template_directory_uri(); ?>/images/news/news_blank.jpg" alt="">
<?php } ?>
<figcaption>
<div>
	<div class="tag">
	<!-- <?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '">'. $term->name . '';} ?> -->
	<?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '">'. $term->name . '</p>';} ?>
	</div>
	<h4><?php the_field('works_ttl'); ?></h4>
	<a class="link" href="<?php the_field('works_url'); ?>" target="_blank"><?php the_field('works_url'); ?></a>
</div>
</figcaption>
<i></i>
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
<?php $terms = wp_get_object_terms($post->ID,'works_cat'); foreach($terms as $term){echo '<p class="'. $term->slug . '">'. $term->name . '</p>';} ?>
</div>
<h4><?php the_title(); ?></h4>
</div>

</li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
</ul>
<p class="btn"><a href="/workslist/">制作実績一覧</a></p>
</div>
</div>
<!-- About -->
<div id="contBox2" class="contBox section">
<div class="contBoxInner">
<ul>
<li class="floatL item"><h2>About</h2>
<figure><img src="<?php echo get_template_directory_uri(); ?>/images/about_img01.png" alt=""></figure></li>
<li class="floatR item">
<h3>今村　明子<span>Akiko Imamura</span></h3>
<p>1979生まれ、広島県東広島市出身。<br />
広島外語専門学校　観光学科卒業後、アパレル・通信会社・旅行代理店等勤務<br />
独学でwebデザイン、コーディングを学び、制作会社でおよそ10年間web制作に携わる。<br />
主に教育、医療機関、エンタメ系のプロジェクトに従事。<br />
現在はフリーランスとして活動中、Wordpressを使用したサイト構築を得意としております。
</p>
<p>株式会社　アクシス　webデザイナーとして7年勤務<br />
株式会社　シスコム　webデザイナーとして2年勤務<br />
株式会社　DEMO　フロントエンドエンジニアとして勤務</p>
<p class="key1">ホームページ制作、バナー等のパーツ制作などWeb制作に関することならお気軽にご相談ください。<br />
また、パートナー（外注）スタッフをお探しの、Web制作会社・システム会社・広告代理店からの
お問い合わせもお待ちしております。</p>
</li>
</ul>
</div>
</div>
<!-- Contact -->
<div id="contBox3" class="contBox section">
<div class="contBoxInner">
<h2>
Contact<span>お問い合わせ</span>
</h2>
<?php echo do_shortcode('[contact-form-7 id="32" title="コンタクトフォーム 1"]'); ?>

</div>
</div>
</article>
</div>


<?php get_footer(); ?>

