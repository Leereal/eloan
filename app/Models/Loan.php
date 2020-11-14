<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Loan extends Model
{
    use HasFactory, SoftDeletes;
     /**
     * Get the Client for this loan.
     */
    public function client()
    {
        return $this->belongsTo('App\Models\Client');
    }

     /**
     * Get the payments for this loan.
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Payment');
    }
}
