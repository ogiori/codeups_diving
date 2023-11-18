<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- フォーム -->
<section class="page-contact-form-space page-contact-form">
 <div class="page-contact-form_inner inner inner-icon">
  <?php echo do_shortcode('[contact-form-7 id="5bf6b33" title="お問い合わせフォーム"]') ?>
 </div>
</section>


<?php get_footer(); ?>
