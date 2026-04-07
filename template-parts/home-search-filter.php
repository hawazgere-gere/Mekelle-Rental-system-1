<div class="home-search-box container mt-4">
    <form action="<?php echo home_url(); ?>" method="get">
        <input type="hidden" name="post_type" value="advertising_home">
        <div class="row align-items-center bg-white p-3 shadow-sm rounded">
            
            <div class="col-md-2 order-last order-md-first">
                <button type="submit" class="btn btn-danger w-100 py-2">Search</button>
            </div>

            <div class="col-md-3">
                <select name="price-range" class="form-control border-0 border-right">
                    <option value="false">Price (ETB)</option>
                    <option value="0-5000">Under 5,000</option>
                    <option value="5000-15000">5,000 - 15,000</option>
                    <option value="15000+">Over 15,000</option>
                </select>
            </div>

            <div class="col-md-3">
                <select name="type" class="form-control border-0 border-right">
                    <option value="false">Property Type</option>
                    <option value="apartment">Apartment</option>
                    <option value="villa">Villa/House</option>
                    <option value="studio">Studio</option>
                </select>
            </div>

            <div class="col-md-4">
                <input type="text" name="s" class="form-control border-0" placeholder="Search by area or house name...">
            </div>

        </div>
    </form>
</div>