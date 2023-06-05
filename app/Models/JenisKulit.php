<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKulit extends Model
{
    use HasFactory;
    protected $guarded = [];

    // public function rule(){
    //     return $this->belongsTo('App\Models\Rule');
    // }

    protected $table ='jenis_kulits';

    protected $primaryKey ='id_JK';

    public $incrementing = false;
    public $timestamps = true;

    public function gejala(){
        return $this->belongsToMany(gejala::class);
    }

    public function gejalas(){
        return $this->belongsToMany(gejala::class, 'gejala_jenis_kulit', 'jenis_kulit_id_JK','gejala_id');
    }

    public function hasil(){
        return $this->hasMany(HasilDiagnosa::class,'id_JK');
    }

}
