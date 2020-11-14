<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use HasFactory,  SoftDeletes;

    protected $guarded =[];

    /**
     * Get the login details of client.
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User','email','email');
    }

    /**
     * Get the loans for this client.
     */
    public function loans()
    {
        return $this->hasMany('App\Models\Loan');
    }

     /**
     * Get all of the payments for the client.
     */
    public function payments()
    {
        return $this->hasManyThrough('App\Models\Payment', 'App\Models\Loan');
    }

}
