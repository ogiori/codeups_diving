<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- カテゴリーリスト -->
<?php get_template_part('template/category_taxonomy'); ?>

<!-- カードリスト -->
<div class="archive-campaign-space archive-campaign">
  <div class="archive-campaign__inner inner">
    <ul class="cards1">
      <!-- ループ -->
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post(); ?>

          <li class="cards1__item">
            <div class="card1">
              <figure class="card1__img card1__img--campaign">

                <?php if (has_post_thumbnail()) : ?>
                  <!-- アイキャッチ画像指定されている場合 -->
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                <?php endif; ?>

              </figure>
              <div class="card1__body-top card1__body-top--campaign">
                <!-- カテゴリー -->
                <p class="card1__tag">
                  <?php $term = get_the_terms($post->ID, 'campaign_category');
                  echo $term[0]->name; ?></p>
                <!-- タイトル -->
                <h3 class="card1__title card1__title--archive"><?php the_title(); ?></h3>
              </div>
              <div class="card1__body-bottom card1__body-bottom--archive">
                <p class="card1__text">全部コミコミ(お一人様)</p>
                <div class="card1__wrap card1__wrap--campaign">
                  <p class="card1__price1 card1__price1--archive"><span>¥<?php echo number_format(get_field('charge_before')); ?></span></p>
                  <p class="card1__price2">¥<?php echo number_format(get_field('charge_after')); ?></p>
                </div>
              </div>
              <div class="card1__archive_contents">
                <!-- コンテンツ -->
                <div class="card1__archive-text">
                  <?php the_content(); ?>
                </div>
                <div class="card1__cta">
                  <p class="card1__period"><?php the_field('campaign_year'); ?>/<?php the_field('month-start'); ?>/<?php the_field('day-start'); ?>-<?php the_field('month-end'); ?>/<?php the_field('day-end'); ?></p>
                  <p class="card1__cta-text">ご予約・お問い合わせはコチラ</p>
                  <div class="card1__btn">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn"><span>Contact us</span></a>
                  </div>
                </div>
              </div>
            </div>
          </li>

      <?php endwhile;
      endif; ?>

    </ul>
  </div>
</div>

<!-- ページネーション -->
<div class="pagination-space pagination">
  <div class="inner">
    <?php get_template_part('template/pagination1'); ?>
  </div>
</div>


<?php get_footer(); ?>
