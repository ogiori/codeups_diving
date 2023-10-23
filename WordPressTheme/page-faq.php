<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- アコーディオン -->
<section class="page-faq-accordion-space page-faq-accordion">
  <div class="page-faq-accordion__inner inner inner-icon">
    <dl class="faq-accordion js-faq-accordion">

      <?php
      $free_item = SCF::get('faq-list');
      foreach ($free_item as $fields) :
      ?>

        <div class="faq-accordion__item js-faq-accordion-trigger">
          <dt class="faq-accordion__title"><?php echo $fields['faq_question']; ?></dt>
          <dd class="faq-accordion__contents js-faq-accordion-contents">
            <?php echo nl2br($fields['faq_answer']); ?>
          </dd>
        </div>

      <?php endforeach; ?>

    </dl>
  </div>
</section>
<?php get_footer(); ?>
