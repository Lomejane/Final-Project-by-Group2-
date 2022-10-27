<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Properties extends Model
{
    use HasFactory;
    protected $table = 'properties_tbl';
    protected $primarykey = 'id';
    protected $fillable = ['property_title', 'property_price', 'city_mun_description', 'province_description', 'property_description' ];
}
