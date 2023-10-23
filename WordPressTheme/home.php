<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- コンテンツ -->
<section class="page-blog-space page-blog">
  <div class="page-blog__inner inner inner-icon">

    <div class="page-blog__wrap">
      <!--===== 左 =====-->
      <div class="page-blog__left">
        <!-- カード群 -->
        <ul class="cards2 cards2--2columns">
          <!-- ループ -->
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <!-- 投稿内容 -->
              <li class="cards2__item">
                <a href="<?php the_permalink(); ?>" class="card2 card2--hover">
                  <figure class="card2__img">
                    <?php if (has_post_thumbnail()) : ?>
                      <!-- アイキャッチ画像指定されている場合 -->
                      <?php the_post_thumbnail(); ?>
                    <?php else : ?>
                      <!-- アイキャッチ画像指定されていない場合に代替画像を表示 -->
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no_image.jpg;" alt="画像がありません">
                    <?php endif; ?>
                  </figure>
                  <!-- 日付 -->
                  <time datetime="<?php the_time('c'); ?>" class="card2__time">
                    <?php the_time('Y.m.d'); ?>
                  </time>
                  <!-- タイトル -->
                  <h3 class="card2__title"><?php the_title(); ?></h3>
                  <!-- コンテンツ -->
                  <p class="card2__text">
                    <?php echo wp_trim_words(get_the_excerpt(), 85, ''); ?>
                  </p>
                </a>
              </li>
          <?php endwhile;
          endif; ?>
        </ul>

        <!-- ページネーション -->
        <div class="page-blog__pagination">
          <?php get_template_part('template/pagination1'); ?>
        </div>

      </div>

      <!--===== 右 =====-->
      <div class="page-blog__right">
        <!-- サイドバー -->
        <?php get_template_part('template/sidebar'); ?>
      </div>
    </div>

  </div>
</section>



<?php get_footer(); ?>
