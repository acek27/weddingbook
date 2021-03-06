<?php

namespace App\Http\Controllers\User;

use App\models\dataTamu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class dataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = dataTamu::all()->where('id_user',Auth::user()->id);
        return view('user.tambahData',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'uang' => 'numeric|required',
            'beras' => 'nullable|numeric',
            'gula' => 'nullable|numeric'
        ]);
        $add = new dataTamu();
        $add->nama_tamu = $request->get('nama');
        $add->alamat = $request->get('alamat');
        $add->uang = $request->get('uang');
        $add->beras = $request->get('beras');
        $add->gula = $request->get('gula');
        $add->lain = $request->get('lain');
        $add->id_ket = $request->get('keterangan');
        $add->id_user = Auth::user()->id;
        $add->save();
        \Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menambah tamu : $request->nama"
        ]);
        return redirect('/user/userData');
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
        //
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
        $request->validate([
            'uang' => 'numeric|required',
            'beras' => 'nullable|numeric',
            'gula' => 'nullable|numeric'
        ]);
        $update = dataTamu::findOrFail($id);
        $update->nama_tamu = $request->get('nama');
        $update->alamat = $request->get('alamat');
        $update->uang = $request->get('uang');
        $update->beras = $request->get('beras');
        $update->gula = $request->get('gula');
        $update->lain = $request->get('lain');
        $update->id_ket = $request->get('keterangan');
        $update->update();
        \Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil mengedit tamu : $request->nama"
        ]);
        return redirect('/user/dataTamu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
