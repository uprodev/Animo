<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="block-404 align-items-center d-flex<?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>

    <?php if ($background_image): ?>
      <div class="bg">
        <?= wp_get_attachment_image($background_image['ID'], 'full', false, array('class' => 'img img-1')) ?>
      </div>
    <?php endif ?>
    
    <div class="container">
      <div class="row ">

        <div class="content text-center">

          <?php if ($label): ?>
            <h6 class="label"><?= $label ?></h6>
          <?php endif ?>

          <?php if ($title): ?>
            <h1><?= $title ?></h1>
          <?php endif ?>

          <?= $text ?>

          <?php if ($link): ?>
            <div class="btn-wrap d-flex justify-content-center">
              <a href="<?= $link['url'] ?>" class="btn-default"<?php if($link['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($link['title']) ?></span></a>
            </div>
          <?php endif ?>

        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>