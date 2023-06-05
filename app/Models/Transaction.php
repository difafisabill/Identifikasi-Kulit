<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table ='transactions';

    protected $primaryKey ='id_transaksi';

    public function pasient()
    {
        return $this->belongsTo('App\Models\Pasient', 'id_pasient', 'id_pasient');
    }

    public function perawatan()
    {
        return $this->belongsTo('App\Models\Perawatan', 'id_perwatan', 'id_perwatan');
    }

    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic', 'id_klinik', 'id_klinik');
    }
}
