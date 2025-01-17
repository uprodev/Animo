<?php get_header(); ?>

<section class="block-404 align-items-center d-flex bg-white">

	<?php if ($field = get_field('background_404', 'option')): ?>
		<div class="bg">
			<?= wp_get_attachment_image($field['ID'], 'full', false, array('class' => 'img img-1')) ?>
		</div>
	<?php endif ?>

	<div class="container">
		<div class="row ">

			<div class="content text-center">

				<?php if ($field = get_field('label_404', 'option')): ?>
					<h6 class="label"><?= $field ?></h6>
				<?php endif ?>

				<?php if ($field = get_field('title_404', 'option')): ?>
					<h1><?= $field ?></h1>
				<?php endif ?>

				<?php the_field('text_404', 'option') ?>

				<?php if ($field = get_field('link_404', 'option')): ?>
					<div class="btn-wrap d-flex justify-content-center">
						<a href="<?= $field['url'] ?>" class="btn-default"<?php if($field['target']) echo ' target="_blank"' ?>><span><?= html_entity_decode($field['title']) ?></span></a>
					</div>
				<?php endif ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>