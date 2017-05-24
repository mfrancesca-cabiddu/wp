<?php get_header(); ?>
            <div class="row">
                <div class="col-md-12 welcome">
                    <h1>Fotografia di scena:</h1>
                    <h4>Iscriviti e ricevi gratuitamente la guida via mail!</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- form begin -->
    <div class="container-fluid">
        <div class="row text-center">
            <h2><?php bloginfo(name) ?></h2>
            <h5><?php bloginfo(description) ?></h5>
        </div>
    <?php echo do_shortcode('[contact-form-7 id="20" title="Contact form 1"]'); ?>
</form>
</div>
</div>
<?php get_footer(); ?>
