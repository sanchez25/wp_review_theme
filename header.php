<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name='viewport' content='width=device-width,initial-scale=1'/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
</head>
<div id="scroll"></div>
	<header class="header">
		<div class="header__top wrapper">
			<?php
				$custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
				if ($custom_logo) {
					echo '<a href="/" class="logo">
							<img src="' . esc_url($custom_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">
						</a>';
				} else { ?>
					<a href="/" class="logo-text"><?php echo bloginfo('name') ?></a>
			<?php } ?>
			<div class="main_menu">
				<?php 
					if (has_nav_menu('main')) {
						wp_nav_menu( array(
							'menu_class'=>'menu',
							'theme_location'=>'main'
						));
					} else {
						echo '';
					}
				?>
			</div>
			<?php 
				if (has_nav_menu('main')) { ?>
					<div class="burger">
						<div class="burger__img"></div>
					</div>
			<?php } ?>
		</div>
	</header>