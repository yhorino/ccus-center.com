<?php //子テーマ用関数
if ( !defined( 'ABSPATH' ) ) exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く

// https://takayakondo.com/wordpress-php-include/
// https://lufa-tawasi.com/how-to-use-php/
// ショートコードを使ったphpファイルの呼び出し方法
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');
