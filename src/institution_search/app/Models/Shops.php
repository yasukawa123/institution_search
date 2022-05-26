<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    use HasFactory;

    public function reserves()
    {
        return $this->hasOne(Reserves::class);
    }

    public function shopPlans()
    {
        return $this->hasOne(ShopPlans::class);
    }
}
