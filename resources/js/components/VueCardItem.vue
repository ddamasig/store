<template>
    <div class="card">
        <a :href="`/shop/${item.id}`" class="text-dark">
        <img class="card-img-top" :src="imgPath + item.main_image" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title mb-2 font-weight-bold">{{ item.title }}</h5>
            <p class="d-block mb-2 text-secondary font-weight-bold">
                P {{ this.formatPrice(item.price) }}
            </p>
            <p class="d-block mb-2">
                <span v-if="item.stock < 5" class="text-danger d-block mb-2">Only {{ item.stock }} 
                    <span v-if="item.stock > 1">items</span>
                    <span else>item</span>
                     in stock!</span>
                <span v-else class="text-success d-block mb-2">{{ item.stock }} items in stock.</span>
            </p>
            <p class="card-text">
                {{ item.description.substring(0, 120) }}...
            </p>
            <a :href="'/shop/' + item.id" class="btn btn-danger mt-3 w-100">
                <!-- <i class="fa fa-shopping-cart"></i> -->
                More details    
            </a>
        </div>
        </a>

    </div>
</template>

<script>
    export default {
        data: function () {
            return {
                
            }            
        },
        props: [
            'img',
            'imgPath',
            'item'
        ],
        methods: {
            formatPrice(value) {
                let val = (value / 1).toFixed(0)
                return val.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
            }
        }
    }

</script>
