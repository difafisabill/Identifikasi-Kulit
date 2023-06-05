<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gejala_jenis_kulit extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "gejala_jenis_kulit";
    protected $primaryKey = 'id';
    protected $fillable = [
        'jenis_kulit_id_jk',
        'gejala_kd_gejala',
    ];

}
