<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'eventName',
        'description',
        'eventDate',
        'eventTime',
        'eventLocation',
        'capacity',
        'paid',
        'eventNature', // 'public' or 'private'
        'organizer_id'
    ];

    public function organizer()
    {
        return $this->belongsTo(User::class, 'organizer_id');
    }

    public function attendees()
    {
        return $this->belongsToMany(User::class, 'event_user')->withTimestamps();
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}

