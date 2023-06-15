<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\datastock;
use App\Exports\StockExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $jumlahbaris = 4;

        $query = datastock::query();

        if (strlen($katakunci)) {
            $query->where(function ($q) use ($katakunci) {
                $q->where('produk', 'like', "%$katakunci%")
                  ->orWhere('kode', 'like', "%$katakunci%");
            });
        }

        if ($start_date && $end_date) {
            $query->whereBetween('updated_at', [Carbon::parse($start_date)->startOfDay(), Carbon::parse($end_date)->endOfDay()]);
        }

        $data2 = $query->orderBy('id', 'desc')->paginate($jumlahbaris);

        return view('stock.stock')->with('data2', $data2);
    }

    public function exportToExcel(Request $request){
        $start_date = $request->start_date;
        $end_date = $request->end_date;
        $katakunci = $request->katakunci;
    
        $query = datastock::query();
    
        if ($start_date && $end_date) {
            $query->whereBetween('updated_at', [Carbon::parse($start_date)->startOfDay(), Carbon::parse($end_date)->endOfDay()]);
        }
    
        if ($katakunci) {
            $query->where(function ($q) use ($katakunci) {
                $q->where('produk', 'like', "%$katakunci%")
                  ->orWhere('kode', 'like', "%$katakunci%");
            });
        }
    
        $data2 = $query->get();
    
        return Excel::download(new StockExport($data2), 'dataproduk.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stock.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('produk', $request->produk);
        Session::flash('kode', $request->kode);
        Session::flash('qty', $request->qty);
        Session::flash('jumlah', $request->jumlah);

        $request->validate([
            'produk'=>'required:datastock,produk',
            'kode'=>'required:datastock,kode',
            'kondisi'=>'required:datastock,kondisi',
            'satuan'=>'required:datastock,satuan',
            'qty'=>'required|numeric:datastock,qty',
            'jumlah'=>'required|numeric:datastock,jumlah',
        ],[
            'produk.required'=>'Produk Wajib Diisi',
            'kode.required'=>'Kode Wajib Diisi',
            'kondisi.required'=>'Kondisi Wajib Diisi',
            'satuan.required'=>'Satuan Wajib Diisi',
            'qty.required'=>'Quantity Wajib Diisi',
            'qty.numeric'=>'Quantity Wajib Angka',
            'jumlah.required'=>'Jumlah Wajib Diisi',
            'jumlah.numeric'=>'Jumlah Wajib Angka',
        ]);

        $data2 = [
            'produk'=>$request->produk,
            'kode'=>$request->kode,
            'kondisi'=>$request->kondisi,
            'satuan'=>$request->satuan,
            'qty'=>$request->qty,
            'jumlah'=>$request->jumlah,
        ];
        datastock::create($data2);
        return redirect()->to('stock')->with('success', 'Data Berhasil Ditambahkan');
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
        $data2 = datastock::where('id', $id)->first();
        return view('stock.edit')->with('data2',$data2);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'produk'=>'required:datastock,produk',
            'kode'=>'required:datastock,kode',
            'kondisi'=>'required:datastock,kondisi',
            'satuan'=>'required:datastock,satuan',
            'qty'=>'required|numeric:datastock,qty',
            'jumlah'=>'required|numeric:datastock,jumlah',
        ],[
            'produk.required'=>'Produk Wajib Diisi',
            'kode.required'=>'Kode Wajib Diisi',
            'kondisi.required'=>'Kondisi Wajib Diisi',
            'satuan.required'=>'Satuan Wajib Diisi',
            'qty.required'=>'Quantity Wajib Diisi',
            'qty.numeric'=>'Quantity Wajib Angka',
            'jumlah.required'=>'Jumlah Wajib Diisi',
            'jumlah.numeric'=>'Jumlah Wajib Angka',
        ]);

        $data2 = [
            'produk'=>$request->produk,
            'kode'=>$request->kode,
            'kondisi'=>$request->kondisi,
            'satuan'=>$request->satuan,
            'qty'=>$request->qty,
            'jumlah'=>$request->jumlah,
        ];
        datastock::where('id', $id)->update($data2);
        return redirect()->to('stock')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        datastock::where('id', $id)->delete();
        return redirect()->to('stock')->with('success', 'Berhasil Melakukan Hapus Data');
    }
}