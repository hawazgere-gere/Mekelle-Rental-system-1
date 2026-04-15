<?php 
/* Template Name: About Us Page */
get_header(); ?>

<div class="container py-5">
    <div class="row align-items-center bg-white shadow-sm rounded-lg overflow-hidden border">
        
        <div class="col-lg-6 p-0 d-none d-lg-block">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mekelle-building.jpg" 
                 class="img-fluid" 
                 style="height: 100%; object-fit: cover; min-height: 500px;"
                 alt="Mekelle Rental System">
        </div>

        <div class="col-lg-6 p-5">
            <h6 class="text-primary font-weight-bold text-uppercase mb-2">IT Department Project</h6>
            <h1 class="display-4 font-weight-bold mb-4">Mekelle Rental System</h1>
            
            <p class="lead text-muted mb-4">
                Developed at **Mekelle Institute of Technology (MIT)**. This system is designed to modernize property management in Mekelle through data-driven solutions.
            </p>

            <div class="project-details border-top pt-4">
                <div class="row mb-3">
                    <div class="col-4 font-weight-bold">Lecturer:</div>
                    <div class="col-8">Asmelash</div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 font-weight-bold">Tech Stack:</div>
                    <div class="col-8">
                        <span class="badge badge-dark">WordPress</span>
                        <span class="badge badge-dark">PHP</span>
                        <span class="badge badge-dark">Git</span>
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <a href="<?php echo site_url('/all-properties'); ?>" class="btn btn-primary btn-lg px-5 shadow-sm">
                    View All Properties
                </a>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>