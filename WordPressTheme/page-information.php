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
              泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
            </p>
          </div>
          <figure class="card4__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/information_img.jpg" alt="">
          </figure>
        </div>
      </li>
      <li id="fun" class="cards4__item js-cards4-item">
        <div class="card4">
          <div class="card4__wrap">
            <h2 class="card4__title">ファンダイビング</h2>
            <p class="card4__text">
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
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
              ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
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
