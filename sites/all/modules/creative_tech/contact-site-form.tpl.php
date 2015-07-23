<?php

$form['name']['#attributes']['placeholder'] = t('Name');
$form['name']['#attributes']['required'] = 'required';
$form['mail']['#attributes']['placeholder'] = t('Email');
$form['subject']['#attributes']['placeholder'] = t('Subject');
$form['subject']['#attributes']['required'] = 'required'; 
$form['message']['#attributes']['placeholder'] = t('Message');
$form['message']['#attributes']['required'] = 'required'; 
$form['actions']['submit']['#attributes']['class'][] = 'btn-contact';
$form['name']['#title'] = '';
$form['mail']['#title'] = '';
$form['subject']['#title'] = '';
$form['message']['#title'] = '';
?>

<div class="contact-desc">
	<?php print drupal_render($form['contact_information']); ?>
	<div class="row">
		<div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s">
			<?php print drupal_render($form['name']); ?>
		</div>
		<div class="col-md-4 wow fadeInDown" data-wow-delay=".5s">
			<?php print drupal_render($form['mail']); ?>
		</div>
		<div class="col-md-4 wow fadeInRight" data-wow-delay=".8s">
			<?php print drupal_render($form['subject']); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 wow fadeInUp" data-wow-delay="1.1s">
			<?php print drupal_render($form['message']); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 wow fadeInUp m20" data-wow-delay="1.3s">
			<?php print drupal_render($form['actions']); ?>
		</div>
	</div>

    <?php print drupal_render($form['form_build_id']); ?>
    <?php print drupal_render($form['form_token']); ?>
    <?php print drupal_render($form['form_id']); ?>
    <?php print drupal_render($form['orig_category']); ?>
<?php
	
/*echo '<pre>';print_r($form);die;*/
?>

</div>
