<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table ='_p_e_r_m_i_s_o';
    protected $primarykey='CODIGO_PERMISO';
    protected $fillable=['PERMISO']
}

