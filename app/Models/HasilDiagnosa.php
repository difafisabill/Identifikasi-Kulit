<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilDiagnosa extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = "hasil_diagnosa";
    protected $primaryKey = 'id';

    public function gejala(){
        return $this->belongsToMany(gejala::class);
    }

    public function gejalas(){
        return $this->belongsToMany(gejala::class, 'gejala_hasil_diagnosa', 'hasil_diagnosa_id','gejala_kd_gejala');
    }
    public function jeniskulit(){
        return $this->belongsTo(JenisKulit::class, 'id_kulit');

    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user');

    }


}
