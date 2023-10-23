<?php get_header(); ?>

<!-- ぱんくず -->
<?php get_template_part('template/blackened'); ?>

<!-- コンテンツ -->
<section class="page-404">
  <div class="page-404__inner inner">
    <div class="page-404__wrap">
      <p class="page-404__number">404</p>
      <h2 class="page-404__text">申し訳ありません。<br>
        お探しのページが見つかりません。</h2>
      <div class="page-404__btn">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn--white"><span>Page TOP</span></a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
