<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- プライバシーポリシー -->
<section class="page-privacy-space page-privacy">
 <div class="page-privacy__inner inner inner-icon">
  <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
    <!-- タイトル -->
    <?php if (get_the_title()) : ?>
     <h2 class="page-privacy__title"><?php the_title(); ?></h2>
    <?php endif; ?>
    <div class="page-privacy__wrap">
     <!-- コンテンツ -->
     <?php if (get_the_content()) : ?>
      <div class="sentence">
       <?php the_content(); ?>
      </div>
     <?php endif; ?>
    </div>
   <?php endwhile; ?>
  <?php else : ?>
   <!-- 投稿が無い場合の処理 -->
   <p class="no-posts">投稿はありません。</p>
  <?php endif; ?>
 </div>
</section>

<?php get_footer(); ?>
