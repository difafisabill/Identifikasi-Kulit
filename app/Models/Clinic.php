<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ='clinics';

    protected $primaryKey ='id_klinik';

    public $incrementing = false;
    public $timestamps = true;

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor','no_str','no_str');

    }


}
