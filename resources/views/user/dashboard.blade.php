@extends('master.layout')
@section('title')
    <title>WeBook | Beranda</title>
@endsection

@section('subtitle')
    BERANDA
@endsection

@section('content')
    <!-- Widgets -->
    <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-pink hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">people</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL TAMU</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-cyan hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">monetization_on</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL UANG (RP)</div>
                    <div class="number count-to" data-from="0" data-to="257" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-light-green hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">spa</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL BERAS (KG)</div>
                    <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-orange hover-expand-effect">
                <div class="icon">
                    <i class="material-icons">business_center</i>
                </div>
                <div class="content">
                    <div class="text">TOTAL GULA (KG)</div>
                    <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->
@endsection