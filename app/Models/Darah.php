<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Darah extends Model
{
    use HasFactory;

    protected $table = "darah";


    public function donor(){
        return  $this->hasMany(Donor::class, 'darah_id', 'id');
    }

    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id', 'id');
    }

    protected $fillable = [
        'jenis_gol',
        'stok_darah',

    ];

    static $inputan = [
        "jenis_gol" =>"require",
        "stok_darah" =>"require",
    ];

    static $pesan = [
        "jenis_gol.require"=> "Data tidak boleh kosong !",
        "stok_darah.require"=> "Data tidak boleh kosong !",
    ];


}
