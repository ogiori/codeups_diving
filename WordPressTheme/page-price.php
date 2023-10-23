<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<section class="page-price-list-space page-price-list">
  <div class="page-price-list__inner inner inner-icon">
    <ul class="cards7">
      <!-- ライセンス講習 -->
      <li class="cards7__item">
        <div class="card7">
          <h2 id="price-license" class="card7__title">ライセンス講習</h2>
          <dl class="card7__list">
            <!-- ループ -->
            <?php
            $free_item = SCF::get('price_license');
            foreach ($free_item as $fields) : ?>
              <div class="card7__wrap">
                <dt><?php echo $fields['price_license-title']; ?></dt>
                <dd>¥<?php echo number_format($fields['price_license-charge']); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </li>
      <!-- 体験ダイビング -->
      <li class="cards7__item">
        <div class="card7">
          <h2 id="price-experience" class="card7__title">体験ダイビング</h2>
          <dl class="card7__list">
            <!-- ループ -->
            <?php
            $free_item = SCF::get('price_experience');
            foreach ($free_item as $fields) : ?>
              <div class="card7__wrap">
                <dt><?php echo $fields['price_experience-title']; ?></dt>
                <dd>¥<?php echo number_format($fields['price_experience-charge']); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </li>
      <!-- ファンダイビング -->
      <li class="cards7__item">
        <div class="card7">
          <h2 id="price-fun" class="card7__title">ファンダイビング</h2>
          <dl class="card7__list">
            <!-- ループ -->
            <?php
            $free_item = SCF::get('price_fun');
            foreach ($free_item as $fields) : ?>
              <div class="card7__wrap">
                <dt><?php echo $fields['price_fun-title']; ?></dt>
                <dd>¥<?php echo number_format($fields['price_fun-charge']); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </li>
      <!-- スペシャルダイビング -->
      <li class="cards7__item">
        <div class="card7">
          <h2 class="card7__title">スペシャルダイビング</h2>
          <dl class="card7__list">
            <!-- ループ -->
            <?php
            $free_item = SCF::get('price_special');
            foreach ($free_item as $fields) : ?>
              <div class="card7__wrap">
                <dt><?php echo $fields['price_special-title']; ?></dt>
                <dd>¥<?php echo number_format($fields['price_special-charge']); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
      </li>
    </ul>
  </div>
</section>

<?php get_footer(); ?>
