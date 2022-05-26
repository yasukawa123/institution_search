<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPlan extends Model
{
    use HasFactory;

    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }

    public function shops()
    {
        return $this->belongTo(Shop::class);
    }
}
