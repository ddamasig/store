<template>
    <div>
        <h4 class="title">
            <i class="fa fa-sliders-h"></i>
            Filters
        </h4>
        <form action="/shop" method="GET">
            <!-- Search Box  -->
            <label for="search-box">Search by title</label>
            <input name="query" id="search-box" type="text" class="form-control" placeholder="Enter keywords">
            <!-- Category -->
            <label for="category" class="mt-2">Category</label>
            <select class="form-control" name="category" id="category">
                <option value="">Any</option>
                <option value="traditional">Traditional</option>
            </select>
            <!-- Priice Range -->
            <div class="row">
                <div class="col-lg-6">
                    <label for="price-range" class="mt-2">Minimum price</label>
                    <input id="minimum-price" name="minimum-price" type="text" class="form-control"
                        placeholder="0">
                </div>
                <div class="col-lg-6">
                    <label for="price-range" class="mt-2">Maximum price</label>
                    <input id="maximum-price" name="maximum-price" type="text" class="form-control"
                        placeholder="0">
                </div>
            </div>
            <!-- Filter Button -->
            <button type="submit" class="btn btn-danger w-100 mt-4">Filter</button>
        </form>
    </div>
</template>


<script>
    export default {
        methods: {
        },
    }

</script>
