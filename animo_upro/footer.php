</main>

<footer<?php if(($field = get_field('footer_background_color')) && get_field('footer_background') == 'Color') echo ' style="background-color: ' . $field . ';"' ?>>

  <?php if ($field = get_field('background_f', 'option')): ?>
    <div class="bg">
      <?= wp_get_attachment_image($field['ID'], 'full') ?>
    </div>
  <?php endif ?>

  <div class="container">
    <div class="row">
      <div class="footer-form-wrap d-flex flex-wrap ">
        <div class="text">

          <?php if ($field = get_field('title_ff', 'option')): ?>
            <h2><?= $field ?></h2>
          <?php endif ?>

          <div class="user d-flex">

            <?php if ($field = get_field('image_ff', 'option')): ?>
              <figure>
                <?= wp_get_attachment_image($field['ID'], 'full') ?>
              </figure>
            <?php endif ?>

            <?php if ($field = get_field('text_ff', 'option')): ?>
              <div class="text-user">
                <?= $field ?>
              </div>
            <?php endif ?>

          </div>
        </div>

        <?php if ($field = get_field('form_ff', 'option')): ?>
          <?= do_shortcode('[contact-form-7 id="' . $field . '" html_class="footer-form"]') ?>
        <?php endif ?>

      </div>
      <div class="footer-content d-flex flex-wrap">
        <div class="item item-1">

          <?php if ($field = get_field('name_f', 'option')): ?>
            <div class="logo-wrap"><?= $field ?></div>
          <?php endif ?>

          <?php if ($field = get_field('text_f', 'option')): ?>
            <div class="info">
              <?= $field ?>
            </div>
          <?php endif ?>

          <div class="contact-wrap">

            <?php if ($field = get_field('phone_c', 'option')): ?>
              <p><span>T.</span><a href="tel:+<?= preg_replace('/[^0-9]/', '', $field) ?>"><?= $field ?></a></p>
            <?php endif ?>

            <?php if ($field = get_field('email_c', 'option')): ?>
              <p><span>M.</span><a href="mailto:<?= $field ?>"><?= $field ?></a></p>
            <?php endif ?>

          </div>

          <?php if ($field = get_field('address_c', 'option')): ?>
            <div class="address">
              <?= $field ?>
            </div>
          <?php endif ?>

        </div>

        <?php if (($field = get_field('business_details_f', 'option')) && is_array($field['items']) && checkArrayForValues($field['items'])): ?>
        <div class="item item-2">

          <?php if ($field['title']): ?>
            <h6><?= $field['title'] ?></h6>
          <?php endif ?>
          
          <ul class="info-list">

            <?php foreach ($field['items'] as $item): ?>
              <li>

                <?php if ($item['title']): ?>
                  <p><?= $item['title'] ?></p>
                <?php endif ?>

                <?php if ($item['text']): ?>
                  <p><?= $item['text'] ?></p>
                <?php endif ?>

              </li>
            <?php endforeach ?>
            
          </ul>
        </div>
      <?php endif ?>

      <?php if (($field = get_field('menu_links_f', 'option')) && is_array($field['items']) && checkArrayForValues($field['items'])): ?>
      <div class="item item-3">

        <?php if ($field['title']): ?>
          <h6><?= $field['title'] ?></h6>
        <?php endif ?>

        <ul class="list-links">

          <?php foreach ($field['items'] as $item): ?>
            <?php if ($item['link']): ?>
              <li>
                <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>>
                  <img src="<?= get_stylesheet_directory_uri() ?>/img/arrow_right_gold.svg" alt="">
                  <?= html_entity_decode($item['link']['title']) ?>
                </a>
              </li>
            <?php endif ?>
          <?php endforeach ?>

        </ul>
      </div>
    <?php endif ?>

  </div>

  <?php if (($items = get_field('bottom_f', 'option')) && is_array($field) && checkArrayForValues($field)): ?>
  <div class="footer-bottom">
    <ul class="d-flex flex-wrap justify-content-center">

      <?php foreach ($items as $item): ?>
        <li>
          <?= $item['text'] ?>

          <?php if ($item['link']): ?>
            <a href="<?= $item['link']['url'] ?>"<?php if($item['link']['target']) echo ' target="_blank"' ?>><?= html_entity_decode($item['link']['title']) ?></a>
          <?php endif ?>

        </li>
      <?php endforeach ?>
      
    </ul>
  </div>
<?php endif ?>

</div>
</div>
</footer>

<?php wp_footer() ?>
</body>
</html>