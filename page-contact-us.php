<?php 
/* Template Name: Contact Us Page */
get_header(); ?>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 font-weight-bold">Contact Us</h1>
        <p class="lead text-muted">Connecting landlords and tenants across the whole city of Mekelle.</p>
    </div>

    <div class="row bg-white shadow-sm rounded-lg p-4 border">
        <div class="col-md-6 border-right">
            <h3 class="font-weight-bold mb-4">Get In Touch</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Your Inquiry (e.g., I am looking for a house in Hadnet...)"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Message</button>
            </form>
        </div>

        <div class="col-md-6 pl-md-5 mt-4 mt-md-0">
            <h3 class="font-weight-bold mb-3">Our City Presence</h3>
            <p class="text-muted small mb-4">We manage listings in all seven sub-cities:</p>
            
            <div class="row">
                <div class="col-6">
                    <ul class="list-unstyled small">
                        <li>📍 <strong>Ayder</strong></li>
                        <li>📍 <strong>Hadnet</strong></li>
                        <li>📍 <strong>Kedamay Weyane</strong></li>
                        <li>📍 <strong>Quiha</strong></li>
                    </ul>
                </div>
                <div class="col-6">
                    <ul class="list-unstyled small">
                        <li>📍 <strong>Semien</strong></li>
                        <li>📍 <strong>Saharti</strong></li>
                        <li>📍 <strong>Arada</strong></li>
                    </ul>
                </div>
            </div>

            <hr>
            
            <h5 class="font-weight-bold">Headquarters</h5>
            <p class="mb-0 text-secondary">Mekelle Institute of Technology (MIT)</p>
            <p class="mb-0 text-secondary">Mekelle, Tigray, Ethiopia</p>
            <p class="text-primary"><strong>Email:</strong> support@mekellerental.et</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>