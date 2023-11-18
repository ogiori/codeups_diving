<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>


<!-- タブ -->
<div class="information-list-space information-list">
 <div class="information-list__inner inner inner-icon inner-icon--1">

  <ul class="information-tabs">
   <!-- ライセンス -->
   <li class="information-tabs__item">
    <p data-tab-id="license-content" class="information-tab information-tab--license js-information-tab">
     ライセンス<br class="u-mobile">講習
    </p>
   </li>
   <!-- ファン -->
   <li class="information-tabs__item">
    <p data-tab-id="fun-content" class="information-tab information-tab--fun js-information-tab">ファン<br class="u-mobile">ダイビング
    </p>
   </li>
   <!-- 体験 -->
   <li class="information-tabs__item">
    <p data-tab-id="experience-content" class="information-tab information-tab--experience js-information-tab">
     体験<br class="u-mobile">ダイビング</p>
   </li>
  </ul>

 </div>
</div>

<!-- コンテンツ -->
<section class="information-contents-space information-contents">
 <div class="information-contents__inner inner">
  <ul class="cards4">
   <li id="license" class="cards4__item js-cards4-item">
    <div class="card4">
     <div class="card4__wrap">
      <h2 class="card4__title">ライセンス講習</h2>
      <p class="card4__text">
       海の魅力を広げ、新たな冒険へ！ダイビングライセンス講習生を大募集中です。安全かつ楽しく学ぶなら当センターがおすすめ。初心者から経験者まで対象。プロのインストラクター陣が、水中の技術や安全対策を徹底的に指導します。未知の海で広がる驚きと感動を共に味わいましょう。週末や平日クラスも開催し、スケジュールに合わせて学べます。ライセンス取得後は、世界中の素晴らしい海を存分に楽しめます。限定特典もご用意しております。ダイビングの扉を開け、新しい自分を発見しませんか？ご興味がありましたら、お気軽にお問い合わせください。
      </p>
     </div>
     <figure class="card4__img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/archive-information_img.jpg" alt="">
     </figure>
    </div>
   </li>
   <li id="fun" class="cards4__item js-cards4-item">
    <div class="card4">
     <div class="card4__wrap">
      <h2 class="card4__title">ファンダイビング</h2>
      <p class="card4__text">
       冒険の旅が待っています！ファンダイビングに参加しませんか？経験者も初心者も歓迎。週末限定や平日開催のファンダイビングツアーで、海の美しさや豊かな海底生態系を満喫しましょう。プロのガイドが案内し、安全かつ楽しいダイビングを提供します。透明度の高い海で魚群と舞い、美しいサンゴ礁を探索。ダイビング仲間との交流も楽しい一瞬に。装備のレンタルも可能です。ファンダイビングは新たな発見と冒険を求める方々に最適。日常を忘れ、海の中での至福のひと時を体験しませんか？参加ご希望の方はお早めにご予約ください。
      </p>
     </div>
     <figure class="card4__img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery5.jpg" alt="">
     </figure>
    </div>
   </li>
   <li id="experience" class="cards4__item js-cards4-item">
    <div class="card4">
     <div class="card4__wrap">
      <h2 class="card4__title">体験ダイビング</h2>
      <p class="card4__text">
       海の世界への初めての一歩を踏み出しませんか？体験ダイビング募集中！経験者不問、初心者歓迎。クリアな海での心地よい浮遊感や美しい海底を楽しんでみましょう。プロのガイドが安全に導きます。装備の貸し出しもありますので、気軽に参加できます。週末や平日に開催し、あなたのスケジュールに合わせて体験ができます。仲間と一緒に笑顔で海に飛び込み、新しい冒険を始めませんか？感動の瞬間が待っています。体験ダイビングで、海の魅力を存分に味わってみませんか？お問い合わせやご予約はお気軽にどうぞ。
      </p>
     </div>
     <figure class="card4__img">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/gallery3.jpg" alt="">
     </figure>
    </div>
   </li>
  </ul>
 </div>
</section>


<?php get_footer(); ?>
