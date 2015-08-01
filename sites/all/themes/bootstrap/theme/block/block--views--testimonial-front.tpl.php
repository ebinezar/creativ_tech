<section id="reference">
  <div class="container">
    <section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <div class="row">
          <div class="col-md-12">
            <div class="header-desc text-center">
              <div class="header-content">
                <h3 class="big-title"><?php print $title; ?></h3>
                <span>how dedicated i am</span>
              </div>
            </div>
          </div>
        </div>
      <?php endif;?>
      <?php print render($title_suffix); ?>

      <?php print $content ?>

    </section> <!-- /.block -->
  </div>
</section>