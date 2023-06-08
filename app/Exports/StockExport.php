<?php

namespace App\Exports;

use App\Models\datastock;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class StockExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        $data = datastock::select('id', 'produk', 'kode', 'kondisi', 'qty', 'satuan', 'jumlah', 'updated_at')->get();


        $data->transform(function ($item) {
            $item->updated_at = Carbon::parse($item->updated_at)->format('Y-m-d H:i:s');
            return $item;
        });

        return $data;
    }

    public function headings(): array
    {
        return datastock::first()->getFillable();
    }
}