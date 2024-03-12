<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'status', 'provider_id'];
    public static $STATUS = [0,1];


    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

}
