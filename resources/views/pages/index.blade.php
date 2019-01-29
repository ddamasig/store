@extends('layouts.app')

@section('content')

<div class="page-header" data-parallax="true" style="background-image: url('{{ asset('img/macbook-glow.jpg') }}">
    <div class="filter"></div>
    <div class="container">
        <div class="motto text-center">
            <h1>Your Brand Here</h1>
            <h3>You subtitle goes here.</h3>
            <br />
            <a href="#" class="btn btn-outline-neutral btn-round"><i class="fa fa-shopping-cart"></i>
                Shop Now
            </a>
        </div>
    </div>
</div>
<div class="main">
    <div class="section text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="title">Why choose us?</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your
                        product. Keep you user engaged by providing meaningful information. Remember that by this
                        time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you
                        want the user to see more.</h5>
                    <br>
                    <a href="#paper-kit" class="btn btn-danger btn-round">See Details</a>
                </div>
            </div>
            <br /><br />
            <div class="row">
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-album-2"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Beautiful Gallery</h4>
                            <p class="description">Spend your time generating new ideas. You don't have to think of
                                implementing.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-bulb-63"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">New Ideas</h4>
                            <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-chart-bar-32"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Statistics</h4>
                            <p>Choose from a veriety of many colors resembling sugar paper pastels.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info">
                        <div class="icon icon-danger">
                            <i class="nc-icon nc-sun-fog-29"></i>
                        </div>
                        <div class="description">
                            <h4 class="info-title">Delightful design</h4>
                            <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
                            <a href="#pkp" class="btn btn-link btn-danger">See more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section section-dark text-center">
        <div class="container">
            <h2 class="title">Satisfied customers</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{ asset('img/faces/clem-onojeghuo-3.jpg') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Henry Ford</h4>
                                    <h6 class="card-category">Product Manager</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{ asset('img/faces/joe-gardner-2.jpg') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Sophie West</h4>
                                    <h6 class="card-category">Designer</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#avatar"><img src="{{ asset('img/faces/erik-lucatero-2.jpg') }}" alt="..."></a>
                        </div>
                        <div class="card-body">
                            <a href="#paper-kit">
                                <div class="author">
                                    <h4 class="card-title">Robert Orben</h4>
                                    <h6 class="card-category">Developer</h6>
                                </div>
                            </a>
                            <p class="card-description text-center">
                                <i>
                                    " Lorem ipsum dolor sit amet, consec tetur adipis cing elit. Fusce bibendum, tellus
                                    eu interdum iaculis, tellus arcu cursus justo, in malesuada velit metus sed dui."
                                </i>
                            </p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-link btn-just-icon btn-neutral"><i class="fa fa-linkedin"></i></a>
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
