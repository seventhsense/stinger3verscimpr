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

// SNSボタンカスタマイズ
function countTweetNum($url){//ツイート数取得
    $get_twitter = 'http://urls.api.twitter.com/1/urls/count.json?url=' . $url;
    $json = file_get_contents($get_twitter);
    $json = json_decode($json);
    $twitter = $json->{'count'};
    print("$twitter");
}
function countFbNum($url){//facebook(いいね! + シェア)数取得
    $get_facebook = 'http://api.facebook.com/restserver.php?method=links.getStats&urls=' . $url;
    $xml = file_get_contents($get_facebook);
    $xml = simplexml_load_string($xml);
    $facebook = $xml->link_stat->total_count; //いいね！のみ…like_count、shareのみ …share_count
    print("$facebook");
}
function countHatebuNum($url){//はてブ数取得
    $get_hatebu = 'http://api.b.st-hatena.com/entry.count?url=' . $url;
    $hatebu = file_get_contents($get_hatebu);
    if($hatebu == ""){$hatebu = 0;}
    print("$hatebu");
}



?>
