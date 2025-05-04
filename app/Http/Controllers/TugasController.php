<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tugas;
use App\Models\User;

class TugasController extends Controller
{
    public function index(){
        $data = array(
            'title' => 'Data Tugas',
            'menuAdminUser' => 'active',
            'tugas' => Tugas::with('user')->get(),
        );
        return view('admin/tugas/index', $data);
    }
    public function create(){
        $data = array(
            'title' => 'Tambah Data Tugas',
            'menuAdminUser' => 'active',
            'user' => User::where('jabatan', 'Karyawan')->where('is_tugas', false)->get(),
        );
        return view('admin/tugas/create', $data);
    }
    public function store(Request $request){
        $request->validate([
            'user_id'           => 'required',
            'tugas'             => 'required',
            'tanggal_mulai'     => 'required',
            'tanggal_selesai'   => 'required',
        ],[
            'user_id.required' => 'Nama Tidak Boleh Kosong',
            'tugas.required' => 'Tugas Tidak Boleh Kosong',
            'tanggal_mulai.required' => 'Tanggal Mulai Tidak Boleh Kosong',
            'tanggal_selesai.required' => 'Tanggal Selesai Tidak Boleh Kosong',
        ]);
        
        $user = User::findOrFail($request->user_id);

        $tugas = new Tugas;
        $tugas->user_id = $request->user_id;
        $tugas->tugas = $request->tugas;
        $tugas->tanggal_mulai = $request->tanggal_mulai;
        $tugas->tanggal_selesai = $request->tanggal_selesai;
        $tugas->save();
        $user->is_tugas = true;
        $user->save();

        return redirect()->route('tugas')->with('success', 'Berhasil Menambahkan Data Tugas ');
    }
    public function edit($id){
        $data = array(
            'title' => 'Edit Data Tugas',
            'menuAdminUser' => 'active',
            'tugas' => Tugas::with('user')->findOrFail($id), 
        );
        return view('admin/tugas/edit', $data);
    }
    public function update(Request $request, $id){
        $request->validate([
            'tugas'             => 'required',
            'tanggal_mulai'     => 'required',
            'tanggal_selesai'   => 'required',
        ],[
            'tugas.required' => 'Tugas Tidak Boleh Kosong',
            'tanggal_mulai.required' => 'Tanggal Mulai Tidak Boleh Kosong',
            'tanggal_selesai.required' => 'Tanggal Selesai Tidak Boleh Kosong',
        ]);

        $tugas = Tugas::findOrFail($id);
        $tugas->tugas = $request->tugas;
        $tugas->tanggal_mulai = $request->tanggal_mulai;
        $tugas->tanggal_selesai = $request->tanggal_selesai;
        $tugas->save();

        return redirect()->route('tugas')->with('success', 'Berhasil Mengubah Data Tugas');
    }
    public function destroy($id){
        $tugas = Tugas::findOrFail($id);
        $user = User::where('id', $tugas->user_id)->first();
        $user->is_tugas = false;
        $user->save();
        $tugas->delete();
        return redirect()->route('tugas')->with('success', 'Berhasil Menghapus Data Tugas');
    }
}
