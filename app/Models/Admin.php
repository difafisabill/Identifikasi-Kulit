<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table ='admins';
    protected $primaryKey ='id_admin';

    public $incrementing = false;
    public $timestamps = true;

}
