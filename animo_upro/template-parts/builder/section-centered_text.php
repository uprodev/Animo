<?php 
if($args['row']):
	foreach($args['row'] as $key=>$arg) $$key = $arg; ?>

  <section class="text-default<?php if($padding_top != 'Default') echo ' pt-' . $padding_top; if($padding_bottom != 'Default') echo ' pb-' . $padding_bottom; ?><?php if($background == 'White') echo ' bg-white' ?>"<?php if($id) echo ' id="' . $id . '"' ?><?php if($background == 'Color' && $background_color) echo ' style="background-color:' . $background_color . ';"' ?>>
    <div class="container">
      <div class="row">
        <div class="content col-lg-6 col-12">
          
          <?= $title ?>
          <?= $text ?>
          
        </div>
      </div>
    </div>
  </section>

  <?php endif; ?>