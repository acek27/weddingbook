@extends('master.layout')
@section('title')
    <title>WeBook | Tambah Data</title>
@endsection

@section('subtitle')
    TAMBAH DATA
@endsection
@section('content')
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session()->get('flash_notification.message') !!}
        </div>
    @endif
    <div class="row clearfix">
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="header">
                    <h2>Form Tambah Data Baru</h2>
                </div>
                <div class="body">
                    {!! Form::open(['url'=>route('userData.store'), 'method'=>'post']) !!}
                    {{ csrf_field() }}
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Nama Tamu</h2>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                <div class="form-line">
                                    <input style="text-transform: uppercase" type="text" name="nama"
                                           value="{{old('nama')}}" class="form-control date"
                                           placeholder="Inputkan nama tamu" required autofocus>
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
                                    <input style="text-transform: capitalize" value="{{old('alamat')}}" type="text"
                                           name="alamat" class="form-control date"
                                           placeholder="Inputkan Alamat" required>
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
                                    <input type="text" name="uang" class="form-control date"
                                           placeholder="Inputkan Uang">
                                </div>
                                @if ($errors->any())
                                    {!! $errors->first('uang', '<p style="font-size: 12px; color:red">ERROR! input uang Harus Berupa Angka</p>') !!}
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Beras (KG)</h2>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">spa</i>
                                        </span>
                                <div class="form-line">
                                    <input type="text" name="beras" class="form-control date"
                                           placeholder="Inputkan Beras">
                                </div>
                                @if ($errors->any())
                                    {!! $errors->first('beras', '<p style="font-size: 12px; color:red">ERROR! input beras Harus Berupa Angka</p>') !!}
                                @endif
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
                                    <input type="text" name="gula" class="form-control date"
                                           placeholder="Inputkan Gula">
                                </div>
                                @if ($errors->any())
                                    {!! $errors->first('gula', '<p style="font-size: 12px; color:red">ERROR! input gula Harus Berupa Angka</p>') !!}
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Keterangan</h2>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">sync</i>
                                        </span>
                                <div class="form-line">
                                    <select name="keterangan" class="form-control show-tick">
                                        <option value="1">Baru</option>
                                        <option value="2">Kembali</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <h2 class="card-inside-title">Lain-lain</h2>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea name="lain" rows="4" class="form-control no-resize"
                                              placeholder="Inputkan selain uang, beras dan gula.. (contoh: telur 10kg)"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn bg-indigo waves-effect col-md-4">
                                <i class="material-icons">save</i>
                                <span>SIMPAN</span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Task Info -->
        <!-- Browser Usage -->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="header">
                    <h2>RINCIAN DATA</h2>
                </div>
                <div class="body table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="color: #0c5460">ITEM</th>
                            <th style="color: #0c5460">KETERANGAN</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Tamu</th>
                            <td>{{$data->count('id')}} Orang</td>
                        </tr>
                        <tr>
                            <th scope="row">Uang</th>
                            <td>Rp. {{number_format($data->sum('uang'),0,',','.')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">Beras</th>
                            <td>{{$data->sum('beras')}} Kg</td>
                        </tr>
                        <tr>
                            <th scope="row">Gula</th>
                            <td>{{$data->sum('gula')}} Kg</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
