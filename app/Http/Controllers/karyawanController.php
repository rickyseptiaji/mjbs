<?php

namespace App\Http\Controllers;

use App\Models\datakaryawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = datakaryawan::orderBy('id')->paginate(4);
        return view('karyawan.karyawan')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('karyawan.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('nama', $request->nama);
        Session::flash('email', $request->email);
        Session::flash('nohp', $request->nohp);
        Session::flash('alamat', $request->alamat);
        Session::flash('jabatan', $request->jabatan);
        Session::flash('divisi', $request->divisi);

        $request->validate([
            'nama'=>'required:datakaryawan,nama',
            'jeniskelamin'=>'required:datakaryawan,jeniskelamin',
            'email'=>'required:datakaryawan,email',
            'nohp'=>'required|numeric:datakaryawan,nama',
            'alamat'=>'required:datakaryawan,nama',
            'jabatan'=>'required:datakaryawan,nama',
            'divisi'=>'required:datakaryawan,nama',
        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'nohp.required'=>'No HP Wajib Diisi',
            'nohp.numeric'=>'No HP Harus Berupa Angka',
            'alamat.required'=>'Alamat Wajib Diisi',
            'jabatan.required'=>'Jabatan Wajib Diisi',
            'divisi.required'=>'Divisi Wajib Diisi',
        ]);

        $data = [
            'nama'=>$request->nama,
            'jeniskelamin'=>$request->jeniskelamin,
            'email'=>$request->email,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
            'jabatan'=>$request->jabatan,
            'divisi'=>$request->divisi,
        ];
        datakaryawan::create($data);
        return redirect()->to('karyawan')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = datakaryawan::where('id',$id)->first();
        return view('karyawan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama'=>'required:datakaryawan,nama',
            'jeniskelamin'=>'required:datakaryawan,jeniskelamin',
            'email'=>'required:datakaryawan,email',
            'nohp'=>'required|numeric:datakaryawan,nama',
            'alamat'=>'required:datakaryawan,nama',
            'jabatan'=>'required:datakaryawan,nama',
            'divisi'=>'required:datakaryawan,nama',
        ],[
            'nama.required'=>'Nama Wajib Diisi',
            'email.required'=>'Email Wajib Diisi',
            'nohp.required'=>'No HP Wajib Diisi',
            'nohp.numeric'=>'No HP Harus Berupa Angka',
            'alamat.required'=>'Alamat Wajib Diisi',
            'jabatan.required'=>'Jabatan Wajib Diisi',
            'divisi.required'=>'Divisi Wajib Diisi',
        ]);

        $data = [
            'nama'=>$request->nama,
            'jeniskelamin'=>$request->jeniskelamin,
            'email'=>$request->email,
            'nohp'=>$request->nohp,
            'alamat'=>$request->alamat,
            'jabatan'=>$request->jabatan,
            'divisi'=>$request->divisi,
        ];
        datakaryawan::where('id', $id)->update($data);
        return redirect()->to('karyawan')->with('success', 'Data Berhasil Di Ubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datakaryawan::where('id', $id)->delete();
        return redirect()->to('karyawan')->with('success', 'Berhasil Melakukan Hapus Data');
    }
}
