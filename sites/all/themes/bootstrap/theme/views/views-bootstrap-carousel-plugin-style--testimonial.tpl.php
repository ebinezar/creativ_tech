<div class="row">
  <div id="views-bootstrap-carousel-<?php print $id ?>" class="<?php print $classes ?> testimonial-carousel" <?php print $attributes ?>>
    <?php if ($indicators): ?>
      <!-- Carousel indicators -->
      <ol class="carousel-indicators visible-lg visible-md">
        <?php foreach ($rows as $key => $value): ?>
          <li data-target="#views-bootstrap-carousel-<?php print $id ?>" data-slide-to="<?php print $key ?>" class="<?php if ($key === 0) print 'active' ?>"></li>
        <?php endforeach ?>
      </ol>
    <?php endif ?>

    <!-- Carousel items -->
    <div class="carousel-inner padb40">
      <?php foreach ($rows as $key => $row): ?>
        <div class="item <?php if ($key === 0) print 'active' ?> text-center">
          <?php print $row ?>
        </div>
      <?php endforeach ?>
    </div>

    <?php if ($navigation): ?>
      <!-- Carousel navigation -->
      <a class="carousel-control left" href="#views-bootstrap-carousel-<?php print $id ?>" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="carousel-control right" href="#views-bootstrap-carousel-<?php print $id ?>" data-slide="next">
        <span class="icon-next"></span>
      </a>
    <?php endif ?>
  </div>
</div>