<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'img',
        'spaces',
        'event_date',
        'carousel',
    ];

   /*  static function isInscribed($events, $eventsOfUser)
    {
            foreach ($events as $event) {
                foreach ($eventsOfUser as $eventOfUser) {
                    if ($event->id === $eventOfUser->id) {
                        $event->isInscribed = '1';
                    }
              } 
            }

            return $events;
    } */

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
