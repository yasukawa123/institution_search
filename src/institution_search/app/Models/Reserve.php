<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    public function uses()
    {
        return $this->hasOne(User::class);
    }

    public function shops()
    {
        return $this->hasOne(Shop::class);
    }

    public function shopPlans()
    {
        return $this->hasOne(ShopPlan::class);
    }
}
