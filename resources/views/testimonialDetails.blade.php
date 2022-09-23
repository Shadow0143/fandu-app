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
                    <div class="leftsidebar45">
                        <div class="testimonblock99">
                            <figure><img src="{{asset('auther_images')}}/{{$testimonial->auther_image}}">
                            </figure>
                            <div class="testmoinfo55">
                                <h3>{{$testimonial->auther_name}}</h3>
                                <span>{{$testimonial->auther_designation}}</span>
                                <p>
                                    {!! $testimonial->quotes !!}
                                </p>

                            </div>
                        </div>
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

                                <div class="youcan">Now you can…</div>

                                <div class="readmorebox">
                                    <a href="#" class="readmr568">
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
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl02.png')}}">
                                    <p>
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl03.png')}}">
                                    <p>
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl04.png')}}">
                                    <p>
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>
                                <li>
                                    <img src="{{asset('images/flistimg/fl05.png')}}">
                                    <p>
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/flistimg/fl06.png')}}">
                                    <p>
                                        Creates the perfect balance between personal branding information and all
                                        the
                                        content that you create on a regular basis.
                                    </p>
                                </li>

                            </ul>

                        </div>


                        <div class="togethersec15">
                            <a href="#">
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
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon03.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon04.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon05.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon06.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon07.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>

                                <li>
                                    <img src="{{asset('images/icon/icon08.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>


                                <li>
                                    <img src="{{asset('images/icon/icon08.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>


                                <li>
                                    <img src="{{asset('images/icon/icon08.png')}}">
                                    <p>
                                        Create a unique identity & digital presence.
                                    </p>
                                </li>
                            </ul>

                        </div>



                        <div class="featuresec56">
                            <h2>
                                Must have Features <br> <span>you need to manage</span> <span> your personal Website
                                </span>
                            </h2>

                            <p>
                                Fandu.me takes personal website development to the next level by catering to your
                                needs
                                as well as the needs of your audiences.
                            </p>

                            <ul class="featurelist255">
                                <li>1. DIY Tool with the Perfect Design.</li>
                                <li>2. Simple, Easy-to-use User Interface.</li>
                                <li>3. Combine Static Data with New Content. </li>
                                <li>4. Avail Options Like SSL, Live Chat.</li>
                                <li>5. Embed Blogs, Social Media, & More.</li>
                                <li>6. Maintain & Upgrade as Required.</li>
                            </ul>

                            <div class="readmorebox">
                                <a href="#" class="readmr568">
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