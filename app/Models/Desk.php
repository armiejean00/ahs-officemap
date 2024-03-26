<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desk extends Model
{
    use HasFactory;

    protected $fillable = [
        'desk_number',
        'is_out_of_order',
    ];

    public function bookings() {
        return $this->hasMany(Booking::class, 'desk_id');
    }

    // ? Waiting for confirmation to merge available_desks to bookings
    public function availableDesks() {
        return $this->hasMany(AvailableDesk::class, 'desk_id');
    } // ? Remove
}
