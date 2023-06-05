<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function clinic(){
        return $this->belongsTo('App\Models\Clinic');
    }
    protected $table ='doctors';
    protected $primaryKey ='no_str';

    public $incrementing = false;
    public $timestamps = true;


}
