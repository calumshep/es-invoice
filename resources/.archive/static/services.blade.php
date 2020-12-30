@extends('layouts.static')

@section('top-image', '/img/header/workshop_washed.jpg')

@section('content')

    <div class="container">

        <div class="jumbotron mb-5">
            <h1 class="display-4">Services</h1>
            <p class="lead" style="font-size: 1.1rem;">
                Let’s be clear, your kit is expensive, so surely you want to
                keep it in tip top shape. In general, you want your bases to be
                flat and waxed to repel water, so you glide effortlessly over
                the snow, and you want your edges sharp so that they grip and
                hold the line you are carving.<br>Listed below are all of the
                services that we can provide to your equipment in our workshop.
                Read on for more information!
            </p>
        </div>

        <p class="lead">
            Our services are split into two categories,
            <strong>services</strong> and <strong>add-ons</strong>.
            Add-ons can be added on to any service that doesn't
            already include it, and some can be bought alone.
        </p>

        <div class="card mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline">
                    <p class="lead mb-0">New to ski/snowboard servicing?</p>
                    <a href="{{ url('/about#technical') }}" class="btn btn-primary card-text">
                        Learn More<i class="fas fa-fw fa-angle-double-right ml-2"></i>
                    </a>
                </div>
            </div>
        </div>

        <h1 class="display-2 text-center">Services</h1>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8">
                <h3 class="display-4">Hot Wax</h3>
                <h5 class="text-muted">£10</h5>
                <p>If all you need is a wax job, no problem. We will clean out the bases and hot iron on a good dose of Universal wax, or other wax of choice (some specific waxes come at a small additional cost). We will then scrape, brush and polish the bases so they are super slick for your next shred. If you are storing your kit at the end of the season, you might want to just leave the wax on. All that said, if you are going to get the kit seen to, why wouldn’t you want the edges sharpened too?</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/wax.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8 order-md-last">
                <h3 class="display-4">Edge & Wax</h3>
                <h5 class="text-muted">£25</h5>
                <p>Base and side edges tuned to the manufatcurer's specification (or other angles as requested), plus a Hot Wax as above. The metal edges will be hand tuned with different grades of steel and diamond files, removing the minimum amount of metal required to get the sharp edge you need to be sure of grip on the hard packed piste.</p>
                <p>We’ll also throw in two Edge Snowsport ski ties (for skis only, obviously) to keep them looking good till you hit the slopes. You might want additional ski ties, too (three is the norm), so see below for more info.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/edging.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8">
                <h3 class="display-4">Full Service</h3>
                <h5 class="text-muted">£35</h5>
                <p>If your bases are badly scratched and gouged and need re-structured, or they have had several P-tex repairs, we'll run them through the wet-belt sander to breathe new life into them. The Full Service also includes an Edge & Wax, as described above.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/sander.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8 order-md-last">
                <h3 class="display-4">Holiday Prep</h3>
                <h5 class="text-muted">£40</h5>
                <p>An Edge & Wax, plus a Toko Express Pocket and three ski ties for you. If you are going on holiday, waxing alone will only last a couple of days. Topping up with the Toko Express Pocket at the end of each day is quick and easy, and will make that wax job last the whole week. The ski ties will help prevent your skis being damaged during transportation.</p>
            </div>
            <div class="col-md-4">
                <img src="https://edge-snowsport.co.uk/assets/img/services/holprep.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr class="mb-5">

        <h1 class="display-2 text-center">Add-ons</h1>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8">
                <h3 class="display-4">Base Repairs</h3>
                <h5 class="text-muted">+ £5-10</h5>
                <p>Minor scratches and gouges any deeper than a couple of milimetres should be filled with P-tex and welded to the original base material - £5 per ski. Bigger deeper holes and core shots will need some metal grip prior to P-tex filling - £10 for up to a thumbnail size. Other repairs costed as seen.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/structure.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8 order-md-last">
                <h3 class="display-4">Hot Box</h3>
                <h5 class="text-muted">£20 alone / + £10 add-on</h5>
                <p>A 4-hour sauna in our Hot Box will have will have the base structure full of wax and sliding fast on snow. This can be the equivalent of up to 6 wax and scrape cycles, all for a £10 add-on to any of the other services, or £20 alone.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/hotbox.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8">
                <h3 class="display-4">Toko Express Mini</h3>
                <h5 class="text-muted">£10</h5>
                <p>This compact and lightweight service tech is the perfect gift and company for your holiday, or simply shredding home snow at the weekend. Quick and simple to apply, this will extend the life of your wax job, and topping up each night should make the Holiday Prep service last all week.</p>
            </div>
            <div class="col-md-4">
                <img src="https://www.toko.ch/fileadmin/_processed_/0/9/csm_5509259_Express_Mini_1bc86b18ad.jpg" class="img-fluid rounded">
            </div>
        </div>

        <hr>

        <div class="row align-items-center py-4">
            <div class="col-md-8 order-md-last">
                <h3 class="display-4">Ski Tie</h3>
                <h5 class="text-muted">£2</h5>
                <p>Ski ties make the skis easier to carry, but also protect the skis from damage. Metal-to-metal edge contact can result in accelerated rusting of the edges. Base-on-base rubbing also creates scratches across the structure of the ski, or worse if grains of salt or grit are trapped between the skis. Two ski ties will help to prevent damage, but three will completely protect the skis and make them much easier to carry and handle.</p>
            </div>
            <div class="col-md-4">
                <img src="/img/services/tie.jpg" class="img-fluid rounded">
            </div>
        </div>

    </div>

@endsection

