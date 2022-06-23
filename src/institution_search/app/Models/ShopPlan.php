<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopPlan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reserves()
    {
        return $this->belongsTo(Reserve::class);
    }

    public function shops()
    {
        return $this->belongsTo(Shop::class);
    }
}
