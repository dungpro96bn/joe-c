<?php get_header();
global $post;
global $current_user;
?>

<div id="single-media" class="page-main page-container">
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
                    <span class="ttl-ja">みる、よむ、JOE</span>
                </h1>
            </div>
        </div>

        <div class="page-content">
            <div class="media-container">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="media-header">
                    <div class="inner">
                        <p class="date-time en u-inview"><?php echo get_the_date(); ?></p>
                        <h2 class="title u-inview"><?php the_title(); ?></h2>
                        <div class="author-media-category u-inview">
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
                            <div class="cat-list">
                                <?php
                                $country_lists = wp_get_post_terms($post->ID, 'category_media', array("fields" => "all"));
                                foreach($country_lists as $country_list) { ?>
                                    <a href="<?php echo get_category_link( $country_list->term_id ) ?>"><?php echo $country_list->name; ?></a>
                                <?php } ?>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="inner">
                    <div class="post-content">
                        <div class="img-post u-inview">
                            <?php
                            $image = get_the_post_thumbnail_url();
                            if ($image) :?>
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                            <?php endif ?>
                        </div>
                        <div class="u-inview">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="author-article u-inview">
                        <div class="author-inner">
                            <p class="ttl">この記事のライター</p>
                            <div class="author">
                                <div class="author-img">
                                    <?php echo get_avatar( get_the_author_meta( 'ID' )); ?>
                                </div>
                                <div class="author-info">
                                    <?php $author_id = get_the_author_meta( 'ID' );
                                    $position = get_field('position', 'user_'. $author_id );
                                    $message = get_field('message', 'user_'. $author_id ); ?>
                                    <p class="author-name"><span class="t1"><?php echo get_the_author(); ?></span><span class="t2"><?php echo $position; ?></span></p>
                                    <p class="author-position"><?php echo $message; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>

                <div class="inner">
                    <div class="link-media u-inview">
                        <a href="/media/">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6.624" height="11.834" viewBox="0 0 6.624 11.834"><path id="Path_64108" data-name="Path 64108" d="M819.279,5119.924l-5.563,5.563,5.563,5.564" transform="translate(-813.009 -5119.571)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"></path></svg>
                            <span>一覧に戻る</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

    </div>

<?php get_footer(); ?>