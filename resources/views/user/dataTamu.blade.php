@extends('master.layout')
@section('css')
    <link rel="stylesheet" href="/plugins/jquery-datatables-editable/datatables.css"/>
    <!-- DataTables -->
    <link href="/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="/plugins/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="/js/jquery.datatables.init.js"></script>
    <script>
        $(document).ready(function () {
            var dt = $('#data_tamu').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{route('tamu.data')}}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'nama_tamu', name: 'nama_tamu'},
                    {data: 'alamat', name: 'alamat'},
                    {data: 'Uang', name: 'Uang'},
                    {data: 'beras', name: 'beras'},
                    {data: 'gula', name: 'gula'},
                    {data: 'lain', name: 'lain'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, align: 'center'},
                ]
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
                            url: "{{route('dataTamu.index')}}/"+id,
                            method: "DELETE",
                        }).done(function( msg ) {
                            dt.ajax.reload();
                            swal("Deleted!", "Data sudah terhapus.", "success");
                        }).fail(function( textStatus ) {
                            alert( "Request failed: " + textStatus );
                        });
                    }, function (dismiss) {
                        // dismiss can be 'cancel', 'overlay', 'esc' or 'timer'
                        swal("Cancelled", "Data batal dihapus", "error");
                    });
            };
            $('body').on('click', '.hapus-data', function () {
                del($(this).attr('data-id'));
            });

        });
    </script>
@endpush
