@extends('layouts.app')

@section('content')

<div class="main">
    {{-- Main Shopping Section --}}
    <div class="section text-center">
        <div class="container">
            {{-- Search Bar --}}
            <div class="row">
                <div class="col-lg-3 mt-5">
                    <select class="form-control" name="category" id="">
                        <option value="">Choose category any</option>
                        <option value="">Ultrabooks</option>
                        <option value="">Traditional</option>
                    </select>
                </div>
                <div class="col-lg-7 mt-5">
                    <input type="text" class="form-control form-control-lg" placeholder="Enter search keywords...">
                </div>
                <div class="col-lg-2 text-left mt-5">
                    <button class="btn btn-danger w-100">
                        <i class="fa fa-search"></i>
                        Search
                    </button>
                </div>
            </div>
            {{-- End of Search Bar --}}
            <hr class="mt-5">
            {{-- Item Information --}}
            <div class="row mt-5">
                {{-- Images --}}
                <div class="col-lg-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" v-for="image in {{ $item->images }}" data-slide-to="image.id"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/' . $item->main_image) }}" alt="" class="img-fluid img-thumbnail"
                                    style="border-color: transparent">
                            </div>
                            @foreach ($item->images as $image)
                                <div class="carousel-item">
                                    <img src="{{ asset('img/' . $image->path) }}" alt="" class="img-fluid img-thumbnail"
                                        style="border-color: transparent">
                                </div>    
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <button class="btn btn-danger w-100 my-4">
                        <i class="fa fa-shopping-cart"></i>
                        Purchase
                    </button>
                </div>

                {{-- Item Genereal Information --}}
                <div class="col-lg-7 text-left text-center text-md-left">
                    <h2 class="title mt-4 mt-lg-0 pt-0">{{ $item->title }}</h2>
                    <h5>
                        <span class="mr-4">{{ $item->getFormattedPrice() }}</span>
                        <span class="mr-4">{{ $item->getFormattedCategory() }}</span>
                        <span class="mr-4" :class="{'text-danger' : {{ $item->stock }} < 2 }" :class="{'text-success' : {{ $item->stock }} >= 2 }">{{
                            $item->getStockPhrase() }}</span>
                    </h5>
                    <h5>
                        <span class="mr-2">Rating:</span>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                        <i class="fa fa-star text-warning"></i>
                    </h5>
                    <p class="mt-5">
                        {{ $item->description }}
                    </p>
                </div>

            </div>

            {{-- Item Specification --}}
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h3 class="title mb-5">Specifications</h3>
                    <table class="table table-bordered w-100">
                        <tbody>
                            <tr>
                                <th class="text-center">Brand</th>
                                <td>Apple</td>
                            </tr>
                            <tr>
                                <th class="text-center">Model</th>
                                <td>Macbook Pro Retina 2018</td>
                            </tr>
                            <tr>
                                <th class="text-center">CPU</th>
                                <td>Intel Core i7 9510U @ 2.6 GHz</td>
                            </tr>
                            <tr>
                                <th class="text-center">GPU</th>
                                <td>PowerVR Some Model</td>
                            </tr>
                            <tr>
                                <th class="text-center">RAM</th>
                                <td>8 GB DDR4</td>
                            </tr>
                            <tr>
                                <th class="text-center">Storage</th>
                                <td>256 GB SSD</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Item Comments --}}
            <div class="row mt-5">
                <div class="col-md-12 ml-auto mr-auto">
                    <h3 class="title mb-5">Comments</h3>
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
                            <div class="col-md-12 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- End of Main Shopping Section --}}
</div>
@endsection
