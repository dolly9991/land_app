<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandRight extends Model
{
    use HasFactory;

    protected $fillable = [
        'transferorname',
        'mstatus',
        'transferoromang',
        'transferortelephone',
        'transferoraddress',
        'transferorvillage',
        'transferordistrict',
        'transferordate',
        'plotlocation',
        'presentuse',
        'leaseduration',
        'transfereename',
        'transfereeomang',
        'dob',
        'transfereetelephone',
        'transfereeaddress',
        'transfereevillage',
        'transfereedistrict',
        'date',
    ];
}
