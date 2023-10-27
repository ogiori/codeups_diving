<div class="breadcrumbs-space <?php if (is_404()) {
                                echo 'breadcrumbs-space--404';
                              } ?>">
  <div class="inner">
    <div class="breadcrumbs <?php if (is_404()) {
                              echo 'breadcrumbs--404';
                            } ?>">

      <?php
      if (function_exists('bcn_display')) {
        bcn_display();
      }; ?>

    </div>
  </div>
</div>
