<section id="<?php print $block_html_id; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if ($title): ?>
  	<div class="row">
		<div class="col-md-12">
			<div class="header-desc text-center " >
					<h2><?php print $title; ?></h2>
                    <div class="line"></div>
			</div>
		</div>
	</div>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <?php print $content ?>

</section> <!-- /.block -->