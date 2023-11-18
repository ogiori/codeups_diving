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
      <?php $price_license = SCF::get_option_meta('price', 'price_license'); ?>
      <?php foreach ($price_license as $license_item) :
       $license_title = $license_item['license_title'];
       $license_charge = $license_item['license_price'];
      ?>
       <!-- ループ -->
       <div class="card7__wrap">
        <?php if ($license_title && $license_charge) : ?>
         <!-- コース名 -->
         <dt><?php echo nl2br($license_title); ?></dt>
         <!-- 料金 -->
         <dd>¥<?php echo number_format($license_charge); ?></dd>
        <?php endif; ?>
       </div>
      <?php endforeach; ?>
     </dl>
    </div>
   </li>

   <!-- 体験ダイビング -->
   <?php $price_experience = SCF::get_option_meta('price', 'price_experience'); ?>
   <li class="cards7__item">
    <div class="card7">
     <h2 id="price-experience" class="card7__title">体験ダイビング</h2>
     <dl class="card7__list">
      <?php foreach ($price_experience as $experience_item) :
       $experience_title = $experience_item['experience_title'];
       $experience_charge = $experience_item['experience_price'];
      ?>
       <!-- ループ -->
       <div class="card7__wrap">
        <?php if ($experience_title && $experience_charge) : ?>
         <!-- コース名 -->
         <dt><?php echo nl2br($experience_title); ?></dt>
         <!-- 料金 -->
         <dd>¥<?php echo number_format($experience_charge); ?></dd>
        <?php endif; ?>
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
      <?php $price_fun = SCF::get_option_meta('price', 'price_fun'); ?>
      <?php foreach ($price_fun as $fun_item) :
       $fun_title = $fun_item['fun_title'];
       $fun_charge = $fun_item['fun_price'];
      ?>
       <!-- ループ -->
       <div class="card7__wrap">
        <?php if ($fun_title && $fun_charge) : ?>
         <!-- コース名 -->
         <dt><?php echo nl2br($fun_title); ?></dt>
         <!-- 料金 -->
         <dd>¥<?php echo number_format($fun_charge); ?></dd>
        <?php endif; ?>
       </div>
      <?php endforeach; ?>
     </dl>
    </div>
   </li>

   <!-- スペシャルダイビング -->
   <li class="cards7__item">
    <div class="card7">
     <h2 id="price-special" class="card7__title">スペシャルダイビング</h2>
     <dl class="card7__list">
      <?php $price_special = SCF::get_option_meta('price', 'price_special'); ?>
      <?php foreach ($price_special as $special_item) :
       $special_title = $special_item['special_title'];
       $special_charge = $special_item['special_price'];
      ?>
       <!-- ループ -->
       <div class="card7__wrap">
        <?php if ($special_title && $special_charge) : ?>
         <dt><?php echo nl2br($special_title); ?></dt>
         <dd>¥<?php echo number_format($special_charge); ?></dd>
        <?php endif; ?>
       </div>
      <?php endforeach; ?>
     </dl>
    </div>
   </li>

  </ul>
 </div>
</section>

<?php get_footer(); ?>
