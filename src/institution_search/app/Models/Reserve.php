<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = ['user_id', 'shop_id', 'shop_plan_id', 'reserve_id'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function shops()
    {
        return $this->hasMany(Shop::class);
    }

    public function shopPlans()
    {
        return $this->hasMany(ShopPlan::class);
    }
}
