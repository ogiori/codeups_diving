<aside class="sidebar">
  <!-- 人気記事 -->
  <div class="sidebar__title">
    <h2 class="sidebar-title">人気記事</h2>
  </div>
  <div class="sidebar__popularity">
    <?php
    $popular_args = array(
      'post_type'       => 'post',              // 投稿タイプを指定
      'meta_key'        => 'post_views_count',  // 閲覧数を指定
      'orderby'         => 'meta_value_num',    // ソートの基準を閲覧数に
      'order'           => 'DESC',              // 降順（閲覧数が多い順）でソート
      'post_status'     => 'publish',           // 投稿ステータスは公開済み
      'posts_per_page'  => 3,                   // 投稿表示件数は5件
    );
    $popular_query = new WP_Query($popular_args);
    if ($popular_query->have_posts()) :
    ?>
      <ul class="cards5">
        <!-- ループ -->
        <?php while ($popular_query->have_posts()) : $popular_query->the_post(); ?>
          <li class="cards5__item">
            <a href="<?php the_permalink(); ?>" class="card5">
              <figure class="card5__img">
                <?php if (has_post_thumbnail()) : ?>

                  <!-- アイキャッチ画像指定されている場合 -->
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                <?php endif; ?>
              </figure>

              <div class="card5__wrap">

                <!-- 時間 -->
                <time datetime="<?php the_time('c'); ?>" class="card5__time">
                  <?php the_time('Y.m.d'); ?>
                </time>

                <!-- タイトル -->
                <?php if (get_the_title()) : ?>
                  <h3 class="card5__title"><?php the_title(); ?></h3>
                <?php endif; ?>

              </div>
            </a>
          </li>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </ul>
    <?php else : ?>
      <p>現在、人気記事はありません</p>
    <?php endif; ?>
  </div>

  <!-- 口コミ -->
  <div class="sidebar__title">
    <h2 class="sidebar-title">口コミ</h2>
  </div>
  <div class="sidebar__evaluation">
    <div class="sidebar__evaluation-card">
      <?php
      $param = array(
        'posts_per_page' => '1', //表示件数。-1なら全件表示
        'post_type' => 'voice', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
        'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
        'orderby' => 'rand'
      );
      $the_query = new WP_Query($param);
      if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <!-- ループ -->
          <div class="card6">
            <figure class="card6__img">
              <?php if (has_post_thumbnail()) : ?>
                <!-- アイキャッチ画像指定されている場合 -->
                <?php the_post_thumbnail(); ?>
              <?php else : ?>
                <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
              <?php endif; ?>
            </figure>
            <div class="card6__meta">
              <!-- 年代 -->
              <?php if (get_field('voice_age')) : ?>
                <p class="card6__age"><?php the_field('voice_age'); ?></p>
              <?php endif; ?>

              <!-- ジャンル -->
              <?php if (get_field('voice_genre')) : ?>
                <p class="card6__gender">(<?php the_field('voice_genre'); ?>)</p>
              <?php endif; ?>
            </div>

            <!-- タイトル -->
            <?php if (get_the_title()) : ?>
              <h3 class="card6__title"><?php the_title(); ?></h3>
            <?php endif; ?>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      <?php else : ?>
        <!-- 投稿が無い場合の処理 -->
        <p>投稿がありません。</p>
      <?php endif; ?>
    </div>
  </div>
  <!-- ボタン -->
  <div class="sidebar__evaluation-btn">
    <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="btn"><span>View more</span></a>
  </div>

  <!-- キャンペーン -->
  <div class="sidebar__title">
    <h2 class="sidebar-title">キャンペーン</h2>
  </div>
  <div class="sidebar__campaign">

    <?php
    $param = array(
      'posts_per_page' => '2', //表示件数。-1なら全件表示
      'post_type' => 'campaign', //カスタム投稿タイプの名称を入れる←ここ変える(投稿だったらpost.カスタム投稿ならslug名)
      'post_status' => 'publish', //取得するステータス。publishなら一般公開のもののみ
      'orderby' => 'rand'
    );
    $the_query = new WP_Query($param);
    if ($the_query->have_posts()) : ?>
      <ul class="sidebar__campaign-cards">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
          <!-- ループ -->
          <li class="sidebar__campaign-card">
            <div class="card1">
              <figure class="card1__img card1__img--sidebar">
                <?php if (has_post_thumbnail()) : ?>
                  <!-- アイキャッチ画像指定されている場合 -->
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                <?php endif; ?>
              </figure>
              <div class="card1__body-top card1__body-top--sidebar">
                <!-- タイトル -->
                <?php if (get_the_title()) : ?>
                  <h3 class="card1__title card1__title--sidebar"><?php echo wp_trim_words(get_the_title(), 12, '...'); ?></h3>
                <?php endif; ?>
              </div>

              <?php
              $campaign_price = get_field('campaign_price');
              $price_text = $campaign_price['campaign_price_text'];
              $price_before = $campaign_price['campaign_price_before'];
              $price_after = $campaign_price['campaign_price_after'];
              ?>

              <div class="card1__body-bottom card1__body-bottom--sidebar">

                <!-- 値段上テキスト -->
                <?php if ($price_after && $campaign_price) : ?>
                  <p class="card1__text card1__text--sidebar"><?php echo $price_text; ?></p>
                <?php endif; ?>

                <div class="card1__wrap">

                  <!-- 割引前価格 -->
                  <?php if ($price_before && $price_after) : ?>
                    <p class="card1__price1 card1__price1--sidebar"><span>¥<?php echo number_format($price_before); ?></span></p>
                  <?php endif; ?>

                  <!-- 割引後価格 -->
                  <?php if ($price_after) : ?>
                    <p class="card1__price2 card1__price2--sidebar">¥<?php echo number_format($price_after); ?></p>
                  <?php endif; ?>
                </div>
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
  <div class="sidebar__campaign-btn">
    <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="btn"><span>View more</span></a>
  </div>

  <!-- アーカイブ -->
  <div class="sidebar__title">
    <h2 class="sidebar-title">アーカイブ</h2>
  </div>
  <!-- アコーディオン -->
  <div class="sidebar__archive">
    <dl class="accordion js-accordion">
      <?php
      $years = $wpdb->get_results("SELECT DISTINCT YEAR(post_date) AS year FROM $wpdb->posts WHERE post_status = 'publish' AND post_date <= NOW() AND post_type = 'post' ORDER BY year DESC");

      foreach ($years as $year) :
        $year_number = $year->year; ?>
        <div class="accordion__item js-accordion-trigger">
          <dt class="accordion__title"><?php echo $year_number; ?></dt>
          <dd class="accordion__contents js-accordion-contents">
            <?php $months = $wpdb->get_results("SELECT DISTINCT MONTH(post_date) AS month,YEAR(post_date) AS year,COUNT(id) as post_count FROM $wpdb->posts WHERE post_status = 'publish' AND post_date <= NOW() AND post_type = 'post' AND YEAR(post_date) = $year_number GROUP BY month, year ORDER BY post_date DESC");
            foreach ($months as $month) :
              $month_number = date("m", mktime(0, 0, 0, $month->month, 1, $year_number)); ?>

              <div class="accordion__content">
                <a href="<?php echo esc_url(get_year_link($month->year)); ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
                  <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
                </a>
              </div>

            <?php endforeach; ?>
          </dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</aside>
