<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <!-- ヘッダー -->
  <header class="header js-header">
    <div class="header__inner">
      <div class="header__wrap">

        <?php
        $home = esc_url(home_url('/'));
        $campaign = esc_url(home_url('/campaign/'));
        $about = esc_url(home_url('/about/'));
        $information = esc_url(home_url('/information/'));
        $blog = esc_url(home_url('/blog/'));
        $voice = esc_url(home_url('/voice/'));
        $price = esc_url(home_url('/price/'));
        $faq = esc_url(home_url('/faq/'));
        $contact = esc_url(home_url('/contact/'));
        $privacy = esc_url(home_url('/privacy/'));
        $tos = esc_url(home_url('/tos/'));
        $sitemap = esc_url(home_url('/sitemap/'));
        ?>

        <!-- ロゴ -->
        <?php $html_tag = (is_home() || is_front_page()) ? 'h1' : 'div'; ?>
        <<?php echo $html_tag; ?> class="header__logo">
          <a href="<?php echo esc_url($home); ?>">
            <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/CodeUps.svg')); ?>" alt="codeupsロゴ">
          </a>
        </<?php echo $html_tag; ?>>

        <!-- ハンバガー -->
        <div class="header__hamburger">
          <button class="hamburger js-hamburger">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>

        <!-- spメニュー -->
        <div class="header__modal js-modal">
          <div class="header__nav-sp">
            <nav class="nav-list nav-list--height">
              <div class="nav-list__wrap">
                <div class="nav-list__block">
                  <!-- キャンペーン -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $campaign; ?>">キャンペーン</a>
                    </li>
                    <?php
                    $terms = get_terms(
                      'campaign_category',
                      array(
                        //「説明」に記載されている順番にソート
                        'parent' => 0,
                        'orderby' => 'description'
                      )
                    );
                    foreach ($terms as $term) : ?>
                      <li class="nav-list__item">
                        <a href="<?php echo esc_url(get_term_link($term->term_id)); ?>">
                          <?php echo $term->name ?></a>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                  <!-- 私たちについて -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $about; ?>">私たちについて</a>
                    </li>
                  </ul>
                </div>
                <div class="nav-list__block">
                  <!-- ダイビング情報 -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $information; ?>">ダイビング情報</a>
                    </li>
                    <li data-tab-id="license" class="nav-list__item js-nav-list-item">
                      <a href="<?php echo $information; ?>#license">ライセンス講習</a>
                    </li>
                    <li data-tab-id="experience" class="nav-list__item js-nav-list-item">
                      <a href="<?php echo $information; ?>#experience">体験ダイビング</a>
                    </li>
                    <li data-tab-id="fun" class="nav-list__item js-nav-list-item">
                      <a href="<?php echo $information; ?>#fun">ファンダイビング</a>
                    </li>
                  </ul>
                  <!-- ブログ -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $blog; ?>">ブログ</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="nav-list__wrap">
                <div class="nav-list__block">
                  <!-- お客様の声 -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $voice; ?>">お客様の声</a>
                    </li>
                  </ul>
                  <!-- 料金一覧 -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item js-nav-list-price">
                      <a href="<?php echo $price; ?>">料金一覧</a>
                    </li>
                    <li class="nav-list__item js-nav-list-price">
                      <a href="<?php echo $price; ?>#price-license">ライセンス講習</a>
                    </li>
                    <li class="nav-list__item js-nav-list-price">
                      <a href="<?php echo $price; ?>#price-experience">体験ダイビング</a>
                    </li>
                    <li class="nav-list__item js-nav-list-price">
                      <a href="<?php echo $price; ?>#price-fun">ファンダイビング</a>
                    </li>
                    <li class="nav-list__item js-nav-list-price">
                      <a href="<?php echo $price; ?>#price-special">スペシャル<br>ダイビング</a>
                    </li>
                  </ul>
                </div>
                <div class="nav-list__block">
                  <!-- よくある質問 -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $faq; ?>">よくある質問</a>
                    </li>
                  </ul>
                  <!-- プライバシーポリシー -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                    </li>
                  </ul>
                  <!-- 利用規約 -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $tos; ?>">利用規約</a>
                    </li>
                  </ul>
                  <!-- サイトマップ -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $sitemap; ?>">サイトマップ</a>
                    </li>
                  </ul>
                  <!-- おい問わ合せ -->
                  <ul class="nav-list__items">
                    <li class="nav-list__item">
                      <a href="<?php echo $contact; ?>">おい問わ合せ</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>

        <!-- pcメニュー -->
        <nav class="header__nav-pc">
          <ul class="header__lists">
            <li class="header__list">
              <a href="<?php echo $campaign; ?>" data-text="キャンペーン">Campaign</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $about; ?>" data-text="私たちについて">About us</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $information; ?>" data-text="ダイビング情報">Information</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $blog; ?>" data-text="ブログ">Blog</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $voice; ?>" data-text="お客様の声">Voice</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $price; ?>" data-text="料金一覧">Price</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $faq; ?>" data-text="よくある質問">FAQ</a>
            </li>
            <li class="header__list">
              <a href="<?php echo $contact; ?>" data-text="お問合せ">Contact</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>

  <main>
