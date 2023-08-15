<?php get_header(); get_sidebar(); ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card p-3 mb-3">
                <?php if(have_posts()) : while(have_posts()) : the_post() ?>

                <?php if(has_post_thumbnail()) {
    echo "<div class='thumbnail'><img src='".get_post_thumbnail_url()."'/></div>";
}
?>
                <span class="get_date"><?=get_the_date(); ?></span>
                <h2><?= the_title() ?></h2>
                <p>
                    <?php echo get_post()->post_content ?>
                </p>
            </div>            
            <div class="komen">
                <?php if(!post_password_required()) comments_template('', true) ?>
            </div>
            
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>