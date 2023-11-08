<?php get_header(); ?>

<!-- トップ画像 -->
<?php get_template_part('template/page-head'); ?>

<!-- ぱんくず -->
<?php get_template_part('template/breadcrumb'); ?>

<!-- アコーディオン -->
<section class="page-faq-accordion-space page-faq-accordion">
  <div class="page-faq-accordion__inner inner inner-icon">
    <?php $faqs = SCF::get_option_meta('faq', 'faq-list');
    if ($faqs) : ?>
      <dl class="faq-accordion js-faq-accordion">
        <?php
        foreach ($faqs as $faq) : ?>
          <div class="faq-accordion__item js-faq-accordion-trigger">
            <dt class="faq-accordion__title"><?php echo $faq['faq_question']; ?></dt>
            <dd class="faq-accordion__contents js-faq-accordion-contents">
              <?php echo nl2br($faq['faq_answer']); ?>
            </dd>
          </div>
        <?php endforeach; ?>
      </dl>
    <?php else : ?>
      <!-- 質問がないとき -->
      <p class="no-posts">質問はありません</p>
    <?php endif; ?>
  </div>
</section>
<?php get_footer(); ?>
