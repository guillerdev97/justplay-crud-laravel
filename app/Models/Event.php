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

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
   
}
