<?php get_header(); ?>

<main id="main-content" class="site-main">
    <?php while ( have_posts() ) : the_post(); ?>
        
        <div class="bg-light py-5 mb-4 border-bottom">
            <div class="container">
                <h1 class="display-4 font-weight-bold"><?php the_title(); ?></h1>
            </div>
        </div>

        <div class="container my-5">
            <?php 
            // Get the current page slug to decide what content to show
            $current_slug = get_post_field( 'post_name', get_post() );

            if ( $current_slug == 'all-properties' ) : ?>
                
                <h2 class="mb-4">Available Rentals in Mekelle</h2>
                <div class="row">
                    <?php 
                    $sample_properties = [
                        ['name' => 'Modern Apartment', 'loc' => 'Ayder', 'price' => '15,000 ETB'],
                        ['name' => 'Family House', 'loc' => 'Hadnet', 'price' => '25,000 ETB'],
                        ['name' => 'Studio Room', 'loc' => 'Kedamay Weyane', 'price' => '8,000 ETB']
                    ];
                    foreach ($sample_properties as $prop) : ?>
                        <div class="col-md-4 mb-4">
                            <div class="card shadow-sm h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $prop['name']; ?></h5>
                                    <p class="card-text text-muted"><?php echo $prop['loc']; ?></p>
                                    <p class="font-weight-bold text-primary"><?php echo $prop['price']; ?></p>
                                    <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php elseif ( $current_slug == 'about-us' ) : ?>
                
                <div class="row">
                    <div class="col-lg-8">
                        <h2>About Mekelle Rental System</h2>
                        <p class="lead">Developed by the IT Department at Mekelle Institute of Technology (MIT).</p>
                        <p>This system was designed as part of an open source project to digitize property management in the city of Mekelle. Our goal is to connect local landlords with students and professionals looking for quality housing.</p>
                        <ul class="list-group list-group-flush mt-4">
                            <li class="list-group-item"><strong>Lecturer:</strong>  Asmelash </li>
                            <li class="list-group-item"><strong>Core Technology:</strong> WordPress, PHP, MySQL, Git</li>
                            <li class="list-group-item"><strong>Location:</strong> Mekelle, Ethiopia</li>
                        </ul>
                    </div>
                </div>

            <?php elseif ( $current_slug == 'contact-us' ) : ?>
                
                <div class="row">
                    <div class="col-md-6">
                        <h3>Get In Touch</h3>
                        <p>Have questions about a property? Fill out the form below.</p>
                        <form class="mt-3">
                            <div class="form-group">
                                <input type="text" class="form-control mb-2" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control mb-2" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-2" rows="4" placeholder="Your Inquiry..."></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                        </form>
                    </div>
                    <div class="col-md-6 border-left pl-md-5 mt-4 mt-md-0">
                        <h4>Our Location</h4>
                        <p><strong>Address:</strong><br>Mekelle Institute of Technology (MIT)<br>Mekelle, Tigray, Ethiopia</p>
                        <p><strong>Email:</strong><br>support@mekellerental.et</p>
                        <p><strong>Office Hours:</strong><br>Mon - Fri: 8:00 AM - 5:00 PM</p>
                    </div>
                </div>

            <?php else : ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>
        </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>