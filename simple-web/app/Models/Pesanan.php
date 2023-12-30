<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table='pesanan';
    protected $guarded = [];

    public function makanan()
    {
        return $this->belongTo('App\Models\Makanan','id_makanan');
    }
}
