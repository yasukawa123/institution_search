<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reserves()
    {
        return $this->belongsTo(Reserve::class);
    }

    public function shopPlans()
    {
        return $this->belongsTo(ShopPlan::class);
    }
}
