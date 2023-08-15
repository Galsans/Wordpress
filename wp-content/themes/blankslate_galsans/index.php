<?php get_header(); ?>
<?php get_sidebar() ?>
<div class="container-fluid mt-4">
    <div class="col-12 w-100 pt-4">
        <?php echo do_shortcode('[wonderplugin_slider id=1]'); ?>
    </div>
</div>
<div class="container-fluid">
    <div class="row head">
        <!-- <div class="col-12 text-center m-auto">
            <img src="http://localhost/wp/wp-content/uploads/2023/08/AdobeStock_443709176_Preview.jpeg" class="rounded">            
        </div> -->
        <div class="col-10 text-center m-auto">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque sit laborum repellat ratione repellendus
                tempora vel atque. Minus, numquam libero dolore explicabo quae laboriosam, asperiores fugiat itaque
                nostrum incidunt eum illum nisi. Itaque voluptates quaerat odit perspiciatis hic sunt similique, at,
                nihil doloremque obcaecati mollitia illum et, aliquid iure enim eaque culpa minima. Error nemo saepe non
                odio libero asperiores beatae enim et blanditiis necessitatibus atque eum alias cum culpa, rem aliquid
                sequi numquam. Exercitationem nobis magni unde in excepturi.</p>
        </div>
    </div>
    <div class="col-12 mt-5 w-50 m-auto">
        <p class="text-center fst-italic">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, dolores
            accusamus tempore exercitationem recusandae excepturi consequuntur aliquid voluptate labore voluptates.</p>
        <p class="fst-italic text-center font-bold">"Galsans"</p>
    </div>

    <div class="content">
        <div class="container-fluid">
            <h2>Recent News</h2>
            <div class="row">
                <?php
                $i = 0;
                if(have_posts()) : while(have_posts()) : the_post();

                if($i == 3) {
                    echo "<div>";
                    echo '<div class="row">';
                    $i = 0;
                }
                ?>
                <div class="d-flex col-md-4 col-12 ">
                    <div class="card p-3" onclick="window.location.href='<?=$post->guid?>'">
                        <h1><?php the_title() ?></h1>
                        <p><?php echo get_post()->post_content ?></p>
                        <div class="navigation">
                            <div class="col-lg-7 col-xs-6">
                                <?=get_the_date()?>
                            </div>
                            <div class="col-lg-7 col-xs-6">
                                <span class="readmore">Read More...</span>
                            </div>

                        </div>
                    </div>
                </div>
                <?php 
                    $i++;
                    endwhile; endif;
                ?>
                <div class="col-lg-12">
                    <div class="card-header rounded mt-5 p-2 mb-5">
                        <p>Category</p>
                        <?php the_category() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>

