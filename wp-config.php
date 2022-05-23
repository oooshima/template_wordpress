<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'haruoshi_template_db' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%f?Yd:x?[y,VE@0zvaa5Y.1 uY[p~~C<l_L09f@K~#vKf,gcn4Ic`Z(QuY.E9V^v' );
define( 'SECURE_AUTH_KEY',  'j^6.j;<HHJ]L1Oc~=dkR@,%So+J#e-:Sw2Q+gT,v=qZ(A~g<<TCJw.-M;rga,kOr' );
define( 'LOGGED_IN_KEY',    'w$`M<p$e(L+yG}>-#h#$>FH@F>k$z&9)[5h3 ^YEorKFtD)%2|SJvFcKUFY_x,!z' );
define( 'NONCE_KEY',        'y1)*naDC5l;#W*tx/+mM;%(Z_G^xwh<nI:EUfK0P;A0Yts;{ jHD9Q#&4uHy9p{r' );
define( 'AUTH_SALT',        '_hi4~V/~!u%rD=L%ha|c#,m-8YLdlK6BsR<Z b?& k9e 7;tmZ:&{cF&6vq#oJv-' );
define( 'SECURE_AUTH_SALT', 'SFko]@_U({&5o_rYx.;b]TF;K`]c#(1|fdxs9Ju^vt.N#E54qQblj_8ph:AF=g(I' );
define( 'LOGGED_IN_SALT',   'U%V~5~HJSt:~-Z0(^QO:s.XsyFFaG>lpsdSslG-_W@2tH&!@#dH$Gm-x1m2_(xVA' );
define( 'NONCE_SALT',       '*y&1_`egj# (Q/A9*p?jpcb%e)TceNPw;>=@0D.JD4h?Mj$5-gn$R;maE5hQiOm7' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'haruoshi_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
