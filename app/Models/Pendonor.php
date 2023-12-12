<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pendonor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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


    ];

    static $pesan = [
        'nama' => 'Data tidak boleh kosong !',
        'jk' => 'Data tidak boleh kosong !',
        'tlp' => 'Data tidak boleh kosong !',
        'alamat' => 'Data tidak boleh kosong !',
        'gol_darah' => 'Data tidak boleh kosong !',
        'kode_p' => 'Data tidak boleh kosong !',
        'password' => 'Data tidak boleh kosong !',


    ];





}
