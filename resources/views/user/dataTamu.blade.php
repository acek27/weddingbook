@extends('master.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/jquery-datatables-editable/datatables.css')}}"/>
    <!-- DataTables -->
    <link href="{{asset('plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
@endsection
@section('title')
    <title>WeBook | Data Tamu</title>
@endsection

@section('subtitle')
    DATA TAMU
@endsection
@section('content')
    @if (session()->has('flash_notification.message'))
        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {!! session()->get('flash_notification.message') !!}
        </div>
    @endif
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                @php
                    $pilihan = 0;
                    if (Request::has('id')){
                        $pilihan = Request::get('id');
                    }
                @endphp
                <div class="header">
                    <h2>
                        TABEL DATA TAMU - @if($pilihan == 0)<strong> SEMUA</strong>
                        @elseif($pilihan == 1) <strong style="color: green"> BARU</strong>
                        @elseif($pilihan == 2) <strong style="color: red"> KEMBALI</strong>
                        @elseif($pilihan == 3) <strong style="color: grey"> SUDAH DIKEMBALIKAN</strong>
                        @endif
                    </h2>
                </div>
                <div class="row clearfix">
                    <div class="body">
                        <div class="col-md-4" style="margin-bottom: 0px">
                            <h2 class="card-inside-title" style="margin-top: 0px;margin-bottom: 0px">Tampilkan
                                berdasarkan :</h2>
                            <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">import_export</i>
                                        </span>
                                <div class="form-line">
                                    <select name="keterangan" class="form-control show-tick" id="list">
                                        <option value="0" @if($pilihan == 0) selected @endif>Semua</option>
                                        <option value="1" @if($pilihan == 1) selected @endif>Baru</option>
                                        <option value="2" @if($pilihan == 2) selected @endif>Kembali</option>
                                        <option value="3" @if($pilihan == 3) selected @endif>Sudah dikembalikan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button type="button" class="btn btn-primary waves-effect dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <i class="material-icons">print</i>
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('generate.pdf',3)}}" target="_blank" class=" waves-effect waves-block">Semua
                                    buku tamu</a></li>
                            <li><a href="{{route('generate.pdf',1)}}" target="_blank" class=" waves-effect waves-block">Buku
                                    tamu baru</a></li>
                            <li><a href="{{route('generate.pdf',2)}}" target="_blank" class=" waves-effect waves-block">Buku
                                    tamu kembali</a></li>
                        </ul>
                    </div>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table style="text-align: center" id="data_tamu"
                               class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th style="width: 7%;text-align: center; vertical-align: middle">ID</th>
                                <th style="width: 20%; text-align: left; vertical-align: middle">Nama Tamu</th>
                                <th style="text-align: center; vertical-align: middle">Alamat</th>
                                <th style="text-align: center; vertical-align: middle">Uang</th>
                                <th style="width: 10%;text-align: center; vertical-align: middle">Beras</th>
                                <th style="width: 10%;text-align: center; vertical-align: middle">Gula</th>
                                <th style="text-align: center; vertical-align: middle">Lain-lain</th>
                                @if($pilihan != 0 && $pilihan != 3)
                                    <th style="text-align: center; vertical-align: middle">Action</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{asset('plugins/jquery-datatables-editable/jquery.dataTables.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('js/jquery.datatables.init.js')}}"></script>
    <script>
        $(document).ready(function () {
            var dt = $('#data_tamu').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('tamu.data')}}?id={{$pilihan}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nama_tamu', name: 'nama_tamu'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'Uang', name: 'Uang'},
                    {data: 'beras', name: 'beras'},
                    {data: 'gula', name: 'gula'},
                    {data: 'lain', name: 'lain'},
                        @if($pilihan != 0 && $pilihan != 3)
                    {
                        data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'
                    },
                    @endif
                ]
            });

            $('#list').change(function () {
                document.location.href = '{{route('dataTamu.index')}}?id=' + $('#list').val();
            });

            var del = function (id) {
                swal({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat mengembalikan data yang sudah terhapus!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya!",
                    cancelButtonText: "Tidak!",
                }).then(
                    function (result) {
                        $.ajax({
                            url: "{{route('dataTamu.index')}}/" + id,
                            method: "DELETE",
                        }).done(function (msg) {
                            dt.ajax.reload();
                            swal("Deleted!", "Data sudah terhapus.", "success");
                        }).fail(function (textStatus) {
                            alert("Request failed: " + textStatus);
                        });
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                        swal("Cancelled", "Data batal dihapus", "error");
                    });
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });

            var update = function (id) {
                swal({
                    title: "Apakah anda yakin?",
                    text: "Data akan dipindahkan pada tabel pengembalian!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Iya!",
                    cancelButtonText: "Tidak!",
                }).then(
                    function (result) {
                        $.ajax({
                            url: "/user/dataTamu/"+id,
                            method: "PUT",
                        }).done(function (msg) {
                            dt.ajax.reload();
                            swal("Success!", "Data berhasil diupdate.", "success");
                        }).fail(function (textStatus) {
                            alert("Request failed: " + textStatus);
                        });
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                        swal("Cancelled", "Data batal dihapus", "error");
                    });
            };
            $('body').on('click', '.update-data', function () {
                update($(this).attr('data-id'));
            });

        });
    </script>
@endpush
