<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

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

<!-- ナビリスト -->
<section class="page-sitemap-list-space page-sitemap-list">
  <div class="page-sitemap-list__inner inner inner-icon">
    <nav class="nav-list nav-list--sitemap">
      <div class="nav-list__wrap">
        <div class="nav-list__block">
          <!-- キャンペーン -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
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
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $about; ?>">私たちについて</a>
            </li>
          </ul>
        </div>
        <div class="nav-list__block">
          <!-- ダイビング情報 -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
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
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $blog; ?>">ブログ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="nav-list__wrap nav-list__wrap--sitemap">
        <div class="nav-list__block">
          <!-- お客様の声 -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $voice; ?>">お客様の声</a>
            </li>
          </ul>
          <!-- 料金一覧 -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $price; ?>">料金一覧</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo $price; ?>#price-license">ライセンス講習</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo $price; ?>#price-experience">体験ダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo $price; ?>#price-fun">ファンダイビング</a>
            </li>
            <li class="nav-list__item">
              <a href="<?php echo $price; ?>#price-special">スペシャル<br class="u-mobile">ダイビング</a>
            </li>
          </ul>
        </div>
        <div class="nav-list__block">
          <!-- よくある質問 -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $faq; ?>">よくある質問</a>
            </li>
          </ul>
          <!-- プライバシーポリシー -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $privacy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
            </li>
          </ul>
          <!-- 利用規約 -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $tos; ?>">利用規約</a>
            </li>
          </ul>
          <!-- サイトマップ -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $sitemap; ?>">サイトマップ</a>
            </li>
          </ul>
          <!-- おい問わ合せ -->
          <ul class="nav-list__items">
            <li class="nav-list__item nav-list__item--sitemap">
              <a href="<?php echo $contact; ?>">おい問わ合せ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </div>
</section>

<?php get_footer(); ?>
