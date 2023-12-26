<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // use HasFactory;
    protected $fillable = ['from_location', 'to_location', 'trip_date', 'available_seats'];

    public function seatAllocations() {
        return $this->hasMany(SeatAllocation::class);
    }
}
