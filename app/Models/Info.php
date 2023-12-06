<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;

    protected $table = 'info';

    static $inputan = [
        'judul' => 'require',
        'thumbnail' => 'require',
        'deskripsi' => 'require',
    ];

    static $pesan = [
        'judul' => 'Data tidak boleh kosong !',
        'thumbnail' => 'Data tidak boleh kosong !',
        'deskripsi' => 'Data tidak boleh kosong !',
    ];
}
