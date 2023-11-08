<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- カテゴリーリスト -->
<?php get_template_part('template/category_archive'); ?>

<!-- カード郡 -->
<section class="page-voice-space page-voice">
  <div class="page-voice__inner inner">
    <?php if (have_posts()) : ?>
      <ul class="cards3">
        <?php while (have_posts()) : the_post(); ?>
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
                  <?php if (get_the_title()) : ?>
                    <h3 class="card3__title"><?php the_title(); ?></h3>
                  <?php endif; ?>
                </div>

                <!-- 写真 -->
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

              <!-- テキスト -->
              <?php if (the_field('voice_text')) : ?>
                <div class="card3__text">
                  <?php the_field('voice_text'); ?>
                </div>
              <?php endif; ?>
            </div>
          </li>

        <?php endwhile; ?>
      </ul>
    <?php else : ?>
      <!-- 投稿が無い場合の処理 -->
      <p>投稿はありません。</p>
    <?php endif; ?>
  </div>
</section>

<!-- ページネーション -->
<div class="pagination-space pagination">
  <div class="inner">
    <?php get_template_part('template/pagination1'); ?>
  </div>
</div>


<?php get_footer(); ?>
