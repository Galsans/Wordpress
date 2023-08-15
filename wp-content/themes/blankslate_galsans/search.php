<?php get_header(); ?>
<?php if ( have_posts() ) : ?>
<div class="container p-5">
    <div class="card p-3">
        <header class="header">
            <h1 class="entry-title" itemprop="name">
                <?php printf( esc_html__( 'Search Results for: %s', 'blankslate' ), get_search_query() ); ?></h1>
        </header>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'entry' ); ?>
        <?php endwhile; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
</div>
<?php else : ?>
<div class="container mt-5 pt-2 mb-3">
    <div class="card p-3">
        <article id="post-0" class="post no-results not-found">
            <header class="header">
                <h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Nothing Found', 'blankslate' ); ?></h1>
            </header>
            <div class="entry-content" itemprop="mainContentOfPage">
                <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'blankslate' ); ?></p>
                <form role="search" method="get" class="d-flex search-form" action="http://localhost/wp/">
                    <input type="search" class="search-field form-control me-2" placeholder="Search &hellip;"
                        value="" name="s" />
                    <button type="submit" class="search-submit btn btn-secondary my-2 my-sm-0"
                        value="Search">Search</button>
                </form>
                <!-- <div class="input-group rounded">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <span class="input-group-text border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </div> -->
            </div>
        </article>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>