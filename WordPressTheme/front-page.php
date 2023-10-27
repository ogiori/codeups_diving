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

        <?php for ($i = 1; $i <= 4; $i++) : ?>
          <?php
          $field_name_pc = 'slider_pc' . $i;
          $field_name_sp = 'slider_sp' . $i;

          // PC用とSP用の画像を取得
          $image_pc = get_field($field_name_pc);
          $image_sp = get_field($field_name_sp);

          if (!empty($image_pc) && !empty($image_sp)) {
            $url_pc = $image_pc['url'];
            $url_sp = $image_sp['url'];
            $alt = $image_pc['alt'];
          }
          ?>

          <!-- スワイパーの写真 -->
          <figure class="swiper-slide mv-swiper__slide">
            <picture class="mv-swiper__img">
              <source srcset="<?php echo $url_pc; ?>" media="(min-width: 768px)" />
              <img src="<?php echo $url_sp; ?>" alt="<?php echo $alt; ?>" />
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
            $wp_query = new WP_Query();
            $param = array(
              'posts_per_page' => '-1', //表示件数。-1なら全件表示
              'post_type' => 'campaign', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
              'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
              'order' => 'DESC'
            );
            $wp_query->query($param);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
            ?>

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
                      <p class="card1__tag">
                        <?php $term = get_the_terms($post->ID, 'campaign_category');
                        if ($term) : ?>
                          <?php echo $term[0]->name; ?>
                      </p>
                    <?php endif; ?>
                    <!-- タイトル -->
                    <h3 class="card1__title"><?php the_title(); ?></h3>
                    </div>
                    <div class="card1__body-bottom">
                      <p class="card1__text">全部コミコミ(お一人様)</p>
                      <div class="card1__wrap">
                        <p class="card1__price1"><span>¥<?php echo number_format(get_field('charge_before')); ?></span></p>
                        <p class="card1__price2">¥<?php echo number_format(get_field('charge_after')); ?></p>
                      </div>
                    </div>
                  </div>
                </div>

            <?php
              endwhile;
            endif;
            wp_reset_postdata(); ?>

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
          <p class="about__text2">
            <?php echo nl2br(esc_html($about_text)); ?>
          </p>

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
      <ul class="cards2">

        <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '3', //表示件数。-1なら全件表示
          'post_type' => 'post', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'order' => 'DESC'
        );
        $wp_query->query($param);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

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
                <h3 class="card2__title"><?php the_title(); ?></h3>
                <div class="card2__text">
                  <?php echo wp_trim_words(get_the_excerpt(), 85, ''); ?>
                </div>
              </a>
            </li>

        <?php
          endwhile;
        endif;
        wp_reset_postdata(); ?>
      </ul>
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
      <ul class="cards3">

        <?php
        $wp_query = new WP_Query();
        $param = array(
          'posts_per_page' => '2', //表示件数。-1なら全件表示
          'post_type' => 'voice', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
          'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
          'order' => 'DESC'
        );
        $wp_query->query($param);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>
            <li class="cards3__item">
              <div class="card3">
                <div class="card3__wrap1">
                  <div class="card3__wrap2">
                    <div class="card3__wrap3">
                      <div class="card3__meta">
                        <p class="card3__age"><?php the_field('voice_age'); ?></p>
                        <p class="card3__gender">(<?php the_field('voice_genre'); ?>)</p>
                      </div>
                      <!-- カテゴリー -->
                      <?php $term = get_the_terms($post->ID, 'voice_category');
                      if ($term) : ?>
                        <p class="card3__tag">
                          <?php echo $term[0]->name; ?>
                        </p>
                      <?php endif; ?>
                    </div>
                    <!-- タイトル -->
                    <h3 class="card3__title"><?php the_title(); ?></h3>
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
                  <?php the_field('voice_text'); ?>
                </div>
              </div>
            </li>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        wp_reset_query(); ?>
      </ul>
    </div>
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
              $page_price = get_page_by_path('price');
              $license_items = SCF::get('price_license', $page_price->ID);
              foreach ($license_items as $license_item => $field_value) :
              ?>

                <!-- ループ -->
                <div class="charge-list__item">
                  <dt class="charge-list__menu"><?php echo esc_html($field_value['price_license-title']); ?></dt>
                  <dd class="charge-list__price">¥<?php echo number_format(esc_html($field_value['price_license-charge'])); ?></dd>
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
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <dt class="charge-list__menu"><?php echo esc_html($field_value['price_experience-title']); ?></dt>
                  <dd class="charge-list__price">¥<?php echo number_format(esc_html($field_value['price_experience-charge'])); ?></dd>
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
              ?>
                <!-- ループ -->
                <div class="charge-list__item">
                  <dt class="charge-list__menu"><?php echo esc_html($field_value['price_fun-title']); ?></dt>
                  <dd class="charge-list__price">¥<?php echo number_format(esc_html($field_value['price_fun-charge'])); ?></dd>
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
              ?>

                <!-- ループ -->
                <div class="charge-list__item">
                  <dt class="charge-list__menu"><?php echo esc_html($field_value['price_special-title']); ?></dt>
                  <dd class="charge-list__price">¥<?php echo number_format(esc_html($field_value['price_special-charge'])); ?></dd>
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
