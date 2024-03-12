<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'phone',
    'email',
    'details',
    'map_desc',
    'lat',
    'lng',
    'avg_rate',
    'rate_count',
    'delivery_price',
     'image',
    'status',
    'password'
];

public static $STATUS = [0,1];
public static $DEFAULT_IMG = 'upload/no_image.jpg';

}
