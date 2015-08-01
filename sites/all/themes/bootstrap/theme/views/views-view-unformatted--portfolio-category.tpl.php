<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<ul class="portfolio-filter text-center">
	<li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
	<?php foreach ($rows as $id => $row): ?>
	    <?php print $row; ?>
	<?php endforeach; ?>
</ul>