@extends('layouts.static')

@section('top-image', '/img/header/workshop_washed.jpg')

@section('content')

    <div class="container">

        <div class="jumbotron mb-5">
            <h1 class="display-4">Equipment</h1>
            <p class="lead" style="font-size: 1.1rem;">
                Edge Snowsport is an official provider of Dynastar ski and
                snowboard equipment, as well as associated brands Look, Lange
                and Kerma. We can also provide Toko and DataWax tuning
                equipment, tools and waxes.
            </p>
        </div>

        <img class="img-fluid rounded mb-5" src="http://cdn.dynastar.com/uploads/cache/w1370/uploads/images/default/5b6c112adb093.jpg" alt="Dynastar core values">

        <h1 class="display-2 text-center">The Brands</h1>

        <hr>

        <div style="background-color: white;" class="p-3 my-3">
            <img
            src="/img/brands/equip.png"
            class="img-fluid rounded"
            alt="Dynastar brands">
        </div>

        <div class="card-columns">
            <div class="card">
                <img class="card-img" src="/img/equipment/boots.jpg" alt="Lange boots">
                <div class="card-img-overlay">
                    <h5 class="card-title">Lange Boots</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="/img/equipment/bag.jpeg" alt="Lange bag">
                <div class="card-img-overlay">
                    <h5 class="card-title">Lange Kit Bags</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="/img/equipment/kerma.jpeg" alt="Kerma protection">
                <div class="card-img-overlay">
                    <h5 class="card-title">Kerma Race Protection</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="/img/equipment/skis_crap.jpeg" alt="Dynastar skis">
                <div class="card-img-overlay">
                    <h5 class="card-title">Dynastar Skis</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="https://www.datawax.com/ski-snowboard/image/cache/catalog/Snow%20Servicing%20Technical%20Kit-800x644.jpg" alt="Datawax kit">
                <div class="card-img-overlay">
                    <h5 class="card-title">DataWax Tools & Waxes</h5>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="https://www.toko.ch/fileadmin/_processed_/2/6/csm_Toko_Tools_rund_ec76c88f5f.png" alt="Toko kit">
                <div class="card-img-overlay">
                    <h5 class="card-title">Toko Tools & Waxes</h5>
                </div>
            </div>
        </div>

        <hr class="mb-5">

        <div class="row">

            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                       <div class="d-flex justify-content-between align-items-baseline card-text">
                            <h5>Product Catalogue</h5>
                            <a href="#" class="btn btn-success">
                                Download<i class="fas fa-external-link-alt ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <p class="lead">
                    All our orders are customised to fit your needs, and we are
                    equipment specialists, so contact us to discuss your
                    requirements!
                </p>
            </div>

        </div>

    </div>

@endsection

