<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $table = 'donor';

    public function pendonor()
    {
        return $this->belongsTo(Pendonor::class, 'pendonor_id', 'id');
    }

    public function darah()
    {
        return $this->belongsTo(Darah::class, 'darah_id', 'id');
    }
}
