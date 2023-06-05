<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'rules';

    protected $primaryKey = 'kd_aturan';

    public $incrementing = false; //agar tidak menambah nilai secara otomatis
    public $timestamps = true;

    public function jeniskulit()
    {
        return $this->belongsTo('App\Models\JenisKulit', 'kd_JK', 'id_JK');
    }

    public function gejala()
    {
        return $this->belongsTo('App\Models\gejala', 'kd_gjl', 'kd_gejala');
    }
    // lokasi, foreign(relation table), primary key(main table
}
