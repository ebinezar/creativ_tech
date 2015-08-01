<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 *
 * If a preview is enabled, these keys will be available on the preview page:
 * - $form['preview_message']: The preview message renderable.
 * - $form['preview']: A renderable representing the entire submission preview.
 */
?>
<?php

  $form['#node']->content['webform']['#form']['actions']['submit']['#attributes']['class'] = array();
  $form['actions']['submit']['#attributes']['class'] = array('btn-default');

  print drupal_render($form['submitted']);
?>
<div class="modal-footer">
  <button type="button" class="btn btn-default modal-close" data-dismiss="modal">Close</button>
  <?php print drupal_render($form['actions']); ?>
</div>
<?php

  print drupal_render($form['form_build_id']);
  print drupal_render($form['form_token']);
  print drupal_render($form['form_id']);
  print drupal_render($form['orig_category']);
  print drupal_render_children($form);
?>
