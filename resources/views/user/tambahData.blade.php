@extends('master.layout')
@section('title')
    <title>WeBook | Tambah Data</title>
@endsection

@section('subtitle')
    TAMBAH DATA
@endsection
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <div class="card">
            <div class="header">
                <h2>Form Tambah Data Baru</h2>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Nama Tamu</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Inputkan nama tamu">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-sm-12">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Alamat</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">place</i>
                                        </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Inputkan Alamat">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Uang (Rupiah)</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">monetization_on</i>
                                        </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Inputkan Uang">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Beras (KG)</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">spa</i>
                                        </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Inputkan Beras">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Gula (KG)</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">business_center</i>
                                        </span>
                            <div class="form-line">
                                <input type="text" class="form-control date" placeholder="Inputkan Gula">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Keterangan</h2>
                        <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">sync</i>
                                        </span>
                            <div class="form-line">
                                <select class="form-control show-tick">
                                    <option value="1">Baru</option>
                                    <option value="1">Kembali</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <h2 class="card-inside-title">Lain-lain</h2>
                        <div class="form-group">
                            <div class="form-line">
                                    <textarea rows="4" class="form-control no-resize"
                                              placeholder="Inputkan selain uang, beras dan gula.. (contoh: telur 10kg)"></textarea>
                            </div>
                        </div>
                        <button type="button" class="btn bg-indigo waves-effect col-md-4">
                            <i class="material-icons">save</i>
                            <span>SIMPAN</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Task Info -->
    <!-- Browser Usage -->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="card">
            <div class="header">
                <h2>Tata Cara Pengisian</h2>
            </div>
            <div class="body">
                <div id="donut_chart" class="dashboard-donut-chart"></div>
            </div>
        </div>
    </div>
@endsection