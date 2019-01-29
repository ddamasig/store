<template>
    <div class="carousel-item" :class="{ 'active' : active }">
        <div class="page-header" data-parallax="true" :style="processedBackground">
            <div class="filter"></div>
            <div class="container">
                <div class="motto text-center">
                    <h1>{{ title }}</h1>
                    <h3>{{ subtitle }}</h3>
                    <br />
                    <a href="#" class="btn btn-outline-neutral btn-round"><i class="fa fa-shopping-cart"></i>
                        Shop Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'background',
            'active',
            'title',
            'subtitle',
        ],
        computed: {
            processedBackground() {
                return `background-image: url('${ this.background }')`
            }
        }
    }

</script>
