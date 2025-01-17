<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="text-img<?php if($padding_top != 'Default') echo ' pt-' . $padding_top; if($padding_bottom != 'Default') echo ' pb-' . $padding_bottom; ?><?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="container">
      <div class="row">
        <div class="item d-flex justify-content-between flex-wrap align-items-center<?php if($image_position == 'Right') echo ' item-revers' ?>">

          <?php if ($image): ?>
            <figure class="col-12 col-lg-6">
              <?= wp_get_attachment_image($image['ID'], 'full') ?>
            </figure>
          <?php endif ?>

          <div class="text col-12 col-lg-6">
            <?= $title ?>
            <?= $text ?>

            <?php if ($button): ?>
              <div class="btn-wrap">
                <a href="<?= $button['url'] ?>" class="btn-default"<?php if($button['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($button['title']) ?></span></a>
              </div>
            <?php endif ?>

          </div>
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>