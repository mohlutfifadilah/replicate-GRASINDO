<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use App\Models\User;
use Illuminate\Http\Request;

class PendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pendaftar = Pendaftar::where('status', 0)->distinct('created_at')->limit(1)->get();
        return view('admin.pendaftar.index', compact('pendaftar'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $get = Pendaftar::find($id);
        $pendaftar = Pendaftar::where('kode_pendaki', $get->kode_pendaki)->where('status', 0)->get();
        return view('admin.pendaftar.info',compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function success($id){
        // Temukan pengguna berdasarkan ID
        $get = Pendaftar::find($id);
        // Mengubah status menjadi 1 untuk semua pendaftar yang ditemukan
        Pendaftar::where('kode_pendaki', $get->kode_pendaki)->where('status', 0)->update(['status' => 1]);

        // Alihkan kembali ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('pendaftar.index');
    }
}
