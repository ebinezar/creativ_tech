<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="row portfolio" >
	<div class="portfolio-items" >
		<?php foreach ($rows as $id => $row): ?>
		    <?php print $row; ?>
		<?php endforeach; ?>
	</div>
</div>

<?php if(isset($_SESSION['portfolio-contact-success']) && $_SESSION['portfolio-contact-success'] === TRUE): ?>
	<?php drupal_add_js("jQuery(document).ready(function(){
		jQuery('a[data-toggle=modal]').click(function(){
			window.open(jQuery(this).attr('data-previewlink'), '_blank');
		});
	});" ,'inline');?>
<?php else:
	$block = module_invoke('webform', 'block_view', 'client-block-44') ?>
	<div class="modal fade" id="portfolio-modal" tabindex="-1" role="dialog" aria-labelledby="portfolio_contact">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Please file the details</h4>
				</div>
				<div class="modal-body contact-desc">
				<?php print render($block['content']); ?>
				</div>
			</div>
		</div>
	</div>
	<?php drupal_add_js("jQuery(document).ready(function(){
		jQuery('#portfolio-modal').on('shown.bs.modal', function (event) {
	  		var target = jQuery(event.relatedTarget);
			var link = target.data('previewlink');
			var modal = jQuery(this);
			modal.find('.modal-footer').append('<input type=\'hidden\' name=\'previewlink\' value='+link+'>');
		});
	});" ,'inline');?>
<?php endif; ?>

<?php if(!empty($_SESSION['portfolio-contact-link'])): ?>
	<?php drupal_add_js(array('bootstrap' => array('link' => $_SESSION['portfolio-contact-link'])), array('type' => 'setting')); ?>
	<?php drupal_add_js("jQuery(document).ready(function(){
		  window.open(Drupal.settings.bootstrap.link, '_blank');
	});" ,'inline'); ?>
	<?php $_SESSION['portfolio-contact-link'] = ''; ?>
<?php endif; ?>