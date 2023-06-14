<?php

namespace App\Exports;

use App\Models\datastock;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class StockExport implements FromCollection, WithHeadings
{
    protected $data2;

    public function __construct($data2)
    {
        $this->data2 = $data2;
    }
    public function collection()
    {
        return $this->data2;
    }

    public function headings(): array
    {
        return [
            'No',
            'Produk',
            'Kode',
            'Kondisi',
            'Qty',
            'Satuan',
            'Jumlah',
            'Tanggal & Jam'
        ];
    }
}