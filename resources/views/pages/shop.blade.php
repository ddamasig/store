@extends('layouts.app')

@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        {{-- Carousel Items --}}
        <v-carousel-item :active="true" title="Macbook Pro 2018" subtitle="Elegance meets power" background="{{ asset('img/banners/banner-2.jpg') }}"></v-carousel-item>
        <v-carousel-item :active="false" title="Lenovo Thinkpad X1 Carbon" subtitle="Military grade build quality"
            background="{{ asset('img/banners/banner-1.jpg') }}"></v-carousel-item>
        <v-carousel-item :active="false" title="Dell XPS 13" subtitle="Sleek and powerful" background="{{ asset('img/banners/banner-3.jpg') }}"></v-carousel-item>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="main">
    {{-- Main Shopping Section --}}
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ml-auto mr-auto">
                    <h2 class="title">Shop</h2>
                </div>
                {{-- Filters Section --}}
                <div class="col-lg-3 text-left">
                    <v-filter></v-filter>
                </div>

                {{-- Results Section --}}
                <div class="col-lg-9 text-left pl-lg-5">
                    <h4 class="title">
                        Results
                        <small class="text-muted ml-2">
                            (
                            {{ $itemsCount }}
                            Items found )
                        </small>
                    </h4>
                    <!-- Items -->
                    <div class="row">
                        <div class="col-lg-4" v-for="item in {{ json_encode($items) }}" :key="item.id">
                            <v-card-item :item="item" img-path="{{ asset('img') }}/"></v-card-item>
                        </div>
                    </div>
                    <!-- Pagination -->
                    <div class="row mt-5 justify-content-end">
                        {{ $pagination }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Main Shopping Section --}}

    {{-- Add to Cart Modal --}}
    <v-modal></v-modal>

    {{-- Laptop Guid Section --}}
    <div class="section text-center">
        <div class="container">
            <h2 class="title">Let us help you choose!</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar" style="border-radius: 0;">
                            <a href="#avatar" style="border-radius: 0; min-height: 100px">
                                <img src="{{ asset('img/categories/category-1.jpeg') }}" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Ultrabooks</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar" style="border-radius: 0; min-height: 100px">
                                <img src="{{ asset('img/categories/category-2.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Gaming Laptops</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar" style="border-radius: 0; min-height: 100px">
                            <a href="#avatar"><img src="{{ asset('img/categories/category-3.webp') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">2-in-1 Laptops</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar" style="border-radius: 0; min-height: 100px">
                                <img src="{{ asset('img/categories/category-4.png') }}" alt="...">
                            </a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Chromebooks</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar" style="border-radius: 0; min-height: 100px">
                            <a href="#avatar"><img src="{{ asset('img/categories/category-5.png') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Workstations</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar" style="border-radius: 0; min-height: 100px">
                            <a href="#avatar"><img src="{{ asset('img/categories/category-6.png') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Traditional Laptops</h4>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Keep in touch?</h2>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-single-02"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="nc-icon nc-email-85"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <label>Message</label>
                        <textarea class="form-control" rows="4" placeholder="Tell us your thoughts and feelings..."></textarea>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
