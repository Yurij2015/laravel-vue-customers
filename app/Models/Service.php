<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
//    protected $table = 'services';
//    use HasFactory;
//    public $timestamps = true;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description'
    ];
}
