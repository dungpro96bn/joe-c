<?php get_header();
global $post;
global $wp_query;
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
                <span class="ttl-en">MEDIA</span>
                <span class="ttl-ja">みる、よむ、JOE</span>
            </h1>
        </div>
    </div>

    <div class="page-content">
        <div class="media-container">
            <div class="note-title u-inview">
                <div class="inner">
                    <p class="text noto-sjp">外国人材業界の最前線から<br class="sp-br"/>情報を発信するメディア</p>
                </div>
            </div>
            <div class="inner">
                <div class="list-media">
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    $terms_id = get_queried_object()->term_id;
                    $args = array(
                        'post_type'=> 'media',
                        'post_status' => 'publish',
                        'order'    => 'DESC',
                        'paged'  => $paged,
                        'posts_per_page' => "10",
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'category_media',
                                'field' => 'term_id',
                                'terms' => $terms_id
                            )
                        )
                    );
                    $result = new WP_Query( $args );
                    if ( $result-> have_posts() ) : ?>
                        <?php while ( $result->have_posts() ) : $result->the_post(); ?>
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
                                                    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                                </div>
                                                <div class="author-info">
                                                    <p class="author-name"><?php echo get_the_author(); ?></p>
                                                    <p class="author-position"><?php $author_id = get_the_author_meta( 'ID' );
                                                        echo get_field('position', 'user_'. $author_id ); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <?php
    //                    if ($result->max_num_pages > 1) {
    //                        wp_pagenavi();
    //                    }
                ?>
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
                <div class="link-media u-inview">
                    <a href="/media/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="6.624" height="11.834" viewBox="0 0 6.624 11.834"><path id="Path_64108" data-name="Path 64108" d="M819.279,5119.924l-5.563,5.563,5.563,5.564" transform="translate(-813.009 -5119.571)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"></path></svg>
                        <span>メディア</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>