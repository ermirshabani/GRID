<footer class="site-footer">
  
    <div class="container">
       
        <div class="widgetset-footer">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12 footers" id="footer1">

                    <?php dynamic_sidebar('footer1') ?>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-12 footers" id="footer2">
                    <?php dynamic_sidebar('footer2') ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 footers" id="footer3">
                    <?php dynamic_sidebar('footer3') ?>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 footers" id="footer3">
                    <?php dynamic_sidebar('newsletter') ?>
                </div>
                <!-- <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1467.2846381113018!2d21.134019710808893!3d42.64929037969641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1600330064642!5m2!1sen!2s" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div> -->
            </div>
            <div class="col-12 footers">
        <?php dynamic_sidebar('footer4') ?>
        </div>
        </div>
        <hr>
        <hr id="hr2">


        <div class="bootom-footer">
            <p><a href="https://www.grid-ks.com/"><?php echo date('Y ');?>Grid.</a> <span>All rights reserved.</span>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>

</html>