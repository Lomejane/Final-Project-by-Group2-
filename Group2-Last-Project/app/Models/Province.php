<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;
        protected $table = 'province_tbl';
    protected $primarykey = 'id';
    protected $fillable = ['province_description'];
}
