<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- カテゴリーリスト -->
<?php get_template_part('template/category_archive'); ?>

<!-- カードリスト -->
<div class="archive-campaign-space archive-campaign">
 <div class="archive-campaign__inner inner">
  <?php if (have_posts()) : ?>
   <ul class="cards1">
    <!-- ループ -->
    <?php while (have_posts()) : the_post(); ?>
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
        <?php $term = get_the_terms($post->ID, 'campaign_category');
        if ($term) : ?>
         <p class="card1__tag">
          <?php echo $term[0]->name; ?>
         </p>
        <?php endif; ?>

        <!-- タイトル -->
        <?php if (get_the_title()) : ?>
         <h3 class="card1__title card1__title--archive">
          <?php the_title();; ?>
         </h3>
        <?php endif; ?>

       </div>

       <div class="card1__body-bottom card1__body-bottom--archive">
        <?php
        $campaign_price = get_field('campaign_price');
        $price_text = $campaign_price['campaign_price_text'];
        $price_before = $campaign_price['campaign_price_before'];
        $price_after = $campaign_price['campaign_price_after'];
        ?>

        <!-- 値段上テキスト -->
        <?php if ($price_after && $campaign_price) : ?>
         <p class="card1__text"><?php echo $price_text; ?></p>
        <?php endif; ?>

        <div class="card1__wrap card1__wrap--campaign">

         <!-- 割引前価格 -->
         <?php if ($price_before && $price_after) : ?>
          <p class="card1__price1 card1__price1--archive"><span>¥<?php echo number_format($price_before); ?></span></p>
         <?php endif; ?>

         <!-- 割引後価格 -->
         <?php if ($price_after) : ?>
          <p class="card1__price2">¥<?php echo number_format($price_after); ?></p>
         <?php endif; ?>

        </div>
       </div>

       <div class="card1__archive_contents">

        <!-- コンテンツ -->
        <?php if (get_field('campaign_text')) : ?>
         <div class="card1__archive-text">
          <?php the_field('campaign_text'); ?>
         </div>
        <?php endif; ?>

        <?php
        $date = get_field('campaign_period');
        $period_start = $date['period_start']; //2023/06/01
        $period_end = $date['period_end']; //09/30
        ?>

        <div class="card1__cta">
         <!-- キャンペーン期間 -->
         <?php if ($period_start && $period_end) : ?>
          <p class="card1__period"><?php echo $period_start; ?>-<?php echo $period_end; ?></p>
         <?php endif; ?>
         <p class="card1__cta-text">ご予約・お問い合わせはコチラ</p>
         <!-- ボタン -->
         <div class="card1__btn">
          <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn"><span>Contact us</span></a>
         </div>
        </div>

       </div>
      </div>
     </li>
    <?php endwhile; ?>
   </ul>
  <?php else : ?>
   <!-- 投稿が無い場合の処理 -->
   <p class="no-posts">投稿はありません。</p>
  <?php endif; ?>
 </div>
</div>

<!-- ページネーション -->
<div class="pagination-space pagination">
 <div class="inner">
  <?php get_template_part('template/pagination1'); ?>
 </div>
</div>

<?php get_footer(); ?>
