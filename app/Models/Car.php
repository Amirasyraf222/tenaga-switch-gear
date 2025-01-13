<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public $timestamps = false; // Disable automatic timestamps

    protected $fillable = ['name', 'manufacture_id', 'date_created'];

    protected $casts = [
        'date_created' => 'datetime', // Automatically cast TIMESTAMP to Carbon instance
    ];

    public function manufacture()
    {
        return $this->belongsTo(Manufacture::class);
    }
}

