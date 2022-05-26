<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserves extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->hasOne(Shops::class);
    }

    public function shopPlans()
    {
        return $this->hasOne(ShopPlans::class);
    }
}
