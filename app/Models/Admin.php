<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

class Admin extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    protected $table = 'admin';
    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $casts = [
        'nama' => 'string',
    ];

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
