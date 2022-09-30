@extends('layouts.frontend.app')

@section('title')
<title>Fandu</title>
@endsection

@section('css')

@endsection


@section('content')

<section class="topbanner">
    <div class="container-fluid">
        <div class="wrapper01">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 order-lg-1 order-md-1  order-sm-12 order-12">
                    <div class="leftsidebar45   mt-5">

                        <p class="mt-5">

                        <div class="aboutme56">
                            <h2>Why Choose Fandu.me? </h2>
                            <h5>Fandu.me is your go-to solution for creating amazing personal websites that engage your
                                audience. It takes personal website development to the next level by catering to your
                                needs
                                as well as the needs of your audiences.</h5>

                            <ul class="fndulist456">
                                <li>
                                    <img src="{{asset('images/flistimg/fl01.png')}}">
                                    <p>
                                        <strong>A Unique and Balanced Approach</strong> <br>
                                        Fandu.me creates the perfect balance between your brand info and your daily
                                        content
                                        updates.?<br>
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl02.png')}}">
                                    <p>
                                        <strong> Hassle-free & Seamless Interface</strong> <br>
                                        Provides an intuitive do-it-yourself interface that is simple, easy, and
                                        quick.<br>
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl03.png')}}">
                                    <p>
                                        <strong> A single Repository of all your Content: </strong> <br>
                                        Keeps all your content in one place managed in a very efficient way<br>

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl04.png')}}">
                                    <p>
                                        <strong>Effortless Interaction With Your Audience:</strong> <br>
                                        Fandu.me helps you to interact with your audience seamlessly through an
                                        impeccable digital
                                        presence.<br>
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl05.png')}}">
                                    <p>
                                        <strong>Keep Your Website Fresh & Interesting:</strong> <br>
                                        Easily embed blogs, social media feeds, & more on your website without the need
                                        to learn to
                                        code.<br>
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl06.png')}}">
                                    <p>
                                        <strong>Affordable & Single Subscription Plan:</strong> <br>
                                        Our all-in-one platform meets all your personal branding needs affordably with
                                        just a single
                                        subscription.<br>
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl04.png')}}">
                                    <p>
                                        <strong>Grow Your Personal Brand on Social Media:</strong> <br>
                                        Excellent social media connectivity tools that help you to grow your brand via
                                        digital
                                        marketing.<br>
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl03.png')}}">
                                    <p>
                                        <strong>Search Engine Friendly Personal Website:</strong> <br>
                                        Top-notch SEO features that you can use to increase your website traffic and
                                        overall digital
                                        footprint.

                                    </p>
                                </li>

                            </ul>

                        </div>










                        </p>
                        {{-- @foreach ($allFeatures as $key=>$val)
                        <div class="featuresec56  mt-2 card">
                            <h2>
                                {{$val->title}}
                            </h2>
                            <p>
                                {{$val->subtitle}}
                            </p>
                            <div>
                                {!! $val->description !!}
                            </div>
                        </div>
                        @endforeach --}}
                    </div>




                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 order-lg-12 order-md-12 order-sm-1 order-1">
                    <div class="bannerright458">
                        <div class="bnrttopbanner56">
                            <div class="bannertopinfo55">
                                <div class="logo"><a href="#">FANDU.ME</a></div>

                                <h2>
                                    The Best
                                    <span>Website Creator</span>
                                    <small>
                                        for Successful <br>
                                        Personal Branding.
                                    </small>

                                </h2>
                            </div>

                            <div class="topbanner25"><img src="{{asset('images/topbanner012.jpg')}}"></div>

                            <div class="topbtminfo45">
                                <p>
                                    Fandu.me solves the problem of existing personal websites by designing a
                                    perfectly
                                    balanced website for your personal information and the content you create.
                                </p>

                                <div class="youcan">About Fandu</div>

                                <div class="readmorebox">
                                    <a href="{{route('readAboutUs')}}" class="readmr568">
                                        <img src="{{asset('images/arrowmore02.png')}}"> READ MORE
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="aboutme56">
                            <h2>Why Fandu.me ?</h2>
                            <ul class="fndulist456">
                                <li>
                                    <img src="{{asset('images/flistimg/fl01.png')}}">
                                    <p>
                                        Hassle-free & Seamless Interface

                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl02.png')}}">
                                    <p>
                                        A single Repository of all your Content
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl03.png')}}">
                                    <p>
                                        Effortless Interaction With Your Audience

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl04.png')}}">
                                    <p>
                                        Keep Your Website Fresh & Interesting
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl05.png')}}">
                                    <p>
                                        Affordable & Single Subscription Plan
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl06.png')}}">
                                    <p>
                                        Grow Your Personal Brand on Social Media
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl03.png')}}">
                                    <p>
                                        Search Engine Friendly Personal Website
                                    </p>
                                </li>

                            </ul>

                        </div>


                        <div class="togethersec15">
                            <a href="{{route('whyMe')}}">
                                <span>
                                    Let's think
                                    together.
                                </span>
                                <figure><img src="{{asset('images/flistimg/arrow15.png')}}"></figure>
                            </a>
                        </div>


                        <div class="servsec012">
                            <div class="servtop55">
                                <h3>
                                    Why You need Personal Website
                                </h3>
                                <figure><img src="{{asset('images/servimg55.jpg')}}"></figure>
                            </div>

                            <p>
                                Your personal website is the most important part of your personal branding. Here are
                                the
                                top 8 reasons why you should have your own personal website.
                            </p>


                            <ul class="servlist58">
                                <li>
                                    <img src="{{asset('images/icon/icon01.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon02.png')}}">
                                    <p>
                                        Take control of your personal branding.

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon03.png')}}">
                                    <p>
                                        Showcase your talents & achievements.

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon04.png')}}">
                                    <p>
                                        Connect better & faster with your audience.

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon05.png')}}">
                                    <p>
                                        Provide all the information in one place.

                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon06.png')}}">
                                    <p>
                                        Take advantage of SEO, SEM, and online ads.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon07.png')}}">
                                    <p>
                                        Share insights and updates easily & quickly.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon08.png')}}">
                                    <p>
                                        Stand out from the crowd.
                                    </p>
                                </li>


                            </ul>

                        </div>


                        <div class="featuresec56">
                            <h2>
                                {{$content->title}}
                            </h2>
                            <p>
                                {{$content->subtitle}}
                            </p>
                            <div>
                                {!! $content->description !!}
                            </div>

                            <div class="readmorebox">
                                <a href="{{route('viewFeatures',['slug'=>'feature'])}}" class="readmr568">
                                    <img src="{{asset('images/arrowmore02.png')}}"> READ MORE
                                </a>
                            </div>


                        </div>

                        <div class="testimonial58">
                            <h2><span>100%</span> Customer Satisfaction, Guaranteed.
                            </h2>

                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    @foreach ($testimonials as $key=>$val )
                                    <div class="carousel-item @if($key==0) active @endif">
                                        <div class="testimonblock99">
                                            <figure><img src="{{asset('auther_images')}}/{{$val->auther_image}}">
                                            </figure>
                                            <div class="testmoinfo55">
                                                <h3>{{$val->auther_name}}</h3>
                                                <span>{{$val->auther_designation}}</span>
                                                <p>
                                                    {!! substr($val->quotes, 0,80) !!} .....
                                                </p>

                                            </div>
                                        </div>

                                        <div class="readmorebox">
                                            <a href="{{route('testimonialDetail',['slug'=>$val->auther_name,'id'=>$val->id])}}"
                                                class="readmr568">
                                                <img src="{{asset('images/arrowmoreblue02.png')}}"> READ MORE
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach



                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>

                        </div>




                    </div>
                </div>


            </div>

        </div>
    </div>

    </div>
</section>


@endsection


@section('script')


@endsection