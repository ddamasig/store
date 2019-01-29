<template>
    <nav v-if="transparent" class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="300">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://www.creative-tim.com">Your Brand Here</a>
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/shop" class="nav-link"><i class="nc-icon nc-shopping-11"></i>Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-shopping-11"></i>
                            Checkout
                            <span class="badge badge-pill badge-danger bg-danger">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/index" class="nav-link"><i class="nc-icon nc-shopping-11"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nc-icon nc-shopping-11"></i>Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav v-else class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="https://www.creative-tim.com">Your Brand Here</a>
                <button class="navbar-toggler navbar-toggler-right navbar-burger" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/shop" class="nav-link"><i class="nc-icon nc-shopping-11"></i>Shop</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nc-icon nc-shopping-11"></i>
                            Checkout
                            <span class="badge badge-pill badge-danger bg-danger">0</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/index" class="nav-link"><i class="nc-icon nc-shopping-11"></i>About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class="nc-icon nc-shopping-11"></i>Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>


<script>
    export default {
        props: [
            'transparent'
        ]
    }

</script>
