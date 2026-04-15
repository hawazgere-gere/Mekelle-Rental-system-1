<?php get_header(); ?>

<div class="hero-section d-flex align-items-center justify-content-center text-white text-center" 
     style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('<?php echo get_template_directory_uri(); ?>/assets/images/mekelle-main.jpg'); 
            height: 80vh; background-size: cover; background-position: center;">
    <div class="container">
        <h1 class="display-3 font-weight-bold mb-3">Find Your Home in Mekelle</h1>
        <p class="lead mb-5">The most trusted rental marketplace for all seven sub-cities.</p>
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="<?php echo site_url('/all-properties'); ?>" method="GET" class="p-2 bg-white rounded-pill shadow-lg d-flex">
                    <input type="text" name="s" class="form-control border-0 rounded-pill px-4" placeholder="Search Ayder, Hawelti, Adi-Haki...">
                    <button type="submit" class="btn btn-info rounded-pill px-5 font-weight-bold text-white">SEARCH</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row text-center">
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <h4 class="font-weight-bold text-info">Verified Listings</h4>
                <p class="text-muted small">We personally verify every landlord in Mekelle to ensure your safety.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <h4 class="font-weight-bold text-info">All Sub-Cities</h4>
                <p class="text-muted small">From the city center to the outskirts of Quiha and Semien.</p>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="p-4 bg-light rounded shadow-sm h-100">
                <h4 class="font-weight-bold text-info">Direct Contact</h4>
                <p class="text-muted small">Connect directly with owners without expensive middle-man fees.</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-info py-5 text-white text-center">
    <div class="container">
        <h2 class="font-weight-bold mb-4">Ready to start your search?</h2>
        <a href="<?php echo site_url('/all-properties'); ?>" class="btn btn-outline-light btn-lg px-5">View All Rentals</a>
    </div>
</div>

<?php get_footer(); ?>