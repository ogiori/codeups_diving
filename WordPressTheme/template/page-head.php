<?php

$page_title = '';
$page_img_sp = '';
$page_img_pc = '';
$alt = '';

// キャンペーン
if (is_post_type_archive('campaign') || is_tax('campaign_category')) {
  $page_title = 'campaign';
  $page_img_sp = '/assets/images/common/page-campaign-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-campaign-head_pc.jpg';
  $alt = '熱帯魚の写真';

  //アバウト
} elseif (is_page('about')) {
  $page_title = 'about us';
  $page_img_sp = '/assets/images/common/page-about-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-about-head_pc.jpg';
  $alt = '獅子舞の写真';

  //インフォメーション
} elseif (is_page('information')) {
  $page_title = 'information';
  $page_img_sp = '/assets/images/common/page-information-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-information-head_pc.jpg';
  $alt = 'ダイバーと熱帯魚の写真';

  //ブログ
} elseif (is_home() || is_single($post) || is_month()) {
  $page_title = 'blog';
  $page_img_sp = '/assets/images/common/archive-blog-head_sp.jpg';
  $page_img_pc = '/assets/images/common/archive-blog-head_pc.jpg';
  $alt = '魚群';

  //ヴォイス
} elseif (is_post_type_archive('voice') || is_tax('voice_category')) {
  $page_title = 'voice';
  $page_img_sp = '/assets/images/common/page-voice-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-voice-head_pc.jpg';
  $alt = 'ダイビングスクールの様子の写真';

  //プライス
} elseif (is_page('price')) {
  $page_title = 'price';
  $page_img_sp = '/assets/images/common/page-price-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-price-head_pc.jpg';
  $alt = 'ダイビング中の写真';

  //よくある質問
} elseif (is_page('faq')) {
  $page_title = 'faq';
  $page_img_sp = '/assets/images/common/page-faq-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-faq-head_pc.jpg';
  $alt = '浜辺の写真';

  // お問い合わせ
} elseif (is_page('contact') || is_page('thanks')) {
  $page_title = 'contact';
  $page_img_sp = '/assets/images/common/page-contact-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-contact-head_pc.jpg';
  $alt = '波の写真';

  // サイトマップ
} elseif (is_page('sitemap')) {
  $page_title = 'site MAP';
  $page_img_sp = '/assets/images/common/page-other-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-other-head_pc.jpg';
  $alt = '熱帯魚';

  // プライバシー
} elseif (is_page('privacy')) {
  $page_title = 'Privacy Policy';
  $page_img_sp = '/assets/images/common/page-other-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-other-head_pc.jpg';
  $alt = '熱帯魚';

  // 利用規約
} else {
  // その他のアーカイブページの場合
  $page_title = 'Terms of Service';
  $page_img_sp = '/assets/images/common/page-other-head_sp.jpg';
  $page_img_pc = '/assets/images/common/page-other-head_pc.jpg';
  $alt = '熱帯魚';
}
?>

<div class="page-head js-mv">
  <picture class="page-head__img">
    <!-- 768px以上なら表示 -->
    <source srcset="<?php echo get_template_directory_uri(); ?><?php echo $page_img_pc; ?>" media="(min-width: 768px)">
    <!-- 768px以下なら表示 -->
    <img src="<?php echo get_template_directory_uri(); ?><?php echo $page_img_sp; ?>" alt="<?php echo $alt; ?>">
  </picture>
  <h1 class="page-head__title
  <?php if (is_page('faq')) {
    echo 'page-head__title--uppercase';
  } ?>">
    <?php echo $page_title; ?>
  </h1>
</div>
