<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPlans extends Model
{
    use HasFactory;

    public function reserves()
    {
        return $this->hasOne(Reserves::class);
    }

    public function shops()
    {
        return $this->belongTo(Shops::class);
    }
}
