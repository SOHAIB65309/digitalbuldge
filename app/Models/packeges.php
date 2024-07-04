<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class packeges extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'type', 'actual_amount', 'discounted_price'];
    public function services()
    {
        return $this->hasMany(services::class, 'package_id');
    }
}
