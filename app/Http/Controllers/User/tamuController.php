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
                ->make(true);
        } else {
            return DataTables::of(dataTamu::where('id_user', Auth::user()->id)->where('id_ket', $request->id))
                ->addColumn('Uang', function ($data) {
                    return 'Rp. ' . number_format($data->uang, 0, ',', '.');
                })
                ->addColumn('action', function ($data) {
                    if ($data->id_ket != 1) {
                        $edit = '<a href="' . route('dataTamu.edit', $data->id) . '"><i class="material-icons">edit</i></a>';
                        $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="material-icons">delete_forever</i></a>';
                        return $edit . '&nbsp' . $del;
                    } else {
                        $edit = '<a href="' . route('dataTamu.edit', $data->id) . '"><i class="material-icons">edit</i></a>';
                        $del = '<a href="#" data-id="' . $data->id . '" class="hapus-data"><i class="material-icons">delete_forever</i></a>';
                        $send = '<a href="#" data-id="' . $data->id . '" class="update-data"><i class="material-icons">forward</i></a>';
                        return $edit . '&nbsp' . $del . '&nbsp' . $send;
                    }
                })
                ->make(true);
        }
    }


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
        $data = dataTamu::findOrFail($id);
        $data->id_ket = 3;
        $data->update();
        return $data;
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
