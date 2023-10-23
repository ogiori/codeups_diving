<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- 利用規約 -->
<section class="page-tos-space page-tos">
  <div class="page-tos__inner inner inner-icon">

    <h2 class="page-tos__title"><?php the_title(); ?></h2>
    <div class="page-tos__wrap">

      <?php get_template_part('template/sentence'); ?>

    </div>
  </div>
</section>


<?php get_footer(); ?>
