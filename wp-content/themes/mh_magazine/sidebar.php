<?php /* Template for default sidebar */ ?>
<?php $options = mh_theme_options(); ?>
<?php if ($options['sidebars'] != 'no') { ?>
	<aside class="mh-sidebar <?php mh_sb_class(); ?>">
		<?php dynamic_sidebar('sidebar'); ?>
	</aside>
<?php } ?>