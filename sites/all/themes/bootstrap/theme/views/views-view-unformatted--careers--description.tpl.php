<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="container padt40">
    <div class="row">
		<div class="col-md-12">
			<?php foreach ($rows as $id => $row): ?>
			  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
			    <?php print $row; ?>
			  </div>
			<?php endforeach; ?>
		</div>
	</div>
</div>