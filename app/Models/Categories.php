<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable =[
        'id',
        'category_name',
        'parent_category_id',
        'is_open',
    ];
}
