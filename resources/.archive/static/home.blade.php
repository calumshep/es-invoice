@extends('layouts.static')

@section('top-image', '/img/header/lemmings.jpg')

@section('content')

<div class="container">
    <div class="row mb-3 align-items-center">
        <div class="col-lg-8">
            <div class="bg-light p-5 shadow mb-5">
                <h1 class="display-4">Welcome</h1>
                <p class="lead" style="font-size: 1.1rem;">
                    Edge Snowsport aims to fulfill all your snowsports servicing needs in Aberdeen City and Shire.
                    We provide a collection and drop off service for a quick turnaround of your kit.
                    From prepping for end of season storage, getting it ready for racing, and everything in between,
                    we offer a personalised approach to your servicing needs.
                    We have an RoffB auto-feed wet belt sander with edging head,
                    and tons of hand tuning equipment to get tired skis and boards looking and sliding as good as new.
                    We believe we have the only Hot Box in Scotland for deeper longer lasting wax penetration.
                    We can also offer advice on, and supply new equipment for recreational skiers, racers and clubs.
                </p>

                <h3 class="mt-3">Contact Us</h3>
                <h5>By Phone</h5>
                <p>
                    <span id="_telephone3" itemprop="telephone">07715 382112</span>
                    <small> or </small>
                    <span id="_telephone4" itemprop="telephone">07872 429609</span>
                </p>

                <h5>By Email</h5>
                <p>
                    <a href="mailto:&#105;&#110;&#102;&#111;&#64;&#101;&#100;&#103;&#101;&#45;&#115;&#110;&#111;&#119;&#115;&#112;&#111;&#114;&#116;&#46;&#99;&#111;&#46;&#117;&#107;">
                        &#105;&#110;&#102;&#111;&#64;&#101;&#100;&#103;&#101;&#45;&#115;&#110;&#111;&#119;&#115;&#112;&#111;&#114;&#116;&#46;&#99;&#111;&#46;&#117;&#107;
                    </a>
                </p>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-5">
                <img src="{{ asset('img/equipment/buff.png') }}" alt="New Edge Snowsport buffs" class="card-img-top">

                <div class="card-body align-items-start">
                    <h3 class="mb-0">
                        <span class="badge bg-success">New!</span>
                        Headgear
                    </h3>
                    <p class="card-text mb-auto">
                        Open-weave winter textile, warm, moisture-wicking, breathable and quick-drying
                    </p>
                </div>
            </div>
        </div>
    </div>

    <h1 class="text-center mb-3">What We Do</h1>

    <div id="homepageCarousel" class="carousel slide mb-5 rounded" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#homepageCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homepageCarousel" data-slide-to="1"></li>
            <li data-target="#homepageCarousel" data-slide-to="2"></li>
            <li data-target="#homepageCarousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active carousel-img rounded" style="background-image: url('/img/services/sander.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Ski & Snowboard Servicing</h4>
                    <p>
                        Let’s be clear, your kit is expensive, so surely you
                        want to keep it in tip top shape. Edge Snowsport
                        specialise in ski & snowboard equipment tuning and
                        have the service to match your needs.
                    </p>
                    <a href="{{ route('static.services') }}" class="btn btn-primary mb-3">
                        Learn More<i class="fas fa-fw fa-angle-double-right ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-item carousel-img rounded" style="background-image: url('img/equipment/boots.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Equipment Distributor</h4>
                    <p>
                        We can provide Dynastar, Lange and Kerma ski and
                        snowboard equipment, offering great prices with
                        deals available to local clubs. Our orders are
                        custom and we have lots of experience so can provide
                        top advice too.
                    </p>
                    <a href="{{ route('static.equipment') }}" class="btn btn-primary mb-3">
                        Learn More<i class="fas fa-fw fa-angle-double-right ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-item carousel-img rounded" style="background-image: url('img/gates/jaggy.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Race Gates</h4>
                    <p>
                        Edge Snowsport are the official UK distributor of
                        Eurogripp slalom poles and equipment and
                        manufacturer of custom dry slope stubbies and gates.
                    </p>
                    <a href="{{ route('static.gates') }}" class="btn btn-primary mb-3">
                        Learn More<i class="fas fa-fw fa-angle-double-right ml-2"></i>
                    </a>
                </div>
            </div>
            <div class="carousel-item carousel-img rounded" style="background-image: url('/img/header/kaprun_washed.jpg');">
                <div class="carousel-caption d-none d-md-block">
                    <h4>Kaprun Ski Apartment</h4>
                    <p>
                        Available to rent, Apartment Alba is situated in a
                        quiet residential area in the beautiful alpine
                        resort of Kaprun, just a 2 minute walk to amenities
                        and bus stops servicing pistes at Maiskogel, Zell am
                        See and the Kitzsteinhorn.
                    </p>
                    <a href="{{ url('/apartment') }}" class="btn btn-primary mb-3">
                        Learn More<i class="fas fa-fw fa-external-link-alt ml-2"></i>
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#homepageCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#homepageCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div id="layout-xs" class="d-block d-md-none">
        <div class="mb-4 text-center">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/hotbox-200x200.jpg');">
            </div>
            <h2 class="my-3 ">Waxing Hotbox</h2>
            <p>
                Our unique waxing Hot Box keeps the wax warm for longer,
                allowing the base to absorb more of it, and is
                equivalent to (and much cheaper than) up to
                <strong>six</strong> wax-scrape cycles.
            </p>
             <a class="btn btn-secondary" href="#">
                Learn more<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>
        <hr class="my-5">
        <div class="mb-4 text-center">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/sander-200x200.jpg');">
            </div>
            <h2 class="my-3 ">Wet Belt Sander</h2>
            <p>
                Our RoffB LM18S sander with edging head will transform
                your bases and edges if required, giving them a new look
                and performance, ready for waxing.
            </p>
            <a class="btn btn-secondary" href="#" role="button">
                More info<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>
        <hr class="my-5">
        <div class="mb-4 text-center">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/van-200x200.jpg');">
            </div>
            <h2 class="my-3 ">Wet Belt Sander</h2>
            <p>
                Our RoffB LM18S sander with edging head will transform
                your bases and edges if required, giving them a new look
                and performance, ready for waxing.
            </p>
            <a class="btn btn-secondary" href="#" role="button">
                View details<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>
    </div>

    <div id="layout-lg" class="d-none d-md-block">

    <div class="row mt-5">
        <div class="col-md-4">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/hotbox-200x200.jpg');">
            </div>
        </div>

        <div class="col-md-4">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/sander-200x200.jpg');">
            </div>
        </div>

        <div class="col-md-4">
            <div
            class="featurette-img rounded-circle mx-auto"
            style="background-image: url('img/services/van-200x200.jpg');">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h2 class="my-3 text-center">Waxing Hotbox</h2>
            <p class="text-center">
                Our unique waxing Hot Box keeps the wax warm for longer,
                allowing the base to absorb more of it, and is
                equivalent to (and much cheaper than) up to
                <strong>six</strong> wax-scrape cycles.
            </p>
        </div>

        <div class="col-md-4">
            <h2 class="my-3 text-center">Wet Belt Sander</h2>
            <p class="text-center">
                Our RoffB LM18S sander with edging head will transform
                your bases and edges if required, giving them a new look
                and performance, ready for waxing.
            </p>
        </div>

        <div class="col-md-4">
            <h2 class="my-3 text-center">Delivery Service</h2>
            <p class="text-center">
                The Edge Snowsport van will collect and drop off your
                equipment if you live or work within Aberdeen City boundary.
                Contact us for other arrangements.
            </p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 text-center">
             <a class="btn btn-secondary" href="#">
                Learn more<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>

        <div class="col-md-4 text-center">
            <a class="btn btn-secondary" href="#" role="button">
                More info<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>

        <div class="col-md-4 text-center">
            <a class="btn btn-secondary" href="#" role="button">
                View details<i class="fas fa-fw fa-angle-double-right ml-2"></i>
            </a>
        </div>
    </div>

</div>

        <!--
        <div class="card mb-4">
            <h3 class="card-header">Latest News</h3>
            <div class="card-body">
                <div class="card-text">
                    <h5>Lorem ipsum dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore...
                    </p>
                    <div class="text-right">
                        <a href="#">Read more &raquo;</a>
                    </div>
                </div>
                <hr>
                <div class="card-text">
                    <h5>Lorem ipsum dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore...
                    </p>
                    <div class="text-right">
                        <a href="#">Read more &raquo;</a>
                    </div>
                </div>
                <hr>
                <div class="card-text">
                    <h5>Lorem ipsum dolor</h5>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et
                        dolore...
                    </p>
                    <div class="text-right">
                        <a href="#">Read more &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        -->
    </div>

</div>

@endsection

<!--
<h1>Scotland's Only Wax Hotbox</h1>
<p>Our unique waxing Hot Box keeps the wax warm for longer, allowing the base to absorb more of it, and is equivalent to (and much cheaper than) up to six wax-scrape cycles.</p>
-->
