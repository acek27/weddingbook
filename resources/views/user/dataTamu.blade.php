@extends('master.layout')
@section('css')
    <link href="{{asset('css/datatables/tools/css/dataTables.tableTools.css')}}" rel="stylesheet"/>
@endsection
@section('title')
    <title>WeBook | Data Tamu</title>
@endsection

@section('subtitle')
    DATA TAMU
@endsection
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        TABEL DATA TAMU
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table style="text-align: center" id="data_tamu"
                               class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="width: 7%;text-align: center; vertical-align: middle">ID</th>
                                <th style="width: 25%; text-align: left; vertical-align: middle">Nama Tamu</th>
                                <th style="text-align: center; vertical-align: middle">Alamat</th>
                                <th style="text-align: center; vertical-align: middle">Uang</th>
                                <th style="width: 10%;text-align: center; vertical-align: middle">Beras</th>
                                <th style="width: 10%;text-align: center; vertical-align: middle">Gula</th>
                                <th style="text-align: center; vertical-align: middle">Lain-lain</th>
                                <th style="text-align: center; vertical-align: middle">Action</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td style="text-align: left;text-transform: capitalize">{{$value->nama_tamu}}</td>
                                    <td style="text-align: left;text-transform: capitalize">{{$value->alamat}}</td>
                                    <td>Rp. {{number_format($value->uang,0,',','.')}}</td>
                                    <td>{{$value->beras}}</td>
                                    <td>{{$value->gula}}</td>
                                    <td style="text-align: left">{{$value->lain}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('js/datatables/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('js/datatables/tools/js/dataTables.tableTools.js')}}"></script>

@endpush
