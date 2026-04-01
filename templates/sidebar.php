<div class="sidebar">
    <div class="sidebar__block">
        <div class="sidebar__block-title">
            <span>I migliori casinò</span>
        </div>
        <?php
            $child_pages = new WP_Query(array(
                'post_type'      => 'page',
                'posts_per_page' => 4,
                'post_parent__not_in' => array(0),
                'meta_key' => 'number_of_list',
                'orderby' => 'meta_value_num',
                'order' => 'ASC'
            ));

            if ($child_pages->have_posts()) {
                echo '<div class="sidebar__block-items">';
                    while ($child_pages->have_posts()) {
                        $child_pages->the_post();
                        $name = get_field('name');
                        $bonus = get_field('bonus');
                        $link = get_field('offer_link');
                        $color = get_field('logo_color');
                        echo '<div class="sidebar__item">';
                                echo '<a class="sidebar__item-img" href="' . get_permalink() . '" style="background-color: ' . $color . '">';
                                    echo get_the_post_thumbnail(get_the_ID(), 'medium');
                                echo '</a>';
                                echo '<div class="sidebar__item-info">';
                                    echo '<span class="sidebar__item-title">' . get_the_title() . '</span>';
                                    echo '<span class="sidebar__item-bonus">' . $bonus . '</span>';
                                echo '</div>';
                                echo '<div class="sidebar__item-buttons">';
                                    echo '<button onclick="window.open(\'' . $link . '\', \'_blank\')" class="btn">Ottenere bonus</button>';
                                echo '</div>';
                        echo '</div>';
                    }
                    wp_reset_postdata();
                echo '</div>';
            }
        ?>
    </div>
</div>