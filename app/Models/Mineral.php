<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    use HasFactory;

    protected $table = 'minerales';
    protected $primaryKey = 'id';
    
    protected $fillable = ['nombre', 'formula', 'categoria', 'descripcion', 'sistema'];

}
