<?php get_header(); ?>

<div id="content-block" class="content-block" itemid="/" itemscope itemtype="https://schema.org/Article">
	<?php
		$custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
	?>
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="datePublished" content="<?php echo get_the_date('Y-n-j'); ?>">
	<meta itemprop="dateModified" content="<?php echo get_the_modified_date('Y-n-j'); ?>">
	<meta itemprop="image" content="<?php echo esc_url($custom_logo[0]); ?>">
    <?php
		global $post;
		if ($post->post_parent) {
			$parent = get_post($post->post_parent);
			if ($parent->post_name === 'casino-online') { ?>
                <div class="text__first">
                    <div class="single__block wrapper">
						<?php if( !is_front_page() ) {
							if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
						}?>
                        <?php
                             $rating = get_field('rating');
                             $bonus = get_field('bonus');
                             $link = get_field('offer_link');
                             $color = get_field('logo_color');
                             $promocode = get_field('promocode');
							 $name = get_field('name');
                        ?>
                        <div class="single__card <?php echo $name; ?>" style="background-color: <?php echo $color; ?>">
                            <div class="single__card-img">
                                <?php
									if (has_post_thumbnail()) {
										echo get_the_post_thumbnail($post->ID);
									}
								?>
                            </div>
                            <div class="single__card-text">
                                <h1 itemprop="headline"><?php the_title(); ?></h1>
                                <span class="single__card-bonus"><?php echo $bonus; ?></span>
                                <div class="single__card-buttons">
                                    <div class="btns">
                                        <button onclick="window.open(\'' . $link . '\', \'_blank\')" class="btn">Al casinò</button>
                                    </div>
                                    <div class="single__card-rating">
                                        <div class="rating-block" style="background: radial-gradient(closest-side, #3e3e40 80%, transparent 80% 100%), conic-gradient(#75BA59 <?php echo $rating; ?>%, #3e3e40 0)">
                                            <span class="star-icon"></span>
                                        </div>
                                        <div class="rating-block" style="background: radial-gradient(closest-side, #3e3e40 80%, transparent 80% 100%), conic-gradient(#75BA59 <?php echo $rating; ?>%, #3e3e40 0)">
                                            <span class="check-icon"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content wrapper">
                    <div class="content_page" itemprop="articleBody">
                        <?php the_content(); ?>
                        <?php get_template_part('templates/author-card'); ?>
                    </div>
                    <?php
                        get_template_part('templates/sidebar');
                    ?>
                </div>
            <?php }
		} else { ?>
            <div class="text__first">
                <div class="text__first-content wrapper">
					<?php if( !is_front_page() ) {
						if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs();
					}?>
                    <h1 itemprop="headline"><?php the_title(); ?></h1>
                </div>
            </div>
			<div class="main-content wrapper">
                <div class="content_page" itemprop="articleBody">
                    <?php the_content(); ?>
                    <?php get_template_part('templates/author-card'); ?>
                </div>
            </div>
		<?php }
    ?>
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
