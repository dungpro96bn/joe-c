<?php get_header();
global $post;
?>

<div id="news" class="page-container">
    <div class="bg-news">
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
                        <span class="char">N</span>
                        <span class="char">E</span>
                        <span class="char">W</span>
                        <span class="char">S</span>
                    </span>
                </span>
                <span class="ttl-ja">お知らせ</span>
            </h1>
        </div>
    </div>

    <div class="news-container">
        <div class="inner">
            <div class="list-news fadeIn-bg">
                <?php
                //$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'=> 'news',
                    'post_status' => 'publish',
    				//'paged' => $paged,
                    'posts_per_page' => '-1',
                );
                $result = new WP_Query( $args );
                if ( $result-> have_posts() ) : ?>
                <?php while ( $result->have_posts() ) : $result->the_post(); ?>
                <div class="item-news u-inview">
                    <a class="item-link" href="<?php echo get_the_permalink(); ?>">
                        <p class="date-time en"><?php echo get_the_date(); ?></p>
                        <p class="title"><?php the_title(); ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="13.237" height="25.06" viewBox="0 0 13.237 25.06">
                            <path id="Path_64109" data-name="Path 64109" d="M1267.837,60.546l12.176,12.176L1267.837,84.9" transform="translate(-1267.483 -60.192)" fill="none" stroke="#7e7e7e" stroke-miterlimit="10" stroke-width="1"/>
                        </svg>
                    </a>
                </div>
                <?php endwhile;?>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
    <!--		--><?php
    //		if ($result->max_num_pages > 1) {
    //			wp_pagenavi();
    //		}
    //		?>

            <div class="link-news u-inview">
                <a href="/news/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.624" height="11.834" viewBox="0 0 6.624 11.834"><path id="Path_64108" data-name="Path 64108" d="M819.279,5119.924l-5.563,5.563,5.563,5.564" transform="translate(-813.009 -5119.571)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/></svg>
                    <span>トップページに戻る</span>
                </a>
            </div>

        </div>
    </div>

</div>

<?php get_footer(); ?>