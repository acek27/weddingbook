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
                    <div class="number count-to" data-from="0" data-to="{{$data->count('id')}}" data-speed="1000"
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
                    <div class="number count-to" data-from="0" data-to="{{$data->sum('uang')}}"
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
                    <div class="number count-to" data-from="0" data-to="{{$data->sum('beras')}}" data-speed="1000"
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
                    <div class="number count-to" data-from="0" data-to="{{$data->sum('gula')}}" data-speed="1000"
                         data-fresh-interval="20"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Widgets -->

    <div class="row clearfix">
        <!-- Task Info -->
        <div class="col-sm-6">
            <div class="card">
                <div class="body bg-success">
                    <div class="font-bold m-b--35" style="text-align: center">BARU</div>
                    <ul class="dashboard-stat-list">
                        <li>
                            TAMU
                            <span class="pull-right"><b style="font-size: 20px">{{$baru->count('id')}}</b> ORANG</span>
                        </li>
                        <li>
                            UANG
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{number_format($baru->sum('uang'),0,',','.')}}</b> RUPIAH</span>
                        </li>
                        <li>
                            BERAS
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{$baru->sum('beras')}}</b> KILOGRAM</span>
                        </li>
                        <li>
                            GULA
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{$baru->sum('gula')}}</b> KILOGRAM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <div class="col-sm-6">
            <div class="card">
                <div class="body bg-danger">
                    <div class="font-bold m-b--35" style="text-align: center">KEMBALI</div>
                    <ul class="dashboard-stat-list">
                        <li>
                            TAMU
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{$kembali->count('id')}}</b> ORANG</span>
                        </li>
                        <li>
                            UANG
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{number_format($kembali->sum('uang'),0,',','.')}}</b> RUPIAH</span>
                        </li>
                        <li>
                            BERAS
                            <span class="pull-right"><b style="font-size: 20px">{{$kembali->sum('beras')}}</b> KILOGRAM</span>
                        </li>
                        <li>
                            GULA
                            <span class="pull-right"><b
                                    style="font-size: 20px">{{$kembali->sum('gula')}}</b> KILOGRAM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Browser Usage -->
    </div>
@endsection

@push('script')
    <script src="{{asset('js/pages/index.js')}}"></script>
@endpush
