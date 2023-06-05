<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasient extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table ='pasients';

    protected $primaryKey ='id_pasient';

    public function doctor(){
        return $this->belongsTo('App\Models\Doctor','no_str','no_str');

    }

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic', 'id_klinik', 'id_klinik');
    }

    public function sesi()
    {
        return $this->belongsTo('App\Models\Sesi', 'id_sesi', 'id_sesi');
    }
    // lokasi, foreign(relation table), primary key(main table
}
