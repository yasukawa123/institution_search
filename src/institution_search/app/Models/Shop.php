<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }

    public function shopPlans()
    {
        return $this->hasMany(ShopPlan::class);
    }
}
