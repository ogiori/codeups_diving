<?php get_header(); ?>

<!-- 閲覧数カウント -->
<?php if (!is_user_logged_in() && !is_bot()) {
  setPostViews(get_the_ID());
} ?>

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

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>

            <!-- 時間 -->
            <time datetime="<?php the_time('c'); ?>" class="single-blog__time">
              <?php the_time('Y.m.d'); ?>
            </time>
            <!-- タイトル -->
            <h2 class="single-blog__title"><?php the_title(); ?></h2>
            <!-- コンテンツ -->
            <?php get_template_part('template/single-blog'); ?>

        <?php endwhile;
        endif; ?>

        <!-- ページネーション -->
        <div class="page-blog__pagination">
          <?php get_template_part('template/pagination2'); ?>
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
