<?php
	$category = get_the_category()[0];
	$post_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' )[0];

    the_post();
	get_header();
?>

<section class="post-page">
    <div class="post-page__inner-container layout__service">
        <section class="post-page__article-container">

            <div class="full-post">
                <div class="full-post__headline">
                    <div class="full-post__category-container">
                        <span class="full-post__category--prefix">Target99 / </span>
                        <a class="full-post__category" href="<?php echo get_category_link($category->cat_ID); ?>"><?php echo $category->cat_name; ?></a>
                    </div>
                    <img src="<?php echo $post_image_url; ?>" class="full-post__featured-image"/>

                    <div class="full-post__meta-container">
                        <div class="full-post__title-container">
                            <h1 class="full-post__title"><?php echo get_the_title(); ?></h1>
                        </div>

                        <div class="full-post__headline-footer">
                            <div class="full-post__back-link-container">
                                <a href="/blog" class="full-post__back-link">< К списку новостей</a>
                            </div>
                            <div class="full-post__date-container">
                                <div class="full-post__date">
                                    <span class="fa fa-calendar"></span><?php echo get_the_date(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="full-post__content">
                    <?php echo get_the_content(); ?>
                </div>

                <div class="full-post__article-footer">
                    <div class="full-post__share-container">
                        <div class="full-post__share">
                            <?php echo do_shortcode('[addtoany]'); ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <div class="post-page__advice-container">
            <?php echo do_shortcode('[related_posts_by_tax format="thumbnails_target99" posts_per_page="4"]'); ?>
        </div>

    </div>

</section>

<?php get_footer(); ?>
