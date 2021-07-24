<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
//    protected $table = 'services';
//    use HasFactory;
//    public $timestamps = true;
    protected $fillable = [
        'name',
        'description'
    ];
}
