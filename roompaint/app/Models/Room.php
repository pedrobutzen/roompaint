<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [];

    public static function boot() {
        parent::boot();

        static::deleting(function($room) {
            $room->walls()->delete();
        });
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     **/
    public function walls()
    {
        return $this->hasMany(\App\Models\Wall::class);
    }

    /**
     * Retorna a área pintável de todas as peredes do cômodo
     *
     * @return float
     */
    public function getArea()
    {
        return $this->walls->sum(fn($wall) => $wall->getArea());
    }

    /**
     * Retorna a quantidade em litros necessária para pintar todas as paredes o cômodo
     *
     * @return float
     */
    public function amountNeededToPaint()
    {
        return $this->walls->sum(fn($wall) => $wall->amountNeededToPaint());
    }
}
