<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawatan extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ='perawatan';
    protected $primaryKey ='id_perwatan';
}
