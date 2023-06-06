<?php

namespace App\Exports;

use App\Models\datastock;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;


class StockExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return datastock::all();
    }

    public function headings(): array
    {
        return datastock::first()->getFillable();
    }
}