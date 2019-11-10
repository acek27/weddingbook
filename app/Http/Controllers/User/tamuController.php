<?php

namespace App\Http\Controllers\User;

use App\models\dataTamu;
use App\models\keterangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use Barryvdh\DomPDF\Facade as PDF;

class tamuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.dataTamu');
    }

    public function dataTamu(Request $request)
    {
        if ($request->id == 0) {
            return DataTables::of(dataTamu::where('id_user', Auth::user()->id))
                ->addColumn('Uang', function ($data) {
                    return 'Rp. ' . number_format($data->uang, 0, ',', '.');
                })
                ->addColumn('action', function ($data) {
                    $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="material-icons">delete_forever</i></a>';
                    $edit = '<a href="' . route('dataTamu.edit', $data->id) . '"><i class="material-icons">edit</i></a>';
                    return $edit . '&nbsp' . $del;
                })
                ->make(true);
        } else {
            return DataTables::of(dataTamu::where('id_user', Auth::user()->id)->where('id_ket', $request->id))
                ->addColumn('Uang', function ($data) {
                    return 'Rp. ' . number_format($data->uang, 0, ',', '.');
                })
                ->addColumn('action', function ($data) {
                    $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="material-icons">delete_forever</i></a>';
                    $edit = '<a href="' . route('dataTamu.edit', $data->id) . '"><i class="material-icons">edit</i></a>';
                    return $edit . '&nbsp' . $del;
                })
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Responsereturn DataTables::of(dataTamu::all()->where('id_user', Auth::user()->id))
     * ->addColumn('action', function ($data) {
     * //                $del = '<a href="#" data-id="' . $data->id . '" class="btn btn-danger hapus-data"><i class="fa fa-times"></i></a>';
     * //                $edit = '<a href="' . route($this->route . '.edit', [$this->route => $data->id]) . '" class="btn btn-primary"><i class="fa fa-pencil"></i></a>';
     * //                return $edit . '&nbsp' . $del;
     * })
     * ->make(true);
     */
    public function create()
    {
        //
    }

    public function generatePDF($id)
    {
        if ($id == 1) {
            $data = dataTamu::where('id_ket', $id)
                ->where('id_user', Auth::user()->id)
                ->get();
            $pdf = PDF::loadView('myPDF', compact('data'));
            return $pdf->stream('Buku Tamu Undangan' . date('Y'));
        } elseif ($id == 2) {
            $data = dataTamu::where('id_ket', $id)
                ->where('id_user', Auth::user()->id)
                ->get();
            $pdf = PDF::loadView('myPDF', compact('data'));
            return $pdf->stream('Buku Tamu Undangan' . date('Y'));
        } elseif ($id == 3) {
            $data = dataTamu::where('id_user', Auth::user()->id)
                ->get();
            $pdf = PDF::loadView('myPDF', compact('data'));
            return $pdf->stream('Buku Tamu Undangan' . date('Y'));
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = dataTamu::findOrFail($id);
        $ket = keterangan::all();
        return view('user.editData', compact('data', 'ket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dataTamu::destroy($id);
    }
}
