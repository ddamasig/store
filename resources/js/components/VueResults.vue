<template>
    <div class="col-lg-9 text-left pl-lg-5">
        <h4 class="title">
            Results
            <small class="text-muted ml-2">
                (
                {{ itemsCount }}
                Items found )
            </small>
        </h4>
        <!-- Items -->
        <div class="row">
            <div class="col-lg-4" v-for="item in items" :key="item.id">
                <v-card-item :item="item" :img-path="imgPath"></v-card-item>
            </div>
        </div>
        <!-- Pagination -->
        <div class="row mt-5 justify-content-end">
            <!-- {{ pagination }} -->
        </div>
    </div>

</template>

<script>
    export default {
        props: [
            'imgPath'
        ],
        data: function () {
            return {
                items: null,
                itemsCount: null,
                pagination: {},
            }
        },
        methods: {
            receiveItems() {
                Event.$on('onGetItems', (data) => {
                    console.log('Receiving Items...')
                    this.items = data.items
                    this.itemsCount = data.itemsCount
                    this.pagination = data.pagination
                })
            },
            setPage(page) {
                console.log('/api/items?&page=' + page);
                // Emit event to filter
                Event.$emit('switchPage', {
                    page: '/api/items?&page=' + page
                })
                // Receive new items
            }
        },
        created() {
            console.log('Items: ' + this.items)
            this.receiveItems();
            console.log('Items: ' + this.items)
        }
    }

</script>
