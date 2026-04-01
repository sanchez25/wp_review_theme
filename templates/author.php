<?php
    /* Template name: Author */
?>

<?php get_header(); ?>

<div id="content-block" class="content-block" itemid="/" itemscope itemtype="https://schema.org/Article">
	<?php
		$custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
	?>
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="datePublished" content="<?php echo get_the_date('Y-n-j'); ?>">
	<meta itemprop="dateModified" content="<?php echo get_the_modified_date('Y-n-j'); ?>">
	<meta itemprop="image" content="<?php echo esc_url($custom_logo[0]); ?>">
    <div class="text__first">
		<div class="text__first-content wrapper">
			<div class="text__first-left" itemprop="articleBody">
				<?php if( !is_front_page() ) {
					if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
				}?>
                <h1 itemprop="headline" class="author-title"><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div>
            <div class="text__first-right">
                <div class="author-card">
					<img src="<?php get_home_url(); ?>/wp-content/uploads/2026/01/vincenzo-santoro.webp" alt="Vincenzo Santoro">
					<div class="articles-count">
						<span>Articoli scritti</span>
						<span><?php echo (int) wp_count_posts('page')->publish; ?></span>
					</div>
				</div>
            </div>
		</div>
    </div>
	<div class="author-posts wrapper">
		<h2>Tutti gli articoli</h2>
        <?php
			$parent = get_page_by_path('casino-online');
			$parent_id = $parent ? $parent->ID : 0;

			$child_pages = new WP_Query(array(
				'post_type' => 'page',
				'posts_per_page' => -1,
				'post_parent' => $parent_id,
				'meta_key' => 'number_of_list',
				'orderby' => 'meta_value_num',
				'order' => 'ASC'
			));

			if ($child_pages->have_posts()) {
				echo '<div class="cards">';
					while ($child_pages->have_posts()) {
						$child_pages->the_post();
						$name = get_field('name');
						$rating = get_field('rating');
						$bonus = get_field('bonus');
						$link = get_field('offer_link');
						$color = get_field('logo_color');
						$number = get_field('number_of_list');
						echo '<div class="cards__item">';
							echo '<div class="cards__item-content">';
									echo '<div class="cards__item-number">' . $number . '</div>';
									echo '<div class="cards__item-rating">';
										echo '<div class="star-icon"></div>';
										echo '<span>' . $rating . '</span>';
									echo '</div>';
									echo '<a class="cards__item-img" href="' . get_permalink() . '" style="background-color: ' . $color . '">';
										echo get_the_post_thumbnail(get_the_ID(), 'medium');
									echo '</a>';
									echo '<div class="cards__item-info">';
										echo '<div class="cards__item-bonus">';
											echo '<span>' . $bonus . '</span>';
										echo '</div>';
									echo '</div>';
									echo '<div class="cards__item-buttons">';
										echo '<button onclick="window.open(\'' . $link . '\', \'_blank\')" class="btn">Al casinò</button>';
										echo '<a href="' . get_permalink() . '" class="btn link">Recensione</a>';
										echo '<div class="disclamer">';
											echo '<span>18+ | Gioca responsabilmente | <a href="https://gioca-responsabile.it/" target="_blank">Gioca-responsabile.it</a></span>';
										echo '</div>';
									echo '</div>';
							echo '</div>';
						echo '</div>';
					}
					wp_reset_postdata();
				echo '</div>';
			}
		?>
    </div> 
	<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
		<meta itemprop="name" content="<?php echo get_bloginfo(); ?>">
		<meta itemprop="description" content="<?php echo get_bloginfo(); ?>">
		<div itemprop="logo" itemscope="" itemtype="https://www.schema.org/ImageObject">
			<link itemprop="url" href="<?php echo esc_url($custom_logo[0]); ?>">
			<link itemprop="contentUrl" href="<?php echo esc_url($custom_logo[0]); ?>">
		</div>
	</div>
</div>

<?php get_footer(); ?>