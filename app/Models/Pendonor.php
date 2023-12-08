<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendonor extends Model
{
    use HasFactory;

    protected $table ="pendonor";



    public function donor(){
        return  $this->hasMany(Donor::class, 'pendonor_id', 'id');
    }


    protected $fillable = [
        'nama',
        'jk',
        'tlp',
        'alamat',
        'gol_darah',
        'kode_p',
        'password',
        'foto',



    ];

    static $inputan = [
        'nama' => 'require',
        'jk' => 'require',
        'tlp' => 'require',
        'alamat' => 'require',
        'gol_darah' => 'require',
        'kode_p' => 'require',
        'password' => 'require',
        'foto' => 'require',
 
    ];

    static $pesan = [
        'nama' => 'Data tidak boleh kosong !',
        'jk' => 'Data tidak boleh kosong !',
        'tlp' => 'Data tidak boleh kosong !',
        'alamat' => 'Data tidak boleh kosong !',
        'gol_darah' => 'Data tidak boleh kosong !',
        'kode_p' => 'Data tidak boleh kosong !',
        'password' => 'Data tidak boleh kosong !',
        'foto' => 'Data tidak boleh kosong !',
        'level' => 'Data tidak boleh kosong !',
    ];


}
