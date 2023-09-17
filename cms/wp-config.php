<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'imamuu_akkobaby-lab_db');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'imamuu');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'akko0054');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql623.db.sakura.ne.jp');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');


/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'M8n?19SW|S^#u<C#qk})JM+wv+:+CAMh|-j25p(B>ja6e!l4@!qQ8hE8=N(akYC_');
define('SECURE_AUTH_KEY',  '3Hby89L;/{-U0>M>hD6~j_? i^m8P28qK^v~>^7!+?J@+)iY>YhHd@gi~Q{o);;K');
define('LOGGED_IN_KEY',    'qo4#Cq-qpKW>q[+sc/)&i1<(/8!26}>]4a-W8^PQvtNy2Wsui*]>qhAt${r0v?Q)');
define('NONCE_KEY',        '3TYAH.g+m+;[`5r^~gs|YAum!P~/G+YA1`{<X&^yD=bUzrgYmfCM.6b*J7/x -oA');
define('AUTH_SALT',        '}&~VG~(9v>F3Xc|_zQUR!d>_^5-P##joNosv_Yi,Dus-8Q^F^-8t!@Alw5Wp)MvQ');
define('SECURE_AUTH_SALT', 'l3zHE]6OT+l|Gz+7@*iCD21c|#4-Z,2Kx  tIR+4rpY^-U(rMR9N52T9i:^aH[& ');
define('LOGGED_IN_SALT',   '`8q% uop*Yq.Ls+?|%X3@G^iLn_}PKCn;+r=EHgRQ%T!,u:=qz 2a36n&o,+n(^,');
define('NONCE_SALT',       'xZ7Vo!r0u|i.B|y-z!bB3B Dgh]wg=_90USy|arJ4{-ESL^&)rv.-q)Xa{UO@zcj');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'akkobaby_db';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
