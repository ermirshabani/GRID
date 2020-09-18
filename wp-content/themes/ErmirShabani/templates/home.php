<!-- 
    Template Name: Home
 -->
 
 <?php get_header(); ?>
<!-- FILLIMI I PJESES SE BANNERIT POSHT MENUS -->
<div class="jumbotronHeader">
<div class="row">

<div class="col-12 col-lg-4 col-xl-4">
<div class="titleHeader">

<h3><?php the_field('title_header') ?></h3>
<p><?php the_field('paragraph_header') ?></p>

</div>
</div>

<div class="col-12 col-lg-8 col-xl-8">
<div class="imageHeader">

<img src="<?php the_field('bg_header') ?>">

</div>
</div>

</div>
</div>
<!-- MBARIMI I PJESES SE BANNERIT POSHT MENUS -->
<div class="productsHome">
<div class="container">
<?php echo do_shortcode('[products limit="4" columns="4" orderby="popularity" class="quick-sale" on_sale="true" ]
'); ?>
</div>
</div>

 <?php get_footer();?>