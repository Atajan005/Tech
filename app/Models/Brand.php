<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    protected $guarded = [
        'id',
    ];

    public function products()
    {
        return $this->hasMany(Product::class)
            ->orderBy('id', 'desc');
    }

    public $timestamps = false;
}
