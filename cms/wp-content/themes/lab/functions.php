<?php
//メニュー
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu(){
  register_nav_menu( 'mainmenu', 'メインメニュー' );
  register_nav_menu( 'menu2nd', '下層メニュー' );
}
//アイキャッチ画像

add_theme_support('post-thumbnails');
register_post_type(
  'works',
  array(
    'supports' => array('title','editor','thumbnail')
    )
  );


//works保護中の文言を削除
add_filter('protected_title_format', 'remove_protected');
function remove_protected($title) {
       return '%s';
}
//テキストを変更
// function my_password_form() {
//   return
//     '<p>表示させたいテキストをここに入れます<p>
//     <form class="post_password" action="' . home_url() . '/wp-login.php?action=postpass" method="post">
//       <input name="post_password" type="password" size="24">
//       <input type="submit" name="Submit" value="' . esc_attr__("送信") . '">
//     </form>';
// }
// add_filter('the_password_form', 'my_password_form');
//worksCookieの期限を変える
function customize_cockie_timeout($timeout) {
return time() + 3 * WEEK_IN_SECONDS;
}
add_filter('post_password_expires','customize_cockie_timeout');


function my_parse_query( $query ) {
    if(!isset($query->query_vars['paged']) && isset($query->query_vars['page']) ){
        $query->query_vars['paged'] = $query->query_vars['page'];
    }
}
add_action( 'parse_query', 'my_parse_query' );


/*ページャー*/
function get_pager() {
  global $wp_rewrite;
  global $wp_query;
  global $paged;
  $paginate_base = get_pagenum_link(1);
  if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
    $paginate_format = '';
    $paginate_base = add_query_arg('paged','%#%');
  }
  else{
    $paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
    user_trailingslashit('page/%#%/','paged');;
    $paginate_base .= '%_%';
  }
   //paginationの出力
  $pages = paginate_links(
    array(
      'base' => $paginate_base,
      'format' => $paginate_format,
      'total' => $wp_query->max_num_pages,
      'mid_size' => 2,
      'current' => ($paged ? $paged : 1),
      'prev_text' => 'PREV',
      'next_text' => 'NEXT',
      'type'      => 'array',
      )
    );
  return $pages;
}

#各ページのメインループのカスタマイズ
function pre_get_posts_custom($query) {
  if( is_admin() || ! $query->is_main_query() || is_preview() ){
    return;
  }
  $query->set('order','DESC');
  if($query->is_page(array('workslist'))){
  	$query->set( 'paged',get_query_var( 'paged' ) );
    $query->set('posts_per_page',5);
    return;
  }
  if($query->is_tax('works_cat')){
    $query->set('posts_per_page',12);
    return;
  }
}

add_action( 'pre_get_posts', 'pre_get_posts_custom' );

#各ページのスラッグを取得用
function get_slug(){
  if(is_tax()) {
    global $taxonomy;
    return $taxonomy;
  }
  if(is_page()) {
    global $post;
    return $post->post_name;
  }
  if(is_single() || is_post_type_archive()){
    $page = get_post(get_the_ID());
    return $page->post_type;
  }
  if(is_home()) return 'home';
}

/**
 * [get_my_posts サブループ]
 * @param  string $post_type [投稿タイプ]
 * @param  array  $term      [タームスラッグ]
 * @return [type]            [WP_Queryの戻り値]
 */
function get_my_posts($post_type = '',$term = array()){
  $args = array(
    'post_type' => $post_type,
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1,
    );

  $data = new WP_Query($args);
  return $data;
}

/**
 * [get_my_terms 投稿のタームの取得]
 * @param  string $taxonomy [タクソノミーslug]
 * @return [type]           [タームの配列]
 */
function get_my_terms($taxonomy = ''){
  if(is_tax() && empty($taxonomy)) global $taxonomy,$term;
  #reformのかてごり別一覧の場合の該当分類一覧の取得
  return get_terms( $taxonomy, array('get' => 'all') );
}
?>