<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Admin extends Authenticatable
{
    use HasFactory , Notifiable, HasApiTokens;
    protected $table = 'admin';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'foto',
    ];


    static $inputan = [
        'nama' => 'required',
        'email' => 'required',
        'password' => 'required',
        'foto' => 'required',
    ];


    static $pesan = [
        'nama' => 'Data tidak boleh kosong !',
        'email' => 'Data tidak boleh kosong !',
        'password' => 'Data tidak boleh kosong !',
        'foto' => 'Data tidak boleh kosong !',


    ];

}
