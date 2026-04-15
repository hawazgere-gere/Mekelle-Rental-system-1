<?php
/*
Template Name: Registration Page
*/

get_header(); ?>

<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0 rounded">
                <div class="card-header bg-dark text-white text-center py-4">
                    <h2 class="mb-0">Create Account</h2>
                    <p class="small text-light mb-0">Join the Mekelle Rental network today</p>
                </div>
                <div class="card-body p-4">

                    <?php 
                    /** * STATUS NOTIFICATIONS
                     * These display the success/fail messages you were missing.
                     */
                    if (isset($_GET['registration'])) {
                        if ($_GET['registration'] == 'success') {
                            echo '<div class="alert alert-success border-0 shadow-sm mb-4">
                                    <strong>Success!</strong> Your Mekelle Rental account has been created.
                                  </div>';
                        } elseif ($_GET['registration'] == 'failed') {
                            echo '<div class="alert alert-danger border-0 shadow-sm mb-4">
                                    <strong>Error:</strong> Registration failed. Please use a valid email.
                                  </div>';
                        }
                    }
                    ?>

                    <form id="mekelle-registration-form" method="POST" action="">
                        
                        <div class="form-group mb-3">
                            <label class="font-weight-bold small">FULL NAME</label>
                            <input type="text" name="user_full_name" class="form-control bg-light" placeholder="e.g. Almaz Tesfaye" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold small">EMAIL ADDRESS</label>
                            <input type="email" name="user_email" class="form-control bg-light" placeholder="name@example.com" required>
                        </div>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold small">I WANT TO...</label>
                            <select name="user_role" class="form-control bg-light">
                                <option value="tenant">Rent a Property (Tenant)</option>
                                <option value="landlord">List a Property (Landlord)</option>
                            </select>
                        </div>

                        <div class="form-group mb-4">
                            <label class="font-weight-bold small">PASSWORD</label>
                            <input type="password" name="user_password" class="form-control bg-light" placeholder="************" required>
                        </div>

                        <button type="submit" name="mekelle_register_submit" class="btn btn-info btn-block text-white font-weight-bold py-2 shadow-sm">
                            REGISTER NOW
                        </button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>