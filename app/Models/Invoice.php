<?php

namespace App\Models;

use App\Models\Shipment;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function shipment(){
        return $this->belongsToMany(Shipment::class);
    }
}
