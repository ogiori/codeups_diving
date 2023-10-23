<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- プライバシーポリシー -->
<section class="page-privacy-space page-privacy">
  <div class="page-privacy__inner inner inner-icon">

    <h2 class="page-privacy__title"><?php the_title(); ?></h2>
    
    <div class="page-privacy__wrap">
      <?php get_template_part('template/sentence'); ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
