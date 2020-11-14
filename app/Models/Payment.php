<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory,SoftDeletes;

     /**
     * Get the loan for this payment.
     */
    public function loan()
    {
        return $this->belongsTo('App\Models\Loan');
    }
    
}
