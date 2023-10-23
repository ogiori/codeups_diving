<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- カテゴリーリスト -->
<?php get_template_part('template/category_taxonomy'); ?>


<!-- カード郡 -->
<section class="page-voice-space page-voice">
  <div class="page-voice__inner inner">
    <ul class="cards3">
      <!-- ループ -->
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>
          <li class="cards3__item">
            <div class="card3">
              <div class="card3__wrap1">
                <div class="card3__wrap2">
                  <div class="card3__wrap3">
                    <div class="card3__meta">
                      <p class="card3__age"><?php the_field('voice_age'); ?></p>
                      <p class="card3__gender">(<?php the_field('voice_genre'); ?>)</p>
                    </div>
                    <p class="card3__tag">
                      <?php $term = get_the_terms($post->ID, 'voice_category');
                      echo $term[0]->name; ?>
                    </p>
                  </div>
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
      endif; ?>
    </ul>
  </div>
</section>

<!-- ページネーション -->
<div class="pagination-space pagination">
  <div class="inner">
    <?php get_template_part('template/pagination1'); ?>
  </div>
</div>


<?php get_footer(); ?>
