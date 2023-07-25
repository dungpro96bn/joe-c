<?php get_header();
global $post;
?>


<div id="single-news" class="page-container">

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

    <div class="single-container">
        <div class="inner">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="title-entry u-inview">
                    <p class="date-time en"><?php echo get_the_date(); ?></p>
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
                <div class="post-content u-inview">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="link-news u-inview">
                <a href="/news/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6.624" height="11.834" viewBox="0 0 6.624 11.834"><path id="Path_64108" data-name="Path 64108" d="M819.279,5119.924l-5.563,5.563,5.563,5.564" transform="translate(-813.009 -5119.571)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="1"/></svg>
                    <span>一覧に戻る</span>
                </a>
            </div>
        </div>
    </div>


</div><!-- #new -->

<?php get_footer(); ?>