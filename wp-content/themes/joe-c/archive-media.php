<?php get_header();
global $post;
?>

<div id="media" class="page-main page-container">
    <div class="bg-page">
        <picture>
            <source media="(max-width: 767px)" srcset="/wp-content/uploads/bg_contact_sp.png">
            <source media="(min-width: 768px)" srcset="/wp-content/uploads/home_bg01_pc.png">
            <img decoding="async" class="sizes" src="/wp-content/uploads/home_bg01_pc.png" alt="">
        </picture>
    </div>
    <div class="header-entry">
        <div class="inner">
            <h1 class="heading u-inview">
                <span class="ttl-en border-animation index-module--kv__title--1oLHB">
                    <span class="word">
                        <span class="char">M</span>
                        <span class="char">E</span>
                        <span class="char">D</span>
                        <span class="char">I</span>
                        <span class="char">A</span>
                    </span>
                </span>
                <span class="ttl-ja fadeIn-delay delay-2">みる、よむ、JOE</span>
            </h1>
        </div>
    </div>

    <div class="page-content">
        <div class="note-title u-inview">
            <div class="inner">
                <p class="text noto-sjp ">外国人材業界の最前線から<br class="sp-br"/>情報を発信するメディア</p>
            </div>
        </div>
        <div class="media-container">
            <div class="inner">
                <div class="list-media">
                    <?php
                    global $current_user;
                    $args = array(
                        'post_type'=> 'media',
                        'post_status' => 'publish',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'posts_per_page' => '-1',
                    );
                    $post_list = get_posts($args);
                    if ($post_list) : ?>
                        <?php foreach ($post_list as $post) : setup_postdata($post); ?>
                            <div class="media-item u-inview">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="image-post">
                                        <div class="image">
                                            <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                        </div>
                                    </div>
                                    <div class="info">
                                        <div class="info-inner">
                                            <p class="date-time en"><?php echo get_the_date(); ?></p>
                                            <p class="ttl"><?php the_title(); ?></p>
                                            <div class="cat-list">
                                                <?php
                                                $country_lists = wp_get_post_terms($post->ID, 'category_media', array("fields" => "all"));
                                                foreach($country_lists as $country_list) { ?>
                                                    <p><?php echo $country_list->name; ?></p>
                                                <?php } ?>
                                            </div>
                                            <div class="author">
                                                <div class="author-img">
                                                    <?php
                                                    $image = get_field('w-img');
                                                    if( !empty( $image ) ): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <?php endif; ?>
                                                </div>
                                                <div class="author-info">
                                                    <p class="author-name"><?php echo get_field('w-name'); ?></p>
                                                    <p class="author-position"><?php echo get_field('w-pos'); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
                <!--		--><?php
                //		if ($result->max_num_pages > 1) {
                //			wp_pagenavi();
                //		}
                //		?>

                <div class="media-category">
                    <p class="title en u-inview">CATEGORY</p>
                    <?php
                    $args = array(
                        'taxonomy' => 'category_media',
                        'hide_empty' => false,
                        'parent' => 0
                    );
                    $cats = get_categories($args); ?>
                    <div class="media-tag">
                        <ul class="sub-tagMedia u-inview">
                            <?php foreach($cats as $cat) { ?>
                                <li class="sub-itemMenu"><a href="<?php echo get_category_link( $cat->term_id ) ?>"><?php echo $cat->name; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

<?php get_footer(); ?>