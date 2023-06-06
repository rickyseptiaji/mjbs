<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datastock extends Model
{
    use HasFactory;
    protected $table = 'datastocks';
    protected $fillable = [
        'id',
        'produk',
        'kode',
        'kondisi',
        'qty',
        'satuan',
        'jumlah',
        'updated_at'
    ];
}
