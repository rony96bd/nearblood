<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Donor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'donor';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $dates = ['birth_date', 'last_donate'];

    protected $casts = [
        'socialMedia' => 'object'
    ];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function blood()
    {
        return $this->belongsTo(Blood::class, 'blood_id');
    }


    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

}
