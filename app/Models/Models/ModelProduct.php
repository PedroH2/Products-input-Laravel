<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    public $timestamps = false;
    protected $table='product';
    protected $fillable = ['id', 'name', 'corridor', 'shelf', 'location', 'price'];
}
