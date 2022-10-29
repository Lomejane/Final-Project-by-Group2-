<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageProperties extends Model
{
    use HasFactory;
    protected $table = 'HomePageProperties';
    protected $primaryKey = 'id';
    protected $fillable = ['PropertyDescription', 'PropertyLocation', 'PropertyPrice'];
}
