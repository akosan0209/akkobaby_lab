<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package SweetHeat
 */

get_header(); ?>


<div id="contents">
<div id="contentsInner"><h2>ページが見つかりませんでした</h2>
<p>お探しのページは、見つかりませんでした。<br />
お探しのページは削除された可能性がございます。</p>
<h2>考えられる原因</h2>
<p>以下の原因が考えられます。</p>
<ul>
<li>リンクが切れてしまっている（サイトの改良に伴うページの整理統合などによって、リンク切れが生じている場合もございます。申し訳ございません）。</li>
<li>URL（アドレス）の綴りを誤って入力されている。</li>
</ul><br />
<p><?php _e( 'Oops! That page can&rsquo;t be found.', 'sweetheat' ); ?></p>
<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sweetheat' ); ?></p>
<p><?php get_search_form(); ?></p>
</div></div>



<?php get_footer(); ?>
