<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function guide(){
        return $this->belongsTo(User::class);
    }

    public function package(){
        return $this->belongsTo(TravelPackage::class);
    }
}
