<div class="home-search-box container mt-4 EnglishBar">
    <form action="<?php echo home_url( '/' ); ?>" method="get">
        <div class="row align-items-center bg-white shadow-sm p-3 rounded">
            
            <div class="col-md-4 border-right">
                <input type="text" name="s" class="form-control border-0" placeholder="Search by area or house name..." value="<?php echo get_search_query(); ?>">
            </div>

            <div class="col-md-3 border-right">
                <select name="property_type" class="form-control border-0">
                    <option value="">Property Type</option>
                    <option value="apartment">Apartment</option>
                    <option value="house">House</option>
                    <option value="studio">Studio</option>
                </select>
            </div>

            <div class="col-md-3 border-right">
                <select name="price_range" class="form-control border-0">
                    <option value="">Price (ETB)</option>
                    <option value="0-5000">Under 5,000</option>
                    <option value="5000-10000">5,000 - 10,000</option>
                    <option value="10000+">10,000+</option>
                </select>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-danger btn-block py-2 font-weight-bold">
                    SEARCH
                </button>
            </div>

        </div>
    </form>
</div>