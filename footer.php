<?php  $options=get_option('new_theme_option'); ?>
<footer class="d-print-none">
    <div class="footer-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3 text-center text-lg-left mb-3">
                    <h6 class="text-white mb-4"> About Mekelle Rental </h6>
                    <p class="text-muted">
                        Mekelle Rental is a modern house rental system designed to help students and residents find affordable housing in the heart of Mekelle. Our platform connects landlords and tenants with ease.
                    </p>
                </div>
                
                <div class="col-12 col-lg-3 text-center text-lg-left mb-3">
                    <h6 class="text-white mb-4"> Quick Links </h6>
                    <ul class="nav pl-0 flex-column">
                        <li class="nav-item"> <a href="#" class="nav-link text-muted pt-0 pl-0"> About Us </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link text-muted pt-0 pl-0"> Contact Us </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link text-muted pt-0 pl-0"> Customer Guide </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link text-muted pt-0 pl-0"> Terms & Conditions </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link text-muted pt-0 pl-0"> Support </a> </li>
                    </ul>
                </div>
                
                <div class="col-12 col-lg-3 text-center text-lg-left mb-3">
                    <h6 class="text-white mb-4"> Contact Us </h6>
                    <p class="d-block text-muted mb-2">
                        <?php if (isset($options['contact_us']) && !empty($options['contact_us'])) {
                            echo nl2br($options['contact_us']);
                        } else {
                            echo "Mekelle Institute of Technology<br>Mekelle, Ethiopia";
                        } ?>
                    </p>
                </div>
                
                <div class="col-12 col-lg-3 text-center text-lg-left mb-3">
                    <h6 class="text-white mb-4"> Follow Us </h6>
                    <div class="follow d-flex justify-content-center justify-content-lg-start">
                        <a href="<?php if (isset($options['instagram'])) echo ($options['instagram']) ?>" class="mr-3 text-muted"> <i class="fab fa-instagram align-middle"></i> </a>
                        <a href="#" class="mr-3 text-muted"> <i class="align-middle fab fa-facebook"></i> </a>
                        <a href="#" class="mr-3 text-muted"> <i class="align-middle fab fa-twitter"></i> </a>
                        <a href="#" class="mr-3 text-muted"> <i class="align-middle fab fa-telegram"></i> </a>
                    </div>
                    
                    <h6 class="text-white my-4"> Newsletter </h6>
                    <div class="follow2">
                        <form method="post" action="<?php echo home_url() ?>/?na=s" onsubmit="return newsletter_check(this)" class="d-flex align-items-center">
                            <input type="hidden" name="nlang" value="">
                            <input type="hidden" name="nr" value="widget">
                            <input type="hidden" name="nl[]" value="0">
                            <input type="email" name="ne" class="form-control rounded-pill py-3 border-0 d-inline-block" placeholder="Enter your email...">
                            <button class="btn ml-n5" type="submit"> <i class="fas fa-chevron-right align-middle"></i> </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom py-3">
        <div class="container">
            <div class="row d-flex flex-column flex-lg-row justify-content-between align-items-center">
                <?php
                if (has_nav_menu('footer')):
                    wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'container_class'=>'',
                    'menu_class'=>'nav pl-0 flex-column flex-lg-row text-center',
                    'menu_id' =>'footer_menu'
                ));
                endif;
                ?>
                <p class="mb-0 text-muted mt-2 mt-lg-0">Copyright 2026 - Mekelle Rental System&copy;</p>
            </div>
        </div>
    </div>
</footer>

<style>
    <?php if (isset($options['footer_color']) && !empty($options['footer_color'])): ?>
    .footer-top {
        background-color: <?php echo $options['footer_color'] ?>;
    }
    <?php endif; ?>
    /* Fixed text alignment for LTR language */
    .footer-top h6, .footer-top p, .footer-top ul {
        text-align: left !important;
    }
</style>

<?php wp_footer(); ?>
</body>
</html>