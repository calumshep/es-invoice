@extends('layouts.static')

@section('top-image', '/img/header/workshop_washed.jpg')

@section('content')

    <div class="container">

        <div class="jumbotron mb-5">
            <h1 class="display-4">About us</h1>
            <p class="lead" style="font-size: 1.1rem;">
                Our 2 Service Engineers (yes, we are Engineers!) have a
                combined career history of around 60 years in the Oil & Gas
                business, but more importantly around 70 years in
                snowsports. Graeme is a former partner in the busiest ski
                shop in town back in the day, and Duncan is a Level 2
                Instructor and Race Coach. Between us we know what is
                important for you and your snowsports equipment, and will
                give it our best attention in our fully equipped workshop.
            </p>
        </div>

        <div class="card mb-5" id="technical">
            <div class="card-body text-justify">
                <h3 class="card-title">Technical Info</h3>
                <p>
                    Let’s be clear, your kit is expensive, so surely you want to
                    keep it in tip top shape. In general, you want your bases
                    flat and penetrated with wax to repel water, so you glide
                    effortlessly over the snow. The base plastic of your kit
                    isn’t solid, it has what is called “structure”, which is
                    thousands of very small “cuts” where the wax is placed. The
                    better the wax is placed, the longer it will last. Without
                    wax the base will be dry and have a much higher friction
                    coefficient. Well used skis and boards start to lose the
                    structure and the plastic appears smooth - this might look
                    good but it won’t hold wax and will last a couple of runs at
                    best. We can put a linear structure back on your bases,
                    flat, as new and ready for the wax!
                </p>
                <p>
                    And you want your edges sharp so that they grip and hold the
                    line you are carving. Even if you are still plough turning
                    or at skidded parallel turn stage, sharp edges are needed to
                    help grip and ensure the direction of travel you want. Most
                    manufacturers set the base edge at 1° off flat so that your
                    edge changes are not too abrupt, and side edges range from
                    1° to 3° off 90. We will set yours to the original values
                    unless you specifically want different. Many racers are
                    looking for 1° base and 87° edge, so if it’s good enough for
                    them...
                </p>
                <p>
                    If we are running your kit through the wet belt sander, the
                    base and side edges are done by machine at the same time.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <img class="card-img-top" src="/img/services/hotbox.jpg" alt="Wax hot box">
                    <div class="card-body">
                        <h3 class="card-title">Scotland's Only Wax Hotbox</h3>
                        <p class="card-text">
                            Our unique waxing Hot Box keeps the wax warm for longer,
                            allowing the base to absorb more of it, and is
                            equivalent to (and much cheaper than) up to six
                            wax-scrape cycles.<br>
                            By maintaining an operating temperature of
                            approximately 60&deg;C, the wax stays molten for
                            2-3 hours on the base of the ski, allowing the pores
                            of the plastic to absorb more wax deeper into the
                            base.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-4">
                    <img class="card-img-top" src="/img/services/van.jpg" alt="Edge Snowsport van">
                    <div class="card-body">
                        <h3 class="card-title">Local Collection & Delivery</h3>
                        <p class="card-text">
                            If you live or work in the Aberdeen City area, we
                            can collect and/or deliver your equipment for
                            servicing at a location convenient to you with the
                            Edge Snowsport van. Just ask when ordering your
                            services and we can arrange something.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection

