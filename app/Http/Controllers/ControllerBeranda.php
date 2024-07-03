<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerBeranda extends Controller
{
    public function index()
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $beranda = DB::table('beranda')->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('dashboard/beranda/beranda', ['beranda' => $beranda]);
    }

    public function add()
    {
        return view('dashboard/beranda/add');
    }

    public function simpan(Request $request)
    {
        if($request->txt_status_tampil_beranda==1){
            DB::table('beranda')->update([
                'status_tampil_beranda' => 0
            ]);
        }

        $file = $request->file('txt_file_gambar_beranda');
		$nama_file = time().".".$file->getClientOriginalExtension();
		$tujuan_upload = 'assets/website/assets/images';
        DB::table('beranda')->insert([
            'judul_beranda' => $request->txt_judul_beranda,
            'deskripsi_judul_beranda' => $request->txt_deskripsi_judul,
            'deskripsi_beranda' => $request->txt_deskripsi_beranda,
            'file_gambar_beranda' => $nama_file,
            'status_tampil_beranda' => $request->txt_status_tampil_beranda,
        ]);
        $file->move($tujuan_upload,$nama_file);
        return redirect('/dashboard/beranda');
    }

    public function edit($id)
    {
        $beranda = DB::table('beranda')->where('id',$id)->get();
        return view('dashboard/beranda/edit', ['beranda' => $beranda]);
    }



}
