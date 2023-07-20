<?php get_header(); ?>

<div id="homepage">

    <div class="bg-fix">
        <picture>
            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/img_fix_home.jpg 2x">
            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/img_fix_home.jpg" alt="">
        </picture>
    </div>

    <div class="home-inner">

        <div class="empower-the-world">
            <div class="bg01 bg-home">
                <picture>
                    <source srcset="/wp-content/uploads/home_bg01_pc.png">
                    <img class="sizes" src="/wp-content/uploads/home_bg01_pc.png" alt="">
                </picture>
            </div>
            <div class="inner">
                <div class="right-content index-module--kv__header--JH5j0">
                    <h1 class="heading-block en index-module--kv__title--1oLHB">
                        <span>
                            <div class="word">
                                <div class="char">E</div>
                                <div class="char">M</div>
                                <div class="char">P</div>
                                <div class="char">O</div>
                                <div class="char">W</div>
                                <div class="char">E</div>
                                <div class="char">R</div>
                            </div>
                        </span>
                        <span>
                            <div class="word">
                                <div class="char">T</div>
                                <div class="char">H</div>
                                <div class="char">E</div>
                            </div>
                            <div class="word word-2">
                                <div class="char">W</div>
                                <div class="char">O</div>
                                <div class="char">R</div>
                                <div class="char">L</div>
                                <div class="char">D</div>
                            </div>
                        </span>
                    </h1>
                    <p class="t1 u-inview">学びと支援を、世界中へ。</p>
                    <div class="mainImg">
                        <picture>
                            <source srcset="<?php bloginfo('template_directory'); ?>/assets/images/home_mainImg_sp.jpg">
                            <img class="sizes" src="<?php bloginfo('template_directory'); ?>/assets/images/home_mainImg_sp.jpg" alt="">
                        </picture>
                    </div>
                    <div class="news-block">
                        <h3 class="title en u-inview"><span>NEWS</span></h3>
                        <ul class="news-list u-inview">
                            <?php
                            $args = array(
                                'post_type'=> 'news',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => '1',
                            );
                            $post_list = get_posts($args);
                            if ($post_list) : ?>
                                <?php foreach ($post_list as $post) : setup_postdata($post); ?>
                                    <li class="news-item">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="shortInfo-news">
                                                <p class="date-time en"><?php echo get_the_date(); ?></p>
                                                <p class="text"><?php the_title(); ?></p>
                                            </div>
                                        </a>
                                    </li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </ul>
                        <div class="link-page u-inview">
                            <a href="/news/" class="btn-view">VIEW ALL</a>
                        </div>
                    </div>
                </div>
                <div class="scroll-page">
                    <a class="scroll" href="#message">
                        <div class="text en"><span>SCROLL</span></div>
                    </a>
                </div>
            </div>
        </div>

        <div id="message" class="message-block">
            <div class="inner">
                <div class="right-content">
                    <h2 class="heading-block u-inview">
                        <span class="ttl-en">MESSAGE</span>
                        <span class="ttl-ja">メッセージ</span>
                    </h2>
                    <p class="ttl u-inview">多種多様な人達が、<br class="pc-br"/>共に学び<br class="sp-br"/>成長するプラットフォームを創る。</p>
                    <div class="info">
                        <p class="text u-inview">日本で暮らすすべての人に安心を届けること、<br/>そして世界中へ学びと支援を広げることが私たちのミッションです。</p>
                        <p class="text u-inview">夢を持ち頑張る人に寄り添い、それを支援する企業と共に歩む。<br/>実現するのは、誰もが希望を持てる社会です。</p>
                        <p class="text u-inview">新しい世代の、新しい組合。<br/>ＪＯＥだからこそできることがあります。</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="promise-block">
            <div class="bg02 bg-home">
                <picture>
                    <source srcset="/wp-content/uploads/home_bg02_pc.png">
                    <img class="sizes" src="/wp-content/uploads/home_bg02_pc.png" alt="">
                </picture>
            </div>
            <div class="inner">
                <div class="promise-content border-animation">
                    <div class="left-content">
                        <h2 class="heading-block u-inview">
                            <span class="ttl-en">PROMISE</span>
                            <span class="ttl-ja">私たちの約束</span>
                        </h2>
                        <p class="sub-ttl u-inview">私たちは３つの約束をします。</p>
                        <hr class="border-animation">
                    </div>
                    <div class="right-content">
                        <ul class="promise-list">
                            <li class="promise-item u-inview">
                                <div class="image">
                                    <picture>
                                        <source srcset="/wp-content/uploads/home_img01_pc.png">
                                        <img class="sizes" src="/wp-content/uploads/home_img01_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="promise-info">
                                    <p class="number en"><span>01</span></p>
                                    <p class="ttl">ガラス張りの組合運営</p>
                                    <p class="text">今、世界から日本に向けられている<br class="pc-br"/>期待に応えるため、運営の透明性を第一に。<br class="pc-br"/>顔の見える組織として情報発信し続けます。</p>
                                </div>
                            </li>
                            <li class="promise-item u-inview">
                                <div class="image">
                                    <picture>
                                        <source srcset="/wp-content/uploads/home_img02_pc.png">
                                        <img class="sizes" src="/wp-content/uploads/home_img02_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="promise-info">
                                    <p class="number en"><span>02</span></p>
                                    <p class="ttl">国境を越えた雇用の創出</p>
                                    <p class="text">人と企業のスピーディなマッチングを支援。<br class="pc-br"/>蓄積されたHRノウハウとデジタル技術の<br class="pc-br"/>融合により実現します。</p>
                                </div>
                            </li>
                            <li class="promise-item u-inview">
                                <div class="image">
                                    <picture>
                                        <source srcset="/wp-content/uploads/home_img03_pc.png">
                                        <img class="sizes" src="/wp-content/uploads/home_img03_pc.png" alt="">
                                    </picture>
                                </div>
                                <div class="promise-info">
                                    <p class="number en"><span>03</span></p>
                                    <p class="ttl">人材育成の推進</p>
                                    <p class="text">独自の育成奨学金制度で、技能実習生を<br class="pc-br"/>サポート。ハイクオリティな実務とローコスト<br class="pc-br"/>を両立し、優良な制度活用に寄与します。</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr class="promise-hr-2 border-animation">
                </div>
            </div>
        </div>

        <div class="cross-talk">
            <div class="inner">
                <div class="cross-talk-content">
                    <div class="left-content">
                        <h2 class="heading-block u-inview">
                            <span class="ttl-en">CROSS <br class="pc-br"/><span class="subTll-sp">TALK</span></span>
                            <span class="ttl-ja">座談会</span>
                        </h2>
                        <picture style="display: block" class="u-inview">
                            <source srcset="/wp-content/uploads/home_img04_pc.png">
                            <img class="sizes" src="/wp-content/uploads/home_img04_pc.png" alt="">
                        </picture>
                        <hr class="cross-talk-hr border-animation">
                    </div>
                    <div class="right-content">
                        <ul class="tag-list u-inview">
                            <li class="tag-item">JOE<br class="sp-br"/>代表</li>
                            <li class="tag-item">メディア<br class="sp-br"/>編集長</li>
                            <li class="tag-item">日本語<br class="sp-br"/>教育者</li>
                        </ul>
                        <h2 class="title u-inview">外国人材活躍社会に求められる<br/>ダイバーシティ</h2>
                        <p class="text u-inview">日本で働く外国人材が本当に必要としているサポートとは？<br/>今、外国人雇用に関わるすべての人が<br class="pc-br"/>取り組むべき課題に正面から向き合い、本音で語ります。</p>
                        <picture class="img-sp u-inview">
                            <source srcset="/wp-content/uploads/home_img04_pc.png">
                            <img class="sizes" src="/wp-content/uploads/home_img04_pc.png" alt="">
                        </picture>
                        <div class="link-page u-inview">
                            <a href="#" class="btn-view">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="media-block">
            <div class="inner">
                <div class="media-content">
                    <div class="media-header">
                        <h2 class="heading-block u-inview">
                            <span class="ttl-en">MEDIA</span>
                            <span class="ttl-ja">みる、よむ、JOE</span>
                        </h2>
                        <p class="sub-ttl u-inview">JOE協同組合の活動報告や、有識者への<br class="sp-br"/>インタビューなど<br class="pc-br"/>外国人材業界の最前線から<br class="sp-br"/>情報を発信いたします。</p>
                    </div>
                </div>
                <div class="media-slider">
                    <div class="slider u-inview">
                        <ul class="media-list">
                            <?php
                            global $current_user;
                            $args = array(
                                'post_type'=> 'media',
                                'post_status' => 'publish',
                                'orderby' => 'date',
                                'order' => 'DESC',
                                'posts_per_page' => '5',
                            );
                            $post_list = get_posts($args);
                            if ($post_list) : ?>
                                <?php foreach ($post_list as $post) : setup_postdata($post); ?>
                                    <li class="media-item">
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
                                    </li>
                                <?php endforeach; wp_reset_postdata(); ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="media-content">
                    <div class="link-page u-inview">
                        <a href="/media/" class="btn-view">VIEW ALL</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-block">
            <div class="bg03 bg-home">
                <picture>
                    <source srcset="/wp-content/uploads/home_bg03_pc.png">
                    <img class="sizes" src="/wp-content/uploads/home_bg03_pc.png" alt="">
                </picture>
            </div>
            <div class="inner">
                <div class="about-content">
                    <div class="left-content">
                        <h2 class="heading-block u-inview">
                            <span class="ttl-en">ABOUT</span>
                            <span class="ttl-ja">JOEについて</span>
                        </h2>
                        <hr class="about-hr border-animation">
                        <p class="sub-ttl u-inview">私たち<br class="pc-br"/>JOE協同組合について<br class="pc-br"/>紹介いたします</p>
                    </div>
                    <div class="right-content">
                        <div class="about-item u-inview">
                            <picture>
                                <source srcset="/wp-content/uploads/home_img05_pc.png">
                                <img class="sizes" src="/wp-content/uploads/home_img05_pc.png" alt="">
                            </picture>
                            <div class="heading-item">
                                <p class="ttl">JOEの事業分野</p>
                                <p class="text">国境を越えた雇用の創出</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.281" height="57.733" viewBox="0 0 30.281 57.733">
                                <path id="Path_63962" data-name="Path 63962" d="M1241.366,4586.84l28.16,28.16-28.16,28.16" transform="translate(-1240.658 -4586.133)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                            </svg>
                        </div>
                        <div class="about-item u-inview">
                            <picture>
                                <source srcset="/wp-content/uploads/home_img06_pc.png">
                                <img class="sizes" src="/wp-content/uploads/home_img06_pc.png" alt="">
                            </picture>
                            <div class="heading-item">
                                <p class="ttl">JOE協同組合について</p>
                                <p class="text">働くを通して人と社会を豊かにする<br class="sp-br"/>DMDサプライヤー</p>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30.281" height="57.733" viewBox="0 0 30.281 57.733">
                                <path id="Path_63962" data-name="Path 63962" d="M1241.366,4586.84l28.16,28.16-28.16,28.16" transform="translate(-1240.658 -4586.133)" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="2"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<?php get_footer(); ?>