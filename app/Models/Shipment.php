<?php

namespace App\Models;


use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
}
