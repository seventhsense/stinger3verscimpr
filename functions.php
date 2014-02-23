<?php
//カスタムヘッダー
$args = array(
	'width'         => 986,
	'height'        => 300,
        'flex-height' => true,
	'default-image' => get_theme_root_uri() . '/stinger3verscimpr/images/banner.png',
);
add_theme_support( 'custom-header', $args );

// カスタムサムネイルサイズ
add_image_size('small_size', 100, 100, false);
?>
