<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Pendonor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // ...

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
        // no action needed
    }

    public function getRememberTokenName()
    {
        return '';
    }

    protected $table = "pendonor";



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
        'nama' => 'required',
        'jk' => 'required',
        'tlp' => 'required',
        'alamat' => 'required',
        'gol_darah' => 'required',

        'password' => 'required',
    ];


    static $pesan = [
        'nama' => 'Data tidak boleh kosong !',
        'jk' => 'Data tidak boleh kosong !',
        'tlp' => 'Data tidak boleh kosong !',
        'alamat' => 'Data tidak boleh kosong !',
        'gol_darah' => 'Data tidak boleh kosong !',

        'password' => 'Data tidak boleh kosong !',


    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($pendonor) {
            $pendonor->kode_p = 'P-' .substr(uniqid(), 0, 4);
        });
    }






}
