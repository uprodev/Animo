<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="page-banner<?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="bg">
      <img src="<?= get_stylesheet_directory_uri() ?>/img/after-4.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="content d-flex flex-wrap justify-content-between align-items-center">
          <div class="left">
            
            <?= $title ?>
            <?= $text ?>

            <?php if ($button): ?>
              <div class="btn-wrap">
                <a href="<?= $button['url'] ?>" class="btn-default"<?php if($button['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($button['title']) ?></span></a>
              </div>
            <?php endif ?>

          </div>

          <?php if ($image): ?>
            <figure>
              <?= wp_get_attachment_image($image['ID'], 'full') ?>
            </figure>
          <?php endif ?>

        </div>
      </div>
    </div>

    <?php if ($scroll_button): ?>
      <div class="btn-block">
        <a href="<?= $scroll_button['url'] ?>" class="scroll d-flex align-items-center"<?php if($scroll_button['target']) echo ' target="_blank"' ?>><?= html_entity_decode($scroll_button['title']) ?> <img src="<?= get_stylesheet_directory_uri() ?>/img/icon-6.svg" alt=""></a>
      </div>
    <?php endif ?>

  </section>

  <?php endif; ?>