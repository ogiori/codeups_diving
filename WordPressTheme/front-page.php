<?php get_header(); ?>

<!-- オープニングアニメーション -->
<div class="op-animation js-op-animation">
  <div class="op-animation__mask js-op-animation-mask">
    <div class="op-animation__title1-block js-op-animation-title1-block">
      <p class="op-animation__title1">diving</p>
      <p class="op-animation__sub-title1">into the ocean</p>
    </div>
  </div>

  <div class="op-animation__wrap">
    <img class="op-animation__left js-op-animation-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/op-animation_img1.jpg" alt="" />

    <img class="op-animation__right js-op-animation-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/common/op-animation_img2.jpg" alt="" />
  </div>

  <div class="op-animation__title2-block js-op-animation-title2-block">
    <p class="op-animation__title2">diving</p>
    <p class="op-animation__sub-title2">into the ocean</p>
  </div>
</div>

<!-- メインビジュアル -->
<section class="mv js-mv">
  <div class="mv__slider">
    <div class="swiper mv-swiper js-mv-swiper">
      <div class="swiper-wrapper mv-swiper__wrapper">

        <?php
        $img_pc = get_field('top_slider_pc');
        $img_sp = get_field('top_slider_sp');
        $img_text = get_field('slider_text');

        // ループで画像とテキストを生成
        for ($i = 1; $i <= 4; $i++) :
          $pc_key = "top_slider_pc{$i}";
          $sp_key = "top_slider_sp{$i}";
          $text_key = "slider_text{$i}";
          $pc_url = $img_pc[$pc_key]['url'];
          $sp_url = $img_sp[$sp_key]['url'];
          $alt_text = $img_text[$text_key];

          // 代替テキストが空の場合、デフォルトの値を設定
          $alt_text = empty($alt_text) ? 'トップスライダー画像' : $alt_text;
        ?>

          <!-- スライダー画像 -->
          <figure class="swiper-slide mv-swiper__slide">
            <picture class="mv-swiper__img">
              <source srcset="<?php echo $pc_url; ?>" media="(min-width: 768px)" />
              <img src="<?php echo $sp_url; ?>" alt="<?php echo $alt_text; ?>" />
            </picture>
          </figure>
        <?php endfor; ?>

      </div>
    </div>
  </div>
  <div class="mv__title-wrap">
    <h2 class="mv__title">diving</h2>
    <p class="mv__sub-title">into the ocean</p>
  </div>
</section>

<!-- Campaign -->
<section id="campaign" class="top-campaign-space campaign">
  <div class="campaign__inner">
    <div class="campaign__title">
      <div class="title">
        <p class="title__en">campaign</p>
        <h2 class="title__jp">キャンペーン</h2>
      </div>
    </div>
    <div class="campaign__slider">
      <div class="campaign-swiper">
        <div class="campaign-swiper__btn-wrap">

          <div class="swiper-button-prev campaign-swiper__prev js-campaign-swiper-prev"></div>
          <div class="swiper-button-next campaign-swiper__next js-campaign-swiper-next"></div>

        </div>
        <div class="swiper campaign-swiper__container js-campaign-swiper-container">
          <div class="swiper-wrapper campaign-swiper__wrapper">

            <?php
            $param = array(
              'posts_per_page' => '-1', //表示件数。-1なら全件表示
              'post_type' => 'campaign', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
              'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
              'order' => 'DESC'
            );
            $the_query = new WP_Query($param);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!-- ループ -->
                <div class="swiper-slide campaign-swiper__slide">
                  <div class="card1">
                    <figure class="card1__img">

                      <?php if (has_post_thumbnail()) : ?>
                        <!-- アイキャッチ画像指定されている場合 -->
                        <?php the_post_thumbnail(); ?>
                      <?php else : ?>
                        <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                      <?php endif; ?>
                    </figure>

                    <div class="card1__body-top">
                      <!-- カテゴリー -->
                      <?php $term = get_the_terms($post->ID, 'campaign_category');
                      if ($term) : ?>
                        <p class="card1__tag">
                          <?php echo $term[0]->name; ?>
                        </p>
                      <?php endif; ?>

                      <!-- タイトル -->
                      <?php if (get_the_title()) : ?>
                        <h3 class="card1__title">
                          <?php echo wp_trim_words(get_the_title(), 18, '...'); ?>
                        </h3>
                      <?php endif; ?>
                    </div>

                    <div class="card1__body-bottom">

                      <?php
                      $campaign_price = get_field('campaign_price');
                      $price_text = $campaign_price['campaign_price_text'];
                      $price_before = $campaign_price['campaign_price_before'];
                      $price_after = $campaign_price['campaign_price_after'];
                      ?>

                      <!-- 値段上テキスト -->
                      <?php if ($price_after && $campaign_price) : ?>
                        <p class="card1__text"><?php echo $price_text; ?></p>
                      <?php endif; ?>

                      <div class="card1__wrap">

                        <!-- 割引前価格 -->
                        <?php if ($price_before && $price_after) : ?>
                          <p class="card1__price1"><span>¥<?php echo number_format($price_before); ?></span></p>
                        <?php endif; ?>

                        <!-- 割引後価格 -->
                        <?php if ($price_after) : ?>
                          <p class="card1__price2">¥<?php echo number_format($price_after); ?></p>
                        <?php endif; ?>

                      </div>
                    </div>
                  </div>
                </div>

              <?php endwhile;
              wp_reset_postdata(); ?>
            <?php else : ?>
              <!-- 投稿が無い場合の処理 -->
              <p>投稿がありません。</p>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </div>
    <div class="campaign__btn">
      <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="btn"><span>View more</span></a>
    </div>
  </div>
</section>

<!-- About us -->
<section id="about" class="top-space about">
  <div class="inner about__inner">
    <div class="about__title">

      <!-- タイトル -->
      <div class="title">
        <p class="title__en">about us</p>
        <h2 class="title__jp">私たちについて</h2>
      </div>
    </div>

    <!-- bg -->
    <div class="about__wrap">
      <div class="about__images">
        <figure class="about__img1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_img1.jpg" alt="狛犬の写真" />
        </figure>
        <figure class="about__img2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/about_img2.jpg" alt="魚の写真" />
        </figure>
      </div>

      <!-- テキスト左 -->
      <div class="about__container">
        <p class="about__text1">
          Dive into<br />
          the Ocean
        </p>

        <!-- テキスト右 -->
        <?php
        $page_about = get_page_by_path('about');
        $about_text = SCF::get('about_text', $page_about->ID);
        ?>
        <div class="about__contents">
          <?php if ($about_text) : ?>
            <p class="about__text2">
              <?php echo nl2br(esc_html($about_text)); ?>
            </p>
          <?php endif; ?>

          <!-- ボタン -->
          <div class="about__btn">
            <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn"><span>View more</span></a>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- Information -->
<section id="information" class="top-space information">
  <div class="inner information__inner">
    <div class="information__title">
      <div class="title">
        <p class="title__en">information</p>
        <h2 class="title__jp">ダイビング情報</h2>
      </div>
    </div>
    <div class="information__wrap">
      <figure class="information__img js-trigger">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information_img.jpg" alt="魚の写真" />
      </figure>
      <div class="information__body">
        <h3 class="information__sub-title">ライセンス講習</h3>
        <p class="information__text">
          当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
        </p>
        <div class="information__btn">
          <a href="<?php echo esc_url(home_url('/information/')); ?>" class="btn"><span>View more</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Blog -->
<section id="blog" class="blog">
  <div class="blog__inner">
    <div class="blog__title">
      <div class="title">
        <p class="title__en title__en--white">blog</p>
        <h2 class="title__jp title__jp--white">ブログ</h2>
      </div>
    </div>
    <div class="blog__cards">

      <?php
      $param = array(
        'posts_per_page' => '3', //表示件数。-1なら全件表示
        'post_type' => 'post', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'order' => 'DESC'
      );

      $the_query = new WP_Query($param);
      if ($the_query->have_posts()) : ?>
        <ul class="cards2">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- ループ -->
            <li class="cards2__item">
              <a href="<?php the_permalink(); ?>" class="card2">
                <div class="card2__img">
                  <?php if (has_post_thumbnail()) : ?>
                    <!-- アイキャッチ画像指定されている場合 -->
                    <?php the_post_thumbnail(); ?>
                  <?php else : ?>
                    <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                  <?php endif; ?>
                </div>
                <!-- 時間 -->
                <time datetime="<?php the_time('c'); ?>" class="card2__time">
                  <?php the_time('Y.m.d'); ?>
                </time>
                <!-- タイトル -->
                <h3 class="card2__title"><?php echo wp_trim_words(get_the_title(), 17, '...'); ?></h3>
                <div class="card2__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 85, ''); ?>
                </div>
              </a>
            </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ul>
      <?php else : ?>
        <!-- 投稿が無い場合の処理 -->
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>

    <!-- ボタン -->
    <div class="blog__btn">
      <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn"><span>View more</span></a>
    </div>
  </div>
</section>

<!-- Voice -->
<section id="voice" class="top-space voice">
  <div class="inner voice__inner">

    <div class="voice__title">
      <div class="title">
        <p class="title__en">voice</p>
        <h2 class="title__jp">お客様の声</h2>
      </div>
    </div>
    <div class="voice__cards">

      <?php
      $param = array(
        'posts_per_page' => '2', //表示件数。-1なら全件表示
        'post_type' => 'voice', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'order' => 'DESC'
      );
      $the_query = new WP_Query($param);
      if ($the_query->have_posts()) : ?>
        <ul class="cards3">
          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <!-- ループ -->
            <li class="cards3__item">
              <div class="card3">
                <div class="card3__wrap1">
                  <div class="card3__wrap2">
                    <div class="card3__wrap3">
                      <?php if (get_the_title()) : ?>
                        <div class="card3__meta">
                          <?php
                          $voice_meta = get_field('voice_meta');
                          $voice_age = $voice_meta['voice_age'];
                          $voice_genre = $voice_meta['voice_genre'];
                          ?>
                          <!-- 年代 -->
                          <?php if ($voice_age) : ?>
                            <p class="card3__age"><?php echo $voice_age; ?></p>
                          <?php endif; ?>

                          <!-- ジャンル -->
                          <?php if ($voice_genre) : ?>
                            <p class="card3__gender">
                              (<?php echo $voice_genre; ?>)
                            </p>
                          <?php endif; ?>
                        </div>
                      <?php endif; ?>
                      <!-- カテゴリー -->
                      <?php $term = get_the_terms($post->ID, 'voice_category');
                      if ($term) : ?>
                        <p class="card3__tag">
                          <?php echo $term[0]->name; ?>
                        </p>
                      <?php endif; ?>
                    </div>
                    <!-- タイトル -->
                    <h3 class="card3__title"><?php echo wp_trim_words(get_the_title(), 21, '...'); ?></h3>
                  </div>
                  <div class="card3__img js-trigger">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- アイキャッチ画像指定されている場合 -->
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                    <?php endif; ?>
                  </div>
                </div>
                <div class="card3__text">
                  <?php echo wp_trim_words(get_field('voice_text'), 170, '...'); ?>
                </div>
              </div>
            </li>
          <?php endwhile;
          wp_reset_postdata(); ?>
        </ul>
      <?php else : ?>
        <!-- 投稿が無い場合の処理 -->
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
    <!-- ボタン -->
    <div class="voice__btn">
      <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="btn"><span>View more</span></a>
    </div>

  </div>
</section>

<!-- Price -->
<section id="price" class="top-space price">
  <div class="inner price__inner">
    <div class="price__title">
      <div class="title">
        <p class="title__en">price</p>
        <h2 class="title__jp">料金一覧</h2>
      </div>
    </div>
    <div class="price__wrap">
      <figure class="price__img js-trigger">
        <picture>
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/common/price_img-pc.jpg" media="(min-width: 768px)" />
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/price_img-sp.jpg" alt="亀と魚の群れの写真" />
        </picture>
      </figure>

      <div class="price__list">
        <div class="charge-list">
          <!-- ライセンス講習 -->
          <div class="charge-list__wrap">
            <h3 class="charge-list__title">ライセンス講習</h3>
            <dl class="charge-list__items">
              <?php
              // 料金ページの情報取得
              $page_price = get_page_by_path('price');
              $license_items = SCF::get('price_license', $page_price->ID);
              foreach ($license_items as $license_item => $field_value) :
                $license_title = $field_value['price_license-title'];
                $license_charge = $field_value['price_license-charge'];
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <?php if ($license_title && $license_charge) : ?>
                    <!-- コース名 -->
                    <dt class="charge-list__menu"><?php echo esc_html($license_title); ?></dt>
                    <!-- 料金 -->
                    <dd class="charge-list__price">¥<?php echo number_format(esc_html($license_charge)); ?></dd>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </dl>
          </div>
          <!-- 体験ダイビング -->
          <div class="charge-list__wrap">
            <h3 class="charge-list__title">体験ダイビング</h3>
            <dl class="charge-list__items">
              <?php
              $experience_items = SCF::get('price_experience', $page_price->ID);
              foreach ($experience_items as $experience_item => $field_value) :
                $experience_title = $field_value['price_experience-title'];
                $experience_charge = $field_value['price_experience-charge'];
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <?php if ($experience_title && $experience_charge) : ?>
                    <!-- コース名 -->
                    <dt class="charge-list__menu"><?php echo esc_html($experience_title); ?></dt>
                    <!-- 料金 -->
                    <dd class="charge-list__price">¥<?php echo number_format(esc_html($experience_charge)); ?></dd>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </dl>
          </div>
          <!-- ファンダイビング -->
          <div class="charge-list__wrap">
            <h3 class="charge-list__title">ファンダイビング</h3>
            <dl class="charge-list__items">
              <?php
              $fun_items = SCF::get('price_fun', $page_price->ID);
              foreach ($fun_items as $fun_item => $field_value) :
                $fun_title = $field_value['price_fun-title'];
                $fun_charge = $field_value['price_fun-charge'];
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <?php if ($fun_title && $fun_charge) : ?>
                    <!-- コース名 -->
                    <dt class="charge-list__menu"><?php echo esc_html($fun_title); ?></dt>
                    <!-- 料金 -->
                    <dd class="charge-list__price">¥<?php echo number_format(esc_html($fun_charge)); ?></dd>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </dl>
          </div>
          <!-- スペシャルダイビング -->
          <div class="charge-list__wrap">
            <h3 class="charge-list__title">スペシャルダイビング</h3>
            <dl class="charge-list__items">
              <?php
              $special_items = SCF::get('price_special', $page_price->ID);
              foreach ($special_items as $special_item => $field_value) :
                $special_title = $field_value['price_special-title'];
                $special_charge = $field_value['price_special-charge'];
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <?php if ($special_title && $special_charge) : ?>
                    <!-- コース名 -->
                    <dt class="charge-list__menu"><?php echo esc_html($special_title); ?></dt>
                    <!-- 料金 -->
                    <dd class="charge-list__price">¥<?php echo number_format(esc_html($special_charge)); ?></dd>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </dl>

          </div>
        </div>
      </div>
    </div>

    <!-- ボタン -->
    <div class="price__btn">
      <a href="<?php echo esc_url(home_url('/price/')); ?>" class="btn"><span>View more</span></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
