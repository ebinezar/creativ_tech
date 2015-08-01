<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<div class="row">
	<div class="col-md-12">
		<div class="careers txt-center">
			<?php foreach ($rows as $id => $row): ?>
			  <div<?php if ($classes_array[$id]) { print ' class="job shadow ' . $classes_array[$id] .'"';  } ?>>
			    <?php print $row; ?>
			  </div>
			<?php endforeach; ?>
		</div>
	</div>
</div>