<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengaduan extends Model
{
    use HasFactory;

    protected $table='pengaduan';
    protected $guarded=[];

    public function user()
    {
        return  $this->belongsTo('App\Models\Pengaduan','id_user');
    }

}
