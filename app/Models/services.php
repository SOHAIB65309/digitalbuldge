<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services extends Model
{
    use HasFactory;
    protected $fillable = ['package_id', 'service'];

    public function package()
    {
        return $this->belongsTo(packeges::class);
    }
}
