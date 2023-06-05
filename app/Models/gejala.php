<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class gejala extends Model
{
    use HasFactory;
    protected $guarded = [];


    protected $table ='gejalas';

    protected $primaryKey ='kd_gejala';

    public $incrementing = false; //agar tidak menambah nilai secara otomatis
    public $timestamps = true;

    public function result(){
        return $this->belongsToMany(HasilDiagnosa::class);
    }


}
