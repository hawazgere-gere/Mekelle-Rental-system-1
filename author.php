<?php get_header(); ?>

<div class="container mt-5 mb-5">
    <?php
    // Fixes the variable name to match your system and prevents warnings
    $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
    $user_type = get_user_meta($curauth->ID, 'mekelle_user_type', true); 
    ?>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0 overflow-hidden">
                <div class="card-header bg-info text-white text-center py-5">
                    <?php echo get_avatar($curauth->ID, 120, '', '', array('class' => 'rounded-circle shadow-sm mb-3 border border-white')); ?>
                    <h2 class="font-weight-bold mb-0"><?php echo esc_html($curauth->display_name); ?></h2>
                    <span class="badge badge-light text-info px-3 py-2 mt-2 shadow-sm">
                        <?php echo strtoupper($user_type ? $user_type : 'Member'); ?>
                    </span>
                </div>

                <div class="card-body p-5">
                    <div class="row text-center">
                        <div class="col-sm-6 border-right">
                            <h6 class="text-muted small font-weight-bold uppercase tracking-wider">EMAIL ADDRESS</h6>
                            <p class="lead font-weight-normal"><?php echo esc_html($curauth->user_email); ?></p>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="text-muted small font-weight-bold uppercase tracking-wider">MEMBER SINCE</h6>
                            <p class="lead font-weight-normal"><?php echo date('F Y', strtotime($curauth->user_registered)); ?></p>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-center">
                        <h5 class="font-weight-bold mb-3 text-dark">Mekelle Rental Activity</h5>
                        
                        <?php if ($user_type == 'landlord'): ?>
                            <div class="alert alert-light border">
                                <p class="mb-0">This landlord has listed <strong><?php echo count_user_posts($curauth->ID, 'advertising'); ?></strong> properties in Mekelle.</p>
                            </div>
                        <?php else: ?>
                            <p class="text-muted">Registered as a Tenant looking for homes in <strong>Ayder, Hawelti, or Adi-Haki</strong>.</p>
                        <?php endif; ?>
                    </div>
                </div>
                
                <div class="card-footer bg-white text-center py-3">
                    <small class="text-muted">Account ID: #<?php echo $curauth->ID; ?></small>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>