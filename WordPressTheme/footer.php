<!-- Contact -->
<?php if (!is_404() && !is_page(array('contact', 'thanks'))) : ?>

 <section id="contact" class="<?php echo is_front_page() ? 'top-space' : 'archive-contact'; ?> contact">
  <div class="contact__inner">
   <div class="contact__wrap">
    <div class="contact__wrap-left">
     <div class="contact__logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps-green.svg" alt="codeupsロゴ" />
     </div>

     <div class="contact__information">
      <dl class="contact__contents">
       <div class="contact__content">
        <dt>住所:</dt>
        <dd>沖縄県那覇市1-1</dd>
       </div>
       <div class="contact__content">
        <dt>TEL:</dt>
        <dd>0120-000-0000</dd>
       </div>
       <div class="contact__content">
        <dt>営業時間:</dt>
        <dd>8:30-19:00</dd>
       </div>
       <div class="contact__content">
        <dt>定休日:</dt>
        <dd>毎週火曜日</dd>
       </div>
      </dl>

      <div class="contact__map">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3072.238315316968!2d127.68727723959985!3d26.23158294998954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e56bd3e1caa493%3A0x121522af59d60a32!2z44CSOTAwLTAwMDUg5rKW57iE55yM6YKj6KaH5biC5aSp5LmF77yS5LiB55uu77yV4oiS77yR77yYIFNjdWRldHRv44Kq44Ki44K344K5!5e0!3m2!1sja!2sjp!4v1688827559544!5m2!1sja!2sjp" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
     </div>
    </div>

    <div class="contact__wrap-right">
     <div class="contact__title">
      <div class="title">
       <p class="title__en title__en--large">contact</p>
       <h2 class="title__jp title__jp--large">お問い合わせ</h2>
      </div>
     </div>

     <p class="contact__text">ご予約・お問い合わせはコチラ</p>

     <div class="contact__btn">
      <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn"><span>Contact us</span></a>
     </div>
    </div>
   </div>
  </div>
 </section>
<?php endif; ?>
</main>

<!-- フッター -->
<footer class="<?php echo (!is_404() && !is_page('contact')) ? 'footer-space' : (is_page('contact') ? 'page-contact-footer' : ''); ?> footer">
 <div class="footer__inner">
  <div class="footer__wrap">
   <div class="footer__logo">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/CodeUps.svg" alt="codeupsロゴ" />
   </div>

   <ul class="footer__links">
    <li class="footer__link">
     <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Facebook_icon.svg" alt="フェイスブックロゴ" /></a>
    </li>
    <li class="footer__link">
     <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/Instagram_icon.svg" alt="インスタロゴ" /></a>
    </li>
   </ul>
  </div>

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
  <div class="footer__nav">
   <nav class="nav-list">
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
       <li class="nav-list__item">
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
     <div class="nav-list__block nav-list__block--margin">
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

  <!-- page-top -->
  <div class="footer__top-btn js-footer-top-btn">
   <a href="#" class="top-btn">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/top_btn.svg" alt="トップに戻る" />
   </a>
  </div>
 </div>
 <small class="footer__copy">Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
</footer>
<?php wp_footer(); ?>
</body>

</html>
