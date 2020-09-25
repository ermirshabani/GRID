<!-- 
    Template Name: Home
 -->

<?php get_header(); ?>
<section class="home1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 home1_desc">
                <h3>Classic & Modern</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, sequi?</p>
                <a href="#"><?php the_field('qmimi');?></a>
            </div>
            <div class="col-lg-8 home1_image">
                <img src="<?php the_field('product_image');?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="home2">
    <div class="container">
        <h2 class="home2_title">New Arrivals</h2>
        <?php echo do_shortcode('[products limit="2" columns="2" orderby="date" order="DESC" ]');?>

    </div>
</section>
<section class="home3">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 home3_services">
                <div class="home3_boxes">
                    <i class="fas fa-truck-moving"></i>
                    <p><?php the_field('delivery_text');?></p>
                </div>
            </div>
            <div class="col-lg-4 home3_services">
                <div class="home3_boxes">
                    <i class="fas fa-money-check-alt"></i>
                    <p><?php the_field('money_refound');?></p>
                </div>
            </div>
            <div class="col-lg-4 home3_services">
                <div class="home3_boxes">
                    <i class="fas fa-comment-dots"></i>
                    <p><?php the_field('costumer_services');?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="shopi">
    <h2 class="home2_title">Produktet tona</h2>
    <div class="container">
        <?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]');?>
    </div>
</section>
<section class="oferta">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 oferta_foto">
                <img src="<?php the_field('offer_image');?>" alt="">
            </div>
            <div class="col-lg-6 oferta_description">
                <h2><?php the_field('product_description');?></h2>
                <a href="<?php the_field('product_link');?>"><?php the_field('product_link_title');?></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>